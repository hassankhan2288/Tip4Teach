<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function viewProfile($id)
    {
        $teachers = Teacher::find($id);
        // dd($teachers);
        return view('teachers.partials.view-profile02', compact('teachers'));
    }
}
