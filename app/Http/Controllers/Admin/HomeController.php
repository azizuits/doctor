<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Division;
class HomeController
{
    public function index()
    {
        return view('home');
    }
    public  function test(){
    	return view('test');
    }

}
