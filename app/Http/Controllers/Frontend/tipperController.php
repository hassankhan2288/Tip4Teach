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
    
    public function tipperLogout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->route('website.home');
    }
}
