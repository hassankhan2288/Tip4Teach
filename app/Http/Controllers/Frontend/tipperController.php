<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
class tipperController extends Controller
{
    public function tipperAccount(Request $request)
    {
        $authUser = Auth::user();
        // dd($authUser);
        $users = User::find($request->id);
        // dd($users);
        return view('frontend.user-setup-account02',compact('users'));
    }
    public function tipperAccountPost(Request $request)
    {
        dd($request->all());
    }

    public function tipperSignup(){
        return view('frontend.tipper-signup');
    }
    public function tipperSignupPost(Request $request){

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
    
        // Create new user
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
        return view('frontend.tipper-signin');
    }
    public function tipperLoginPost(Request $request){

        // dd($request->all());
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth::guard('tipper')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('tipper/home');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    public function tipperLogout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->route('website.home');
    }
}
