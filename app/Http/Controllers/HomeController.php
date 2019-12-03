<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\image;

class HomeController extends Controller
{
    function index(Request $request){
	   if($request->session()->has('username')){
		  return view('home.index');
	   }
	   else{
		   return redirect()->route('login.index');
	   }
	}

	function add(Request $request){
		return view('home.addimage');
	}

	function store(Request $request){
		if($request->hasFile('pic')){
			if($request->crop == "two"){
				if($request->rotate == "left"){
					foreach ($request->pic as $file) {
					
						$filename = $file->getClientOriginalName();
						$file->move('upload', $filename);
						$thumbnailpath = public_path('upload/'.$filename);
				        $img = \Image::make($thumbnailpath)->rotate(90)->crop(200, 200)->save($thumbnailpath);
						$img = new image();
						
				        $img->img = $filename;
				        $img->title = $request->title;
				        $img->description = $request->description;
				        //$img->category = $request->category;
				        //$img->subcategory = $request->subcategory;
			       		//$img->save();
				        $img->save();
					}
				}elseif($request->rotate == "right") {
					foreach ($request->pic as $file) {
					
						$filename = $file->getClientOriginalName();
						$file->move('upload', $filename);
						$thumbnailpath = public_path('upload/'.$filename);
				        $img = \Image::make($thumbnailpath)->rotate(-90)->crop(200, 200)->save($thumbnailpath);
						$img = new image();
						
				        $img->img = $filename;
				        $img->title = $request->title;
				        $img->description = $request->description;
				        //$img->category = $request->category;
				        //$img->subcategory = $request->subcategory;
			       		//$img->save();
				        $img->save();
					}
				}else{
					foreach ($request->pic as $file) {
					
						$filename = $file->getClientOriginalName();
						$file->move('upload', $filename);
						$thumbnailpath = public_path('upload/'.$filename);
				        $img = \Image::make($thumbnailpath)->crop(200, 200)->save($thumbnailpath);
						$img = new image();
						
				        $img->img = $filename;
				        $img->title = $request->title;
				        $img->description = $request->description;
				        //$img->category = $request->category;
				        //$img->subcategory = $request->subcategory;
			       		//$img->save();
				        $img->save();
						}
					} 	
					}else{
						if($request->rotate == "left"){
						foreach ($request->pic as $file) {
						
							$filename = $file->getClientOriginalName();
							$file->move('upload', $filename);
							$thumbnailpath = public_path('upload/'.$filename);
					        $img = \Image::make($thumbnailpath)->rotate(90)->save($thumbnailpath);
							$img = new image();
							
					        $img->img = $filename;
					        $img->title = $request->title;
					        $img->description = $request->description;
					        //$img->category = $request->category;
					        //$img->subcategory = $request->subcategory;
				       		//$img->save();
					        $img->save();
						}
					}elseif($request->rotate == "right") {
						foreach ($request->pic as $file) {
						
							$filename = $file->getClientOriginalName();
							$file->move('upload', $filename);
							$thumbnailpath = public_path('upload/'.$filename);
					        $img = \Image::make($thumbnailpath)->rotate(-90)->save($thumbnailpath);
							$img = new image();
							
					        $img->img = $filename;
					        $img->title = $request->title;
					        $img->description = $request->description;
					        //$img->category = $request->category;
					        //$img->subcategory = $request->subcategory;
				       		//$img->save();
					        $img->save();
						}
				}else{
					foreach ($request->pic as $file) {
					
						$filename = $file->getClientOriginalName();
						$file->move('upload', $filename);
						$img = new image();
						
				        $img->img = $filename;
				        $img->title = $request->title;
				        $img->description = $request->description;
				        //$img->category = $request->category;
				        //$img->subcategory = $request->subcategory;
			       		//$img->save();
				        $img->save();
						}
				} 
				
				}return redirect()->route('home.allimage');
         
		}else{
			return redirect()->route('home.addimage');
		}

	}
	function allimage(){
		$img = image::all();
		
		return view('home.allimage')->with('allimg', $img);
	}
}
