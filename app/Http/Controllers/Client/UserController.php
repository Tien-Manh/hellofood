<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;

class UserController extends Controller
{
    function ShowUser(){
        $users = Users::all();
        return view('admin.admin-user', ['users' => $users]);
    }
    function ShowMember(){
        $users = Users::all();
        return view('admin.admin-user-member', ['users' => $users]);
    }
    function SaveActiveUser(Request $rq){
        $user = Users::find($rq['getId']);
        $user->update(['active' => $rq['value']]);
        return response()->json();
    }
    function SaveActiveAdmin(Request $rq){
        $user = Users::find($rq['getId']);
        $user->update(['active' => $rq['value']]);
        return response()->json();
    }

    function  removeUser(Request $rq){
        $user = Users::find($rq['getId']);
        $user->delete();
        return response()->json();
    }
}
