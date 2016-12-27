<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
    	// 保存搜索的条件
    	$where = [];
    	// 实例化要操作的表
    	$db = DB::table('users');
    	// 判断有没有搜索username字段的值
    	if($request->has('username')){
    		// 获取要搜索的username字段的值
    		$username = $request->input('username');
    		// 添加where模糊匹配条件
    		$db->where('username','like',"%{$username}%");
    		$where['username'] = $username;
    	}
    	// 分页
    	$list = $db->paginate(5);
    	return view('admin.user.index',['list'=>$list,'where'=>$where]);
    }

    public function create()
    {
    	return view('admin.user.add');
    }

    public function store(Request $request)
    {
    	$data = $request->except('_token');
    	$id = DB::table('users')->insertGetId($data);
    	if($id>0){
    		return redirect('admin/demo');
    	}
    }

    public function destroy($id)
    {
    	$row = DB::table('users')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('admin/demo');
    	}
    }

    public function edit($id)
    {
    	$users = DB::table('users')->where('id',$id)->first();
    	return view("admin.user.edit",['users'=>$users]);
    }

    public function update($id,Request $request)
    {
    	$data = $request->only('username','phone','email','level');
    	$row = DB::table('users')->where('id',$id)->update($data);
    	if($row>0){
    		return redirect('admin/demo');
    	}
    }

    public function status($id,$status)
    {
        $ud['status'] = $status == 1?'0':'1';
        $row = DB::table('users')->where('id',$id)->update($ud);
        if($row>0){
            return redirect('admin/demo');
        }
    }
}
