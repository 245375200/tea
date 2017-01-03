<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
class ConfController extends Controller
{
    //
    public function index(Request $request)
    {

    	//查询数据库 找打配置信息
//    	$list=DB::table('config')->get();
//
//    	return view('admin.conf.conf',['list'=>$list]);

        $where = [];
        // 实例化要操作的表
        $db = DB::table('config');
        // 判断有没有搜索name字段的值
        //dd($request);
        if($request->has('name')){
            // 获取要搜索的name字段的值
            $title = $request->input('name');
            //dd($request);
            //dd($linkname);
            // 添加where模糊匹配条件
            $db->where('title','like',"%{$title}%");
            $where['title'] = $title;
        }
        $list = $db->paginate(10);
//        return view('admin.link.link',['list'=>$list,'where'=>$where]);
        return view('admin.conf.conf',['list'=>$list,'where'=>$where]);
    }

    public function edit($id)
    {
        $conf = DB::table('config')->where('id',$id)->first();


        //dd($conf);
        return view('admin.conf.edit',['conf'=>$conf]);
    }

    public function update($id,Request $request)
    {
       // dd($request);
        $data = $request->only('title','description','keyword','status');
       // dd($data);
        $row = DB::table('config')->where('id',$id)->update($data);
        //dd($row);
        if($row>0){
            $list=DB::table('config')->get();
            return view('admin.conf.conf',['list'=>$list]);
        }
    }

}
