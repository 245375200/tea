<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class PassController extends Controller
{
    //
     public function index()
     {
        return view('home.findpass');
     }

     public function findPass(Request $request)
    {
        if(empty( $request->input('username') || $request->input('email')) ){

            return back()->with('msg','用户名跟邮箱不能为空');
        }

        $mycode = session()->get('milkcaptcha');
        if($mycode != $request->input('code')){

            return back()->with('msg','验证码错误！');
        }

        $username = $request->input('username');

        $email = $request->input('email');
        // dd($request);
        $list = DB::table('users')->Where(['username'=>$username,'email'=>$email])->first();
        // dd($list);
        if($list){
            if($request->input('Rpassword')==$request->input('password')){
            
                    $data = $request->only('password');
                    $id=$list->id;
                     // dd($id);
                    $row = DB::table('users')->where('id',$id)->update($data);
                    // dd($row);
                    if($row>0){
                        echo "<script>alert('密码修改成功，赶快去登录吧！');</script>";
                        return "<script>window.location.href='/home/login'</script>";
                    }else{
                       return back()->with('msg','修改密码不成功！');
                    }

             }else{

                        return back()->with('msg','两次密码不一致！');
            }
            
        }
        
       
    }

    
        
}
