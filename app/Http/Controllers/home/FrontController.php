<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class FrontController extends Controller
{
    //
        public function index()
   { 
        //热销产品
        $list1= DB::table('goodlist')->where('level',1)->get();
        $list2 = DB::table('goodlist')->where('level',2)->get();
        $list3 = DB::table('goodlist')->where('level',3)->get();
        //轮播图
        $list4 = DB::table('figure')->get();
        //链接
        $link = DB::table('link')->get();
        $cate = self::category(0);
         // dd($cate);
        return view('welcome',[
            'cate'=>$cate,
            'list1'=>$list1,
            'list2'=>$list2,
            'list3'=>$list3,
            'list4'=>$list4,
            'link'=>$link
            ]);
   }

   public static function category($pid)
   {
        $cate = DB::table('goodlist')->where('Gpid',$pid)->get();
        $num = 4;
        foreach ($cate as $k=>$v){
            $v->subcates = self::category($v->Gid);
        }
        return $cate;
   }


      

}
