<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Instructor;


class AuthController extends Controller
{

    function __construct(){
        $this->middleware('guest');
    }
    //
    function sign_up(){
        return view('signup');
    }
    function sign_in(){
        return view('signin');
    }

    function sign_up_user(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::attempt($request->only('email', 'password'));

        // $details = [$request->email], $request->;

        return redirect()->route('user_details');
    }


    function sign_in_user(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            // 'confirm_password' => 'required'
        ]);


        // dd($request);
        // User::create([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('home');
    }


    function get_details(){
        return view('user_details');
    }

    function forgot_password(){
        return view('forgot_password');
    }






}
