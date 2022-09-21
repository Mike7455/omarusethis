<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Image;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Instructor;
use App\Models\Book;
use App\Models\Course;
use App\Models\Request as RequestModel;

class UserController extends Controller
{
    public function __construct(){
        // $this->middleware(['auth']);

        $this->middleware('not_admin');
    }

    //
    function home(){

        if(Auth::user()->role == '99'){
            return redirect()->route('admin_dashboard');
        }



        $students = User::where('role', '0')->count();
        $instructors = User::where('role', '2')->count();
        // $instructors = Instructor::count();
        $books = Book::count();
        $courses = Course::count();


        return view('home')
        ->with(compact('students'))
        ->with(compact('instructors'))
        ->with(compact('books'))
        ->with(compact('courses'));
    }

    function index(){
        return view('user_dashboard');
    }

    function edit(){
        return view('user_edit');
    }

    function edit_user(Request $request){



        // $user = User::find(Auth::id());

        // $image_name = Auth::id().'-'.time().'.'.$request->user_pic->extension();
        // $request->user_pic->move(public_path('users', $image_name));
        dd([
            $request->user_pic, "hello",
            $request->user_pic->file(),
            // time() . '-' . $avatar->getClientOriginalExtension()
        ]);


        if($request->hasFile('user_pic')){
            $avatar = $request->file('user_pic');
            $filename = time() . '-' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatar/' . $filename));

            $user = Auth::user();
            $user->pic = $filename;
            $user->save();
        }

        // $user->fill([
        //     'fname' => $request->fname,
        //     'lname' => $request->lname,
        //     'm_name' => $request->m_name,
        //     'email' => $request->email,
        //     'pic' => $image_name,
        //     'institution' => $request->institution,
        //     // 'year' => $request->year,
        //     // 'email' => $request->email

        // ]);

        // Save user to database
        // $user->save();

        return redirect()->route('home');


    }

    function edit_user_image(Request $request){




        // User::creat([
        //     'email' => $request->email,
        //     'password' => Hash::$request->password,
        // ]);

        dd('thsi is fu');

        $user = User::find(Auth::id());

        $image_name = Auth::id().'-'.time().'.'.$request->user_pic->extension();
        $request->user_pic->move(public_path('users', $image_name));

        $user->fill([
            'pic' => $image_name,
        ]);

        // Save user to database
        $user->save();

        return redirect()->route('home');


    }

    function get_details(){
        return view('user_details');


    }


    function update_details(Request $request){


        $userId = Auth::id();
        $user = User::findOrFail($userId);


        // Fill user model
        $user->fill([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'm_name' => $request->m_name,
            'institution' => $request->institution,
            'year' => $request->year,
            // 'email' => $request->email

        ]);

        // Save user to database
        $user->save();

        return redirect()->route('home');
    }

    function bookmark(){
        return view('user_bookmark');
    }
    function setting(){
        return view('user_setting');
    }

    function delete(){
        return view('user_delete');
    }

    function details(){
        return view('user_details');
    }

    function sign_out(Request $request){
        Auth::logout();

        return redirect()->route('sign_in');
    }

    function find_mates(){

        // $users_with_request = RequestModel::all()->where('from_user_id', Auth::id());
        //these are the users that the current user has already send request to
        $already_requested = User::find(auth()->user()->id)->request_from()->where('status', 'Pending')->get();
        $already_accepted = User::find(auth()->user()->id)->request_from()->where('status', 'Accepted')->get();
        $already_rejected = User::find(auth()->user()->id)->request_from()->where('status', 'Rejected')->get();


        // these are the users that have sent request to the current user
        $has_requested = User::find(auth()->user()->id)->request()->where('status', 'Pending')->get();
        $accepted_request = User::find(auth()->user()->id)->request()->where('status', 'Accepted')->get();
        // dd($has_requested);
        // dd($accepted_request);

        // $test = collect([]);

        // foreach ($already_requested as $request){
        //     $test.append($request->user_to());
        // }



        // dd($already_requested);
        // dd($c);
        $users = User::whereNotIn('id', [Auth::id()])->paginate(16);

        return view('find_mates ')
            ->with(compact('already_requested'))
            ->with(compact('already_accepted'))
            ->with(compact('already_rejected'))
            ->with(compact('has_requested'))
            ->with(compact('accepted_request'))
            ->with(compact('users'));
    }

    function requests(){
        $requests = RequestModel::where('status', 'Pending')->where('user_id', auth()->user()->id)->paginate(6);

        return view('user_requests', compact('requests'));
    }
}
