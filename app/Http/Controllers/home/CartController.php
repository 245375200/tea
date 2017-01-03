<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CartController extends Controller
{
    //
    public function addCart(Request $request)
    {
        
        $id = $request->input('Gid');
        $goods_num = $request->input('num');
       $list = DB::table('goodlist')->where('Gid',$id)->first();
       // dd($list);
       $user_id = session('homeuser')->id;
       $goods_name = $list->Gname;
       $data['goods_id']    = $id;
       $data['user_id']     = $user_id;
       $data['goods_name']  = $goods_name;
       $data['goods_num']    = $goods_num;

       $row = DB::table('carts')->insertGetId($data);
       if($row>0){
        echo json_encode($row);

       }
       
    }

    public function getCart()
    {
        $list = DB::table('carts')
            ->join('goodlist', 'goodlist.Gid', '=', 'goods_id')
            ->select('carts.*','goodlist.Gpice')
            ->get();
       return view('home.shopping_cart',['list'=>$list]);
    }


    public function delMyCart(Request $request)
    {

        $id = $request->input('id');
        $row = DB::table('carts')->delete($id);
        if($row>0){
        echo json_encode($row);

       }
    }
}
