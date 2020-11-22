<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFile extends Controller
{
	public function index(){
		return view('UploadFile');
	}
    public function upload(Request $req){
//	    return  $file= $req->file('photo')->store('images');
	
	    $request->validate([
		    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	    ]);
	
	    $imageName = time().'.'.$request->image->extension();
	
	    $request->image->move(public_path('images'), $imageName);
	
	    /* Store $imageName name in DATABASE from HERE */
	
	    return back()
		    ->with('success','You have successfully upload image.')
		    ->with('image',$imageName);
    }
}
