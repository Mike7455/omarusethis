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

        $courses = Course::paginate(3);

        return view('courses', compact('courses'));
    }

    function detail($id){

        $course = Course::find($id);
        // dd($course);
        return view('course_detail', compact('course'));
    }
}
