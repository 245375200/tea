<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
	public function login()
    {
    	return view('home.login');
    }
	
	public function  registered()
	{
		
		return view('home.registered');
	}
	
	public function shopping_cart()
	{
		
		return view ('home.shopping_cart');
	}
}
