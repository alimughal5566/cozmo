<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class headerController extends Controller
{
    public function index(){
        $data = DB::table('blogs')->get();
         return view('layouts.header' ,compact('data'));

    }
}
