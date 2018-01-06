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

    public function updateread()
    {
        //changing the default value of 1 to 0
        views::where('read',1)->where('user',Auth::user()->name)->update(array('read' => 0));


        return redirect('/profile_index') ;
    }

}
