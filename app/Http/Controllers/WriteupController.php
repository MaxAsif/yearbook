<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\writeup;

use Auth;

use DB;

class WriteupController extends Controller
{

    public function index()
    {
    	//$writeups = writeup::all();

        $writeups = writeup::where('rollno',Auth::user()->rollno)->get();
        

        return view('writeup', compact('writeups'));
    }



        public function store()
    {


    	writeup::create([

    		'writeup' => request('writeup'),

    		'topic' => request('topic'),

    		'rollno' => Auth::user()->rollno
    		]);

    

    	/*$writeup = new \App\writeup;

    	$writeup->rollno = $user->rollno ;

    	$writeup->writeup = request('writeup');

    	$writeup->topic = request('topic');

    	$writeup->save(); */

    	return redirect('/writeup');

    }

    public function delete($id)
    {
        \DB::table('writeups')->where('id',$id)->delete();
        return redirect('/writeup');
    }



    public function updates(Request $request)
    {
        $data = array();
            $data['writeup'] = $request->writeup;
            
          DB::table('writeups')->where('id',$request->id)->update($data);
    }

}
