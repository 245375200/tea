<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\models\User;
use App\Http\Requests;

//验证码的类
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
    //登录时的验证

    public function dologin(Request $request)
    {
        
        $mycode = session()->get('milkcaptcha');
            if($mycode != $request->input('code')){
                return back()->with('msg','验证码错误！');
            }
             $name = $request->input('username');
        //实例化一个模型
    	$user = new User();
        //调用模型中的验证用户方法
    	$ob = $user->checkUser($request);
    	//根据验证结果处理
    	if($ob){
    		//如果都能通过，则把用户信息存储到session中
          
           $data = DB::table('users')->where('username',$name)->first();
           //sdd($data);
			session(['homeuser'=>$data]);
          session()->pull('homeuser.password','default');
           //dd(session('homeuser')->id);
            
			//重定向到前台页面
			return redirect('/');
    	}else{
			return back()->with('msg','登录失败：账号或者密码错误');
		}
    }

    public function logout()
    {
        // 销毁session
        session()->forget('homeuser');
        return redirect('/');
    }

    public function capch($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 38, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session()->flash('milkcaptcha', $phrase);
        
        return response($builder->output())->header('content-type','image/jpeg');
    }

    
    
}
