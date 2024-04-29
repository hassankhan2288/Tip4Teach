<?php

namespace App\Http\Controllers\Tipper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function tipperDashboard()
    {
        return view('tipper.partials.user-dashboard');
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
