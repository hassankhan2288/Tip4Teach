<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function teacher_dashboard()
    {
        $user = Auth::user();
        // dd($user);
        return view('teachers.partials.teacher-dashboard',compact('user'));
    }
    public function tipReceivedList(){
        return view('teachers.partials.list-received-tips');
    }
}
