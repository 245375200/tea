<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class TexiaoController extends Controller
{
    //

     public function wulongcha()
    {
    	return view('home.texiao.wulongcha');
    }
     public function dahongpao()
    {
    	return view('home.texiao.dahongpao');
    }
    public function puer()
    {
    	return view('home.texiao.puer');
    }
    public function lvcha()
    {
    	return view('home.texiao.lvcha');
    }
    public function tieguanyin()
    {
    	return view('home.texiao.tieguanyin');
    }
    public function hongcha()
    {
    	return view('home.texiao.hongcha');
    }

}
