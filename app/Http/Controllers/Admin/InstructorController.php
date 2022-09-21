<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Instructor;

class InstructorController extends Controller
{
    //
    function index(){
        return view('instructors');
    }

    function detail(){
        return view('instructor_detail');
    }
}
