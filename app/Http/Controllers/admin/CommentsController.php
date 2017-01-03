<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CommentsController extends Controller
{
    //
    public function index(Request $request)
    {
        $lis = DB::table('comments')
                ->join('goodlist','comments.id','=','goodlist.Gid')
                ->join('users','comments.id','=','users.id')
                ->select('comments.*','goodlist.Gname','users.username')
                ->get();
        // 保存搜索的条件
        $where = [];
        // 实例化要操作的表
        $db = DB::table('comments');
        // 判断有没有搜索good_name字段的值
        if($request->has('good_name')){
            // 获取要搜索的good_name字段的值
            $good_name = $request->input('good_name');
            // 添加where模糊匹配条件
            $db->where('good_name','like',"%{$good_name}%");
            $where['good_name'] = $good_name;
        }
        // 分页
        $list = $db->paginate(10);
    	// $list = DB::table('comments')->get();
    	return view('admin.comments.index',['list'=>$list,'where'=>$where]);
    }

    public function destroy($id)
    {
        $row = DB::table('comments')->where('id',$id)->delete();
        if($row>0){
            return redirect('/comments');
        }
    }

    public function edit($status,$id)
    {
        $stu['status']=$status;
        $row = DB::table('comments')->where('id',$id)->update($stu);
        if($row>0){
            return redirect('/comments');
        }
        
   }

}   
