<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Book;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('admin');
    }

    function index(){

        $students = User::where('role', '0')->count();
        $instructors = User::where('role', '2')->count();
        $books = Book::count();
        $courses = Course::count();

        // User::get();

        return view('admin.admin_dashboard')
            ->with(compact('students'))
            ->with(compact('instructors'))
            ->with(compact('books'))
            ->with(compact('courses'));
    }

    function show_courses(){

        $courses = Course::paginate(3);
        $courses_total = Course::count();
        return view('admin.admin_courses')
            ->with(compact('courses'))
            ->with(compact('courses_total'));
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

        $instructors = Instructor::all();

        return view('admin.admin_instructors', compact('instructors'));
    }

    function show_users(){
        $users = User::all();

        return view('admin.admin_users', compact('users'));
    }

    function show_instructor_detail(){
        return view('admin.admin_instructor_detail');
    }

    function show_user_detail($id){

        $user = User::find($id);
        return view('admin.admin_user_detail', compact('user'));
    }

    function show_course_detail($id){
        $course = Course::find($id);

        return view('admin.admin_course_detail', compact('course'));
    }

    function show_course_create(){
        return view('admin.admin_course_create');
    }

    function show_books(){

        $books = Book::all();
        return view('admin.admin_books', compact('books'));
    }

    function show_book_new(){
        return view('admin.admin_book_library_new_entry');
    }

    function new_book(Request $request){
        $this->validate($request, [
            'book_title' => 'required'
        ]);

        Book::create([
            'book_name' => $request->book_title,
            'author' => $request->author,
            'pic' => $request->pic
        ]);

        return redirect()->route('admin_books');
    }

    function sign_out(Request $request){
        Auth::logout();

        return redirect()->route('sign_in');
    }
}
