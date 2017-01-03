<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class LinkController extends Controller
{
    //
	public function index(Request $request)
    {	

    	$where = [];
    	// 实例化要操作的表
    	$db = DB::table('link');
      
    	// 判断有没有搜索name字段的值
    	if($request->has('name')){
    		// 获取要搜索的name字段的值
    		$name = $request->input('name');
    		//dd($request);
    		//dd($linkname);
    		// 添加where模糊匹配条件
    		$db->where('name','like',"%{$name}%");
    		$where['name'] = $name;
    	}
    	$list = $db->paginate(3);
    	return view('admin.link.link',['list'=>$list,'where'=>$where]);
    }

    public function create()
    {

    	return view('admin.link.add');
    }
    public function store(Request $request)
    {
    	$data=$request->except('_token');
    	$m=DB::table('link')->insertGetId($data);

    	if($m>0){
    		return redirect('/Links');
    	}
    }

    public function destroy($id)
    {
    	$row=DB::table('link')->where('id',$id)->delete();
    	if($row>0){

    		return 	redirect('/Links');
    	}
    }

    public function edit($id)
    {
    	$link=DB::table('link')->where('id',$id)->first();
    	return view('admin.link.edit',['link'=>$link]);
    }

    public function update($id,Request $request)
    {	
    	$data=$request->only('name','url');
    
    	$row=DB::table('link')->where('id',$id)->update($data);
    	
    	if($row>0){
    		return 	redirect('/Links');
    	}
    }
}
