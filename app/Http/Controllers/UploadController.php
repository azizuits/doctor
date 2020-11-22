<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Upload;
class UploadController extends Controller
{
    public function UploadFile(){
    	return view('uploadfile');
    }
    public function UploadFileProcess(Request $req){
    	$member=new Upload();
    	$req->validate(['fileToUpload'=>'required|file|max:2048',]);
    	echo $image= $req->fileToUpload->store('images').'<br>';
	    echo $path = $req->fileToUpload->getClientOriginalName();
    	$member->name ="aziz";
    	$member->position="member";
    	$member->mobilenumber="4343";
	    $member->image = $path;
    	$member->save();
//    	print_r($req->file());

    
    }
}
