<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Calendar;
use DB;
use Auth;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendar = DB::table('calendars')->get()->toArray();
        return view('Calendar/index', compact('calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Calendar/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
        ['Date' => 'required|unique:calendars,Calendar_date',]
         );
          
        $dinvishesh = array();
        $input = $request->all();
        $data['Rahu_Kal'] = $input['Rahu_Kal'];
        $data['Ketu_kal'] = $input['Ketu_kal'];
        array_push($dinvishesh, $data);


        $dinRashi = array();
        $Rahidata['Mesh'] = $input['Mesh'];
        $Rahidata['Vrushabh'] = $input['Vrushabh'];
        $Rahidata['Mithun'] = $input['Mithun'];
        $Rahidata['Kark'] = $input['Kark'];
        $Rahidata['Sinh'] = $input['Sinh'];
        $Rahidata['Kanya'] = $input['Kanya'];
        $Rahidata['Tula'] = $input['Tula'];
        $Rahidata['Vrushchik'] = $input['Vrushchik'];
        $Rahidata['Dhanu'] = $input['Dhanu'];
        $Rahidata['Makar'] = $input['Makar'];
        $Rahidata['Kumbha'] = $input['Kumbha'];
        $Rahidata['Meen'] = $input['Meen'];

        array_push($dinRashi, $Rahidata);
        

        $varCalendar = new Calendar([
            'Calendar_date'=> $request->get('Date'),
            'Calendar_dinVishesh'=> json_encode($dinvishesh),
            'Calendar_dinRashi'=>json_encode($dinRashi),
            ]);
        $varCalendar->save();


        return redirect('calendar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Calendar = Calendar::find($id);
        $dinvishesh = json_decode($Calendar['Calendar_dinVishesh']);
        $dinRashi = json_decode($Calendar['Calendar_dinRashi']);
        
        return view('Calendar/edit', compact('Calendar','dinvishesh','dinRashi'));
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
        $dinvishesh = array();
        $input = $request->all();
        $data['Rahu_Kal'] = $input['Rahu_Kal'];
        $data['Ketu_kal'] = $input['Ketu_kal'];
        array_push($dinvishesh, $data);

        $Calendar = Calendar::find($id);
        
        $Calendar->Calendar_date = $request->get('Calendar_date');
        $Calendar->Calendar_dinVishesh =json_encode($dinvishesh);
        $Calendar->save();
        return redirect('calendar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
