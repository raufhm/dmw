<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index() {
    	$data= DB::table('mock_data')->get();
    	return view('user',['data'=>$data]);
    }
}
