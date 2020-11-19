<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
        'PhoneNumber' => 'required',
        'password' => 'required'
        ]);


        $user1 = User::where('PhoneNumber', $request->get('PhoneNumber'))->get()->toArray();
        $user = User::where('PhoneNumber', $request->get('PhoneNumber'))->first();


        if(sizeof($user1) == 0)
        {
            echo "Your account is not registered with us";
            return back()->withErrors(['PhoneNumber' => 'Your account is not registered with us']);
        }

        if($user->status==0)
        {
            echo "Your account has been disabled";
            return back()->withErrors(['PhoneNumber' => 'Your account has been disabled']);
        }

       
        
        if(Hash::check($request->get('password'), $user->password) )
        {
            Auth::login($user);
            return redirect('home');
        }

        return back()->withErrors(['PhoneNumber' => 'Phone number or password is wrong.']);

    }


    public function logout(Request $request)
    {
      
        
        Auth::logout();
        
        return redirect('/login');
    }
}
