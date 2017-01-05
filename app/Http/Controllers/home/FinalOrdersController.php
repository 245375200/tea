<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FinalOrdersController extends Controller
{
    //
    public function index(Request $request)
    {
        // dd($request);
        $data['user_id'] = session('homeuser')->id;

        $addressid = $request->input('address');
        $id = $request->input('id');
        $address = DB::table('addresses')->where('id',$addressid)->first();
        $data['province']   = $address->province;
        $data['city']       = $address->city;
        $data['district']   = $address->district;
        $data['address']    = $address->address;
        $data['phone']      = $address->tel;
        $data['consignee']  = $address->consignee;
        foreach($id as $v){

            $cartid = $v;
            $list = DB::table('carts')->where('id',$cartid)->first();
            $data['goods_name'] = $list->goods_name;
            $data['order_num']  = $list ->goods_num;
            $data['total_price']=$list->goods_num*$list->goods_price;
            $row[] = DB::table('orders')->insertGetId($data);
            
        }

        return view('home.payfor',['id'=>$id,'row'=>$row]);
    }

    public function sucessPay(Request $request)
    {

        // dd($request);
        $row = $request->input('row');
        $cartid = $request->input('cartid');
        foreach($row as $a=>$v){
            $id = $v;
            $data['pay_status'] = 1;
            DB::table('orders')->where('id',$id)->update($data);
            foreach($cartid as $b=>$c){

                if($a==$b){
                    DB::table('carts')->where('id',$c)->delete();
                }
            }
        }
        return view('home.success');

    }

}
