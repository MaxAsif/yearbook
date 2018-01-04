<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\views;
use Auth;

class profile extends Controller
{
    //
     public function index()
    {
    	$myviews = views::where('depmate',Auth::user()->rollno)->get();
    	
        return view('profile_index',compact('myviews'));
    }
}
