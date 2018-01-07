<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\views;
use Auth;
use App\User;

class profile extends Controller
{
    //
     public function index()
    {
    	$myviews = views::where('depmate',Auth::user()->rollno)->get();
    	
        return view('profile_index',compact('myviews'));
    }


     public function testimonials($roll)
    {
    	$mydata = User::where('rollno',$roll)->get();

    	$myviews = views::where('depmate',$roll)->get();


    	
        return view('testimonial',compact('myviews','mydata'));
    }

}
