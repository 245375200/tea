<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class SearchController extends Controller
{
    //
    // 页面上的搜索
     public function index(Request $request)
    {
        //保存搜索条件
        $where = [];
        //实例化要操作的表
        $db = DB::table('goodlist');
        //判断有没有搜索name字段的值
        // dd();
        if($request->has('name')){
            // 获取要搜索的name字段的值
            $name = $request->input('name');
            //添加where模糊匹配条件
            $db->where([
                ['Gname','like',"%{$name}%"],
                ['Gpid','>',0]
                ]);
            $where['name'] = $name;
        }
        // 分页
        $list = $db->paginate(10);
        // $list = $db->get();
        //加载模板
        return view('home.serach',['list'=>$list,'where'=>$where]);
    }

    public function goodDetail($id)
    {

        $list = DB::table('goodlist')->where('Gid',$id)->first();
        return view('home.Product_Detailed',['list'=>$list]);
    }

    public function goodSearch($name=null)
    {


        //实例化要操作的表
        $db = DB::table('goodlist');
        
            //添加where模糊匹配条件
        $db->where([
            ['Gname','like',"%{$name}%"],
            ['Gpid','>',0]
            ]);
        $where['name'] = $name;
        // 分页
        $list = $db->paginate(10);
        return view('home.serach',['list'=>$list,'where'=>$where]);
    }


}
