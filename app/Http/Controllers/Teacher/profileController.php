<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class profileController extends Controller
{
    public function viewProfile($id)
    {
        $teachers = Teacher::find($id);
        // dd($teachers);
        return view('teachers.partials.view-profile02', compact('teachers'));
    }
    public function ProfileEdit($id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.partials.edit_account02',compact('teachers'));
    }
    public function ProfileUpdate(Request $request,$id)
    {
        // dd($request->all());
        $teacher_update =Teacher::findOrFail($id);
        $this->validate($request,[
            'first_name'=>'string|required|max:50',
            'last_name'=>'string|required|max:50',
            'phone'=>'|nullable',
            'banking_details'=>'string|nullable',
            'school'=>'string|nullable',
            'subject'=>'string|nullable',
            'experience'=>'string|nullable',
            'city'=>'string|nullable',
            'state'=>'string|nullable',
            'country'=>'string|nullable',
            'postal_code'=>'string|nullable',
            'profile_image'=>'nullable|image|mimes:jpeg,jpg,png,gif',

        ]);
        $data=$request->all(); 
        // dd($data);
        $profile_image = $request->profile_image;
        if ($profile_image) {
            $photoName = $profile_image->getClientOriginalName();
            $profile_image->move('images/', $photoName);
            $data['profile_image'] = $photoName;
        } 
        $teacher_update->fill($data)->save();

        return redirect()->route('teacher.dashboard');
    }
    public function showPassword()
    {
        return view('teachers.partials.password-reset');
    }
    public function changePassword(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'password'=>'required|min:6|max:30|confirmed',
            'password_confirmation' =>'required|same:password'
        ]);
    
        $user = Auth::user();
        $user->password = hash::make($request->password);
        $user->save();
    
        return redirect()->back()->with('success', 'Password changed successfully');
    }
}
