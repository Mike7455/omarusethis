<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Request as RequestModel;
use App\Models\Studymate;

class RequestController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }

    function index(){

    }

    function new_request(Request $request){

        // dd([$request, auth()->user()]);
        RequestModel::create([
            'user_id' => $request->user_id,
            'from_user_id' => auth()->user()->id,
            'status' => 'Pending'
        ]);

        return redirect()->route('find_mates');
    }

    function respond(Request $request){
        if($request->response == 'Accepted'){
            // RequestModel::find($request->request_id)->up
            RequestModel::where('id', $request->request_id)->update([
                'status' => 'Accepted'
            ]);

            Studymate::create([
                'user_id' => auth()->user()->id,
                'mate_user_id' => $request->request_user_id
            ]);
            Studymate::create([
                'user_id' => $request->request_user_id,
                'mate_user_id' => Auth::id()
            ]);

        }elseif($request->response == 'Rejected'){
            RequestModel::where('id', $request->request_id)->update([
                'status' => 'Rejected'
            ]);
        }

        return redirect()->route('user_request');
    }
}
