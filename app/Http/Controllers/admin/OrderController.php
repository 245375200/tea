<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
    	// 保存搜索的条件
        $where = [];
        // 实例化要操作的表
        $db = DB::table('order');
        // 判断有没有搜索user字段的值
        if($request->has('user')){
            // 获取要搜索的user字段的值
            $user = $request->input('user');
            // 添加where模糊匹配条件
            $db->where('user','like',"%{$user}%");
            $where['user'] = $user;
        }
        // 分页
        $list = $db->paginate(10);
    	// $list = DB::table('order')->get();
    	return view('admin.order.index',['list'=>$list,'where'=>$where]);
    }

    public function destroy($id)
    {
    	$row = DB::table('order')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('admin/order');
    	}
    }
}
