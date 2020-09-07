<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentsController extends Controller
{
    public function getAgents()
    {


        // if(Auth::user()->user_role != 1) {
        //     return redirect("/");
        // }
//        $users = User::where("user_role", 0)->where('soft_delete', 0)->get();
//        return view('admin.users.home', compact("users"));
    }
}
