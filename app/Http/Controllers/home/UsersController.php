<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UsersController extends Controller
{
    //
    public function index(Request $request)
    {
    	
    }
    public function create()
    {
    	return view('user.add');
    }

    public function store(Request $request)
    {
    
    	$data = $request->except('_token');
    	$id = DB::table('user')->insertGetId($data);
    	if($id>0){
    		return redirect('demo4');
    	}
    }

    public function destroy($id)
    {
    	$row = DB::table('user')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('demo4');
    	}
    }

    public function edit($id)
    {
    	$user = DB::table('user')->where('id',$id)->first();
    	return view('user.edit',['user'=>$user]);
    }

    public function update($id,Request $request)
    {
    	$data = $request->only('name','sex','age');
    	$row = DB::table('user')->where('id',$id)->update($data);
    	if($row>0){
    		return redirect('demo4');
    	}
    }
}

