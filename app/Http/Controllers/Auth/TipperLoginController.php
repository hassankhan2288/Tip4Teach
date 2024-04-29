<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;

class TipperLoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::TIPPER;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest:tipper')->except('logout');
    }

    public function tipperSignup(){
        return view('frontend.tipper-signup');
    }
    public function tipperSignupPost(Request $request)
    {
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
    
        $isEmailExists = User::where('email', $request->email)->exists();
        if ($isEmailExists) {
            return redirect()->back()->with('error', 'The email is already registered');
        } 
    
        $tipper = new User();
        $tipper->first_name = $request->first_name;
        $tipper->last_name = $request->last_name;
        $tipper->email = $request->email;
        $tipper->password = Hash::make($request->password);
        $tipper->save();
        if (auth()->guard('tipper')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('website.tipper.account');
        } else {
            return redirect()->route('website.home');
        }
    }

    public function tipperLogin(){
        return view('auth.tipper-signin');
    }


    public function tipperLoginPost(Request $request){

        // dd($request->all());
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth::guard('tipper')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/home');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function tipperSignup(){
        return view('frontend.tipper-signup');
    }
    public function tipperSignupPost(Request $request)
    {
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
    
        $isEmailExists = User::where('email', $request->email)->exists();
        if ($isEmailExists) {
            return redirect()->back()->with('error', 'The email is already registered');
        } 
    
        $tipper = new User();
        $tipper->first_name = $request->first_name;
        $tipper->last_name = $request->last_name;
        $tipper->email = $request->email;
        $tipper->password = Hash::make($request->password);
        $tipper->save();
        if (auth()->guard('tipper')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('website.tipper.account');
        } else {
            return redirect()->route('website.home');
        }
    }
}
