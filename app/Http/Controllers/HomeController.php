<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\writeup;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     /*
    -------------------------------------------------------
    function index()
    -------------------------------------------------------
        This function returns home.blade.php files which is
        the dashboard
        
    */
        public function index()
        {
            return view('home');
        }
        /*
    -------------------------------------------------------
    function edit()
    -------------------------------------------------------
        This function returns edit the details of user
        
    */
        public function edit(Request $request)
        {


            $user = Auth::user();
            $user->email = request('email');
            $user->hor = request('HOR');
            $user->course = request('course');
            $user->department = request('department');
            $user->phone = request('phone');
            $user->save();
            return redirect ('/home');
            

        }
    }

