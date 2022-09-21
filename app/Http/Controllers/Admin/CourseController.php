<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    //
    function __construct(){
        $this->middleware('auth');
    }

    function index(){
        return view('courses');
    }

    function detail(){
        return view('course_detail');
    }
}
