<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Teacher;


class TeacherLoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::TEACHER;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest:teacher')->except('logout');
    }

    public function teacherSignup(){
        return view('auth.teacher-signup');
    }
    public function teacherSignupPost(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
    
        $isEmailExists = Teacher::where('email', $request->email)->exists();
        if ($isEmailExists) {
            return redirect()->back()->with('error', 'The email is already registered');
        } 
        $teacher = new Teacher;
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);
        $teacher->save();
        if (auth()->guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('website.teacher.account');
        } else {
            return redirect()->route('website.teacher.login');
        }
    }


    public function teacherLogin()
    {
        return view('auth.teacher-signin');
    }


    public function teacherLoginPost(Request $request){

        // dd($request->all());
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/teacher/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

}
