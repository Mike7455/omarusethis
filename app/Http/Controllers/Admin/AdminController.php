<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Book;

class AdminController extends Controller
{
    //
    public function __construct(){
        // $this->middleware(['guest']);
    }

    function index(){

        // User::get();

        return view('admin.admin_dashboard');
    }

    function show_courses(){
        return view('admin.admin_courses');
    }

    function new_course(Request $request){
        // dd($request);
        $this->validate($request, [
            'course_title' => 'required'
        ]);

        Course::create([
            'course_name' => $request->course_title,
            'course_description' => $request->course_description,
            'pic' => $request->pic
        ]);

        return redirect()->route('admin_courses');
    }

    function show_instructors(){
        return view('admin.admin_instructors');
    }

    function show_users(){
        return view('admin.admin_users');
    }

    function show_instructor_detail(){
        return view('admin.admin_instructor_detail');
    }

    function show_user_detail(){
        return view('admin.admin_user_detail');
    }

    function show_course_detail(){
        return view('admin.admin_course_detail');
    }

    function show_course_create(){
        return view('admin.admin_course_create');
    }

    function show_books(){
        return view('admin.admin_books');
    }

    function show_book_new(){
        return view('admin.admin_book_library_new_entry');
    }

    function new_book(Request $request){
        $this->validate($request, [
            'book_title' => 'required'
        ]);

        Book::create([
            'name' => $request->book_title,
            'author' => $request->author,
            'pic' => $request->pic
        ]);

        redirect()->route('admin_books');
    }
}
