<?php

namespace App\Http\Controllers\Tipper;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function viewProfile($id)
    {
        $tippers = User::find($id);
        return view('tipper.partials.user-view-profile02',compact('tippers'));
    }
    public function ProfileEdit($id)
    {
        $tippers = User::find($id);
        return view('tipper.partials.user-edit-account02',compact('tippers'));
    }
    public function ProfileUpdate(Request $request,$id)
    {
        // dd($request->all());
        $tipper_update =User::findOrFail($id);
        $this->validate($request,[
            'first_name'=>'string|required|max:50',
            'last_name'=>'string|required|max:50',
            'phone'=>'|nullable',
            'occupation'=>'string|nullable',
            'description'=>'string|nullable',
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
        $tipper_update->fill($data)->save();

        return redirect()->route('tipper.dashboard');
    }
    public function showPassword()
    {
        return view('tipper.partials.password-reset-user');
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
