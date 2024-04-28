<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class teacherController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:teacher');

    }

    public function teacherAccount(Request $request)
    {
        $authUser = Auth::guard('teacher')->user();
        // dd($authUser);
        $teacher = Teacher::where('id',$authUser->id)->first();
        // dd($teacher);
        return view('teachers.partials.setup-account02',compact('teacher'));
    }

    public function teacherAccountPost(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'nullable|numeric',
        ]);
        $teacher = Teacher::findOrFail($request->id);
        if ($request->hasFile('profile_image')) {
            $imageName = time().'.'.$request->profile_image->extension();  
            $request->profile_image->move(public_path('images'), $imageName);
    
            $teacher->update([
                'profile_image' =>  $imageName,
            ]);
        }
    
        $teacher->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'banking_detail' => $request->banking_detail,
            'school' => $request->school,
            'subject' => $request->subject,
            'experience' => $request->experience,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
        ]);
    
        return redirect()->route('teacher.dashboard')->with('success', 'Profile updated successfully');        
    }
    
    public function teacherLogout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->route('website.teacher.login');
    }
}
