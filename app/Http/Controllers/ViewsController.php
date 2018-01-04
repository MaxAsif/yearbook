<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use views;

class ViewsController extends Controller
{
    //


    public function approve(Request $request)
    {
        $data = array();
            $data['writeup'] = $request->query;
            echo 'ass';
            
          DB::table('views')->where('id',$request->id)->update(['approval'='1']);
    }

}
