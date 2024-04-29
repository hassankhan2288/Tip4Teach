<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
class tipperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:tipper');

    }

    public function tipperAccount(Request $request)
    {
        $authUser = Auth::guard('tipper')->user();
        if (!$authUser) {
            return redirect()->route('website.tipper.login');
        }
        $users = User::where('id',$authUser->id)->first();
        // dd($users);
        return view('frontend.user-setup-account02',compact('users'));
    }
    public function tipperAccountPost(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'nullable|numeric',
        ]);
        $user = User::findOrFail($request->id);
        if ($request->hasFile('profile_image')) {
            $imageName = time().'.'.$request->profile_image->extension();  
            $request->profile_image->move(public_path('images'), $imageName);
    
            $user->update([
                'profile_image' =>  $imageName,
            ]);
        }
    
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'occupation' => $request->occupation,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'profile_image' => 'images/' . $imageName, 
        ]);
    
        return redirect()->route('website.home')->with('success', 'Profile updated successfully');
    }
  
    
    
    public function tipperLogout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->route('website.home');
    }
}
