<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UsersController extends Controller
{
    //
    public function index($id)
    {
        //原始写法
        // $list = DB::select('select * from user');
        $list = DB::table('users')->where('id',$id)->first();
        // var_dump($list);
        return view('home.user_Center',['list'=>$list]);
    }

    public function create()
    {
        return view('stu.add');
    }

    public function store(Request $request)
    {
        
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

   
    public function update(Request $request)
    { 
       // dd($request);
        $id=$request->input('id');
        $data = $request->only('password','rpassword');
        // dd('aaaa');
        if($request->input('password')==$request->input('rpassword')){
            $data=$request->only('password');
            $row = DB::table('users')->where('id',$id)->update($data);
            if($row>0){
                echo "<script>alert('修改成功，赶快去登录吧！');</script>";
                return "<script>window.location.href='/home/login'</script>";
            }else{
                echo "<script>alert('修改失败！');</script>";
                 return back();
            }
         }else{
                 echo "<script>alert('两次密码不一致！');</script>";
                return back();

         }
    } 

    public function info($id)
    {
        $list = DB::table('users')->where('id',$id)->first();
    
        return view('home.user_info',['list'=>$list]);

    }

    public function  infoupdate(Request $request)
    {
        $id=$request->input('id');
        // var_dump(session('homeuser'));
        $data = $request->only('username','sex','email','phone');
        $row = DB::table('users')->where('id',$id)->update($data);
        $list = DB::table('users')->where('id',$id)->first();
        if($row>0){

            session(['homeuser'=>$list]);
            // var_dump(session('homeuser'));die;
            echo "<script>alert('修改成功！');</script>";
            return view('home.user_info',['list'=>$list]);
            
        }else{
           
            return view('home.user_info',['list'=>$list]);
        }
    }

    public function userpic($id)
    {
        $list=DB::table('users')->where('id',$id)->first();
        // session()->forget('homeuser');
        //  session(['homeuser'=>$list]);
        return view('home.user_pic',['list'=>$list]); 
    }

    public function mypic(Request $request)
    {
            if ($request->hasFile('pic')) {
            if ($request->file('pic')->isValid()) {
                $file = $request->file('pic');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    return back()->with('msg','上传图片失败');
                }else{
                    $id=$request->input('id');
                    $pic['pic']=$picname;
                    //dd($data);
                    DB::table('users')->where('id',$id)->update($pic);
                    
                    $list=DB::table('users')->where('id',$id)->first();
                    session(['homeuser'=>$list]);
                    // /dd(session());
                    return( new UsersController())->userpic($id);

                }
            }
        }

    }
    public function address()
    {   
        $id = session('homeuser')->id;
        $list=DB::table('addresses')->where('user_id',$id)->get();
        return view('home.user_address',['list'=>$list]);

    }

    public function add(Request $request)
    {

       $data= $request->only('user_id','consignee','tel','province','city','district','address','postcode');
        DB::table('addresses')->insertGetId($data);
        $id = session('homeuser')->id;
        $list=DB::table('addresses')->where('user_id',$id)->get();
        return view('home.user_address',['list'=>$list]);
    }

    public function del($id)
    {
        DB::table('addresses')->where('id',$id)->delete();
        return redirect('/home/user_address');

    }

    public function myComments()
    {   
        $id = session('homeuser')->id;
        $list=DB::table('comments')->where('user_id',$id)->get();
        return view('home.mycomments',['list'=>$list]);

    }

    public function delComments($id)
    {   
        DB::table('comments')->where('id',$id)->delete();
        $id = session('homeuser')->id;
        $list=DB::table('comments')->where('user_id',$id)->get();
        return view('home.mycomments',['list'=>$list]);

    }
} 
