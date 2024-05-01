<?php

namespace App\Http\Controllers\Tipper;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function tipperDashboard()
    {
        $user = Auth::user();
        // dd($user);
        return view('tipper.partials.user-dashboard',compact('user'));
    }
    public function tipHistory()
    {
        return view('tipper.partials.tiphistory');
    }
    public function tipList()
    {
        return view('tipper.partials.ongoing-tips');
    }
}
