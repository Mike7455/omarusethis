<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Instructor;


class InstrucUserController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('instructor');
    }


    function get_details(){
        return view('instruc-details');
    }

    function update_instructor(Request $request){

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        Instructor::create([
            'email' => $user->email,
            'password' => Hash::make('123456'),
            'description' => 'djdkfjdjf ',
            'study_field' => $request->study_field,
            'fname' => $request->fname,
            'lname' => $request->fname,
            'institution' => $request->institution
        ]);

        // Fill user model
        $user->fill([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'm_name' => $request->m_name,
            'institution' => $request->institution,
            'study_field' => $request->study_field
            // 'email' => $request->email

        ]);


        // Save user to database
        $user->save();

        return redirect()->route('home');
    }


}
