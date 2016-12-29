<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    //
    public function index()
    {
    	return view('home.help.kuaidi');
    }
    public function shunfen()
    {
    	return view('home.help.shunfen');
    }
     public function xieyi()
    {
    	return view('home.help.xieyi');
    }
    public function jiaoyi()
    {
    	return view('home.help.jiaoyi');
    }
    public function wangshang()
    {
    	return view('home.help.wangshang');
    }
    public function yinhang()
    {
    	return view('home.help.yinhang');
    }
    public function chengnuo()
    {
    	return view('home.help.chengnuo');
    }
    public function yuanze()
    {
    	return view('home.help.yuanze');
    }
    public function changjian()
    {
    	return view('home.help.changjian');
    }
}
