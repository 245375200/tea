<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UsersController extends Controller
{
    //
    public function index()
    {
        //原始写法
        // $list = DB::select('select * from user');
        $list = DB::table('users')->get();
        // var_dump($list);
        return view('stu.index',['list'=>$list]);
    }

    public function create()
    {
        return view('stu.add');
    }

    public function store(Request $request)
    {
        // dd($request);
        //获取指定下标的值
        // $name = $request->input('name');

        // 只取输入数据中指定的字段
        // $data = $request->only('name','sex','age');

        // 只取输入数据中除了指定字段外的所有字段
        if($request->input('password')!=$request->input('rpassword')){

            return back()->with('msg','两次密码不一致！');
        }

        $data = $request->except('_token','code','rpassword');
        // dd($data);

        $m = DB::table('users')->insertGetId($data);

        if($m>0){
            echo "<script>alert('注册成功，赶快去登录吧！');</script>";
            return "<script>window.location.href='/home/login'</script>";
        }else{
            echo "<script>alert('注册失败，请重新注册');</script>";
            return "<script>window.location.href='/home/registered'</script>";
        }
    }

    public function destroy($id)
    {
        $row = DB::table('users')->where('id',$id)->delete();
        if($row>0){
            return '删除成功';
        }else{
            return '删除失败';
        }
    }

    public function edit($id)
    {

        $list = DB::table('users')->where('id',$id)->first();

        // dd($stu);
        return view('home.edit',['list'=>$list]);
    }
    // <=======================前台登录时找回密码==============================>
     public function getPass()
     {
        return view('home.findpass');
     }

     public function findPass(Request $request)
    {

        $username = $request->input('username');
        $email = $request->input('email');
        $list = DB::table('users')->Where(['username'=>$username,'email'=>$email])->first();

        // dd($stu);
        return view('home.LoginPassedit',['list'=>$list]);
    }

    public function updatepass($id,Request $request)
    {   


        $mycode = session()->get('milkcaptcha');
        if($mycode != $request->input('code')){
            return back()->with('msg','验证码错误！');
        }

        if($request->input('password')==$request->input('password')){
                $data = $request->only('password');
                $row = DB::table('users')->where('id',$id)->update($data);
                if($row>0){
                    echo "<script>alert('注册成功，赶快去登录吧！');</script>";
                    return "<script>window.location.href='/home/login'</script>";
                }else{
                   return back()->with('msg','修改密码不一致！');
                }
        }else{

                return back()->with('msg','两次密码不一致！');
        }
    }

    // <=====================================================================>
    public function update($id,Request $request)
    {
        $data = $request->only('name','sex','age');
        $row = DB::table('users')->where('id',$id)->update($data);
        if($row>0){
            return '修改成功';
        }else{
            return '修改失败';
        }
    }
}
