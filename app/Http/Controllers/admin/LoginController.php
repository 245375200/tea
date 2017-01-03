<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\models\User;

class LoginController extends Controller
{
    //
    public function index()
    {
    	return view('admin.login');
    }

    public function dologin(Request $request)
    {
        //实例化一个模型
    	$user = new User();
        //调用模型中的验证用户方法
    	$ob = $user->checkUser($request);
    	//根据验证结果处理
    	if($ob){
    		//如果都能通过，则把用户信息存储到session中
			session(['adminuser'=>$ob]);
			//重定向到后台页面
			return redirect('admin');
    	}else{
			return back()->with('msg','登录失败：账号或者密码错误');
		}
    }

    public function logout()
    {
        session()->forget('adminuser');
        return redirect('admin/login');
    }
}
