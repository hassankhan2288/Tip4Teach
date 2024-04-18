<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function tipNow()
    {
        $current_teacher = Teacher::where('teacher_status','1')->get();
        $farmer_teacher = Teacher::where('teacher_status','0')->get();
        // dd($farmer_teacher);
        return view('frontend.tip',compact('current_teacher','farmer_teacher'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function role(){
        return view('frontend.role');
    }
    public function teacherSignup(){
        return view('frontend.teacher-signup');
    }
    public function tipperSignup(){
        return view('frontend.tipper-signup');
    }
    public function tipperAccount(){
        return view('frontend.user-setup-account02');
    }
    public function teacherAccount(){
        return view('frontend.setup-account02');
    }
    public function teacher_dashboard(){
        return view('frontend.list-received-tips');
    }
}
