<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Auth;
use Response;
class ImageController extends Controller
{










	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		$images = Image::where('rollno',Auth::user()->rollno)->get()->toArray();	
		return view('upload',compact('images'));
	}






public function comment($pic_id)
{
	$images = Image::where('id',$pic_id)->get();
	//	dd($images);
		return view('comment',compact('images'));
}











	public function upload(Request $request)
	{

		$user = Auth::user();
		
		if($request->hasFile('croppedImage')) {
			$file = $request->file('croppedImage');
			$file_original = $request->file('image');
			print_r($file);
			$this->validate($request, [

				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
				'classifier' => 'required'
			]);
           //you also need to keep file extension as well
			$name = $user->rollno.'_'.time().'.'.$file_original->getClientOriginalExtension();

           //using array instead of object
			$image['filePath'] = $name;
			$file->move(public_path().'/uploads/', $name);

			$classifier = request('classifier');
			$caption = request('caption');
			Image::create([
				
				'url' => 'uploads/'.$name,
				'rollno' => $user->rollno,
				'caption' => $caption,
				'classifier' => $classifier,

			]);
			
		}
		else
		{
			
			return Response::json(['error' => json_encode(request('caption'))], 404); // Status code here
			
		}
		
	}
		/*
		if($request->file('image'))
		{
			echo 'abc';
			$this->validate($request, [

				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',

			]);
			$classifier = $request('classifier');
			$image = $request->file('image');//image
			$input['imagename'] = $user->rollno.'_'.time().'.'.$image->getClientOriginalExtension();//name of file
			$destinationPath = public_path('/uploads');//destination of image in public/uploads
			if($image->move($destinationPath, $input['imagename']))
			{
				 
				echo 'Your pic is uplaoded';
			}
			else
			{
				echo 'Your pic is not uplaoded';
				
			}
		}*/
	


	}

