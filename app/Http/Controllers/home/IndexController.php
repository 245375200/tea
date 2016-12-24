<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {

    	return view ('home.index');
    }

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

	public function product()
    {
    	return view('home.Product_List');
    }
	
	public function  gunming()
	{
		
		return view('home.Gun_Ming');
	}
	
	public function guanming()
	{
		
		return view ('home.Guan_Ming');
	}
	public function zangtang()
	{
		
		return view ('home.Zang_Tang');
	}
	public function daba()
	{
		
		return view ('home.Da_Ba');
	}
	public function dazhou()
	{
		
		return view ('home.Da_Zhou');
	}
}
