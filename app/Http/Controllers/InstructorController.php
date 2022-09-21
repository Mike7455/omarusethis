<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Instructor;

class InstructorController extends Controller
{
    //


    function __construct(){
        $this->middleware('auth');
    }


    function index(){

        $instructors = Instructor::paginate(8);

        return view('instructors', compact('instructors'));
    }

    function detail($id){
        $instructor = Instructor::find($id);

        return view('instructor_detail');
    }
}
