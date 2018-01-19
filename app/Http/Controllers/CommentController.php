<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;
class CommentController extends Controller
{
    public function add()
    {
    	Comment::create([
    		'pic_id' => request('pic_id'),
    		'comments' => request('comments'),
    		'user_id' => Auth::user()->id,
    	]);

    }
}