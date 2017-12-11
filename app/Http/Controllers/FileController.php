<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class FileController extends Controller
{
	public function upload_pic_moto(Request $request)
	{	
		$user = Auth::user();
		if($request->file('fileToUpload'))
		{
			$this->validate($request, [

				'fileToUpload' => 'image|mimes:jpeg,png,jpg,gif,svg|max:500',

			]);
			$image = $request->file('fileToUpload');
			$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads');
			if($image->move($destinationPath, $input['imagename']))
			{

				$user->pro_pic = 'uploads/'.$input['imagename'];
				if(request('motto'))
				{
					$user->view_self = request('motto');
				}
				$user->save();
				return back()->with('message','Your image was uploaded.');
			}
			else
			{
				return back()->with('message','Sorry, there was an error uploading your file.');	
			}
		}
		else
		{
			if(request('motto'))
			{
				$user->view_self = request('motto');
				$user->save();
			}
			return back();
		}
	}
}
