<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Service;
use Auth;
use \Crypt;

class ServiceConteroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varService = Service::get()->toArray();
        return view("Service/index", compact('varService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Service/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'Service_name' => 'required|min:3|max:25',
            'Service_description' => 'required|min:3|max:200',
            'Service_prize' => 'required',
            'Service_image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'Service_image2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'Service_image3' => 'image|mimes:jpeg,png,jpg|max:2048',
           ]); 
        
           
        $Service_image1_Name = time().'-Service_image1'.'.'.$request->Service_image1->extension();
        $request->Service_image1->move(public_path('images'), $Service_image1_Name);
        $Service_image2_Name="";
        $Service_image3_Name="";

        if(!is_null($request->Service_image2))
        {
            $Service_image2_Name = time().'-Service_image2'.'.'.$request->Service_image2->extension();   
            $request->Service_image2->move(public_path('images'), $Service_image2_Name);
        }
        if(!is_null($request->Service_image))
        {
            $Service_image3_Name = time().'-Service_image3'.'.'.$request->Service_image3->extension();
            $request->Service_image3->move(public_path('images'), $Service_image3_Name); 
        }
       
        
        $varService = new Service([
            'Service_name'=>  $request->get('Service_name'),
            'Service_description'=> $request->get('Service_description'),
            'Service_prize'=> $request->get('Service_prize'),
            'Service_image1' => $Service_image1_Name,
            'Service_image2' => $Service_image2_Name,
            'Service_image3' => $Service_image3_Name,
        ]);

        $varService->save();
       
        return redirect("service");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $varService = Service::find($id);
        if( $varService->Service_status==0)
        {
            $varService->Service_status=1;
        }
        else{
            $varService->Service_status=0;
        }
        $varService->save();

        return redirect('service')->with('success', "Service updated successfully");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Service = Service::find($id);
        return view('Service/view', compact('Service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Service_name' => 'required|min:3|max:25',
            'Service_description' => 'required|min:3|max:200',
            'Service_prize' => 'required',
            'Service_image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'Service_image2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'Service_image3' => 'image|mimes:jpeg,png,jpg|max:2048',
           ]); 
        
       

        $varService = Service::find($id);

        $Service_image1_Name= $varService->Service_image1;
        $Service_image2_Name= $varService->Service_image2;
        $Service_image3_Name= $varService->Service_image3;

        if(!is_null($request->Service_image1))
        {
            $Service_image1_Name = time().'-Service_image1'.'.'.$request->Service_image1->extension();
            $request->Service_image1->move(public_path('images'), $Service_image1_Name);
        }
        if(!is_null($request->Service_image2))
        {
            $Service_image2_Name = time().'-Service_image2'.'.'.$request->Service_image2->extension();   
            $request->Service_image2->move(public_path('images'), $Service_image2_Name);
        }
        if(!is_null($request->Service_image))
        {
            $Service_image3_Name = time().'-Service_image3'.'.'.$request->Service_image3->extension();
            $request->Service_image3->move(public_path('images'), $Service_image3_Name); 
        }

        $varService->Service_name = $request->get('Service_name');
        $varService->Service_description = $request->get('Service_description');
        $varService->Service_prize = $request->get('Service_prize');
        $varService->Service_image1 = $Service_image1_Name;
        $varService->Service_image2 = $Service_image2_Name;
        $varService->Service_image3 = $Service_image3_Name;
        $varService->save();

        return redirect('service')->with('success', "Service updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
