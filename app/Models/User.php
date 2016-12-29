<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function checkUser($request)
    {
    	//获取用户登录的用户名
    	$name = $request->input('username');
    	//通过用户名查询数据库有没有这个用户名
    	$ob = $this->where('username',$name)->first();
        $status = $ob['status'];
        $level = $ob['level'];
    	// 如果通过这个用户名能查出数据
    	// if($ob){
    	// 	//则判断用户输入的密码和通过用户名查到的数据中的密码是否匹配
    	// 	if($request->input('password') == $ob->password){
     //            return $ob;		
    	// 	}
    	// }else{
    	// 	return null;
    	// }
        if($ob){
            if($level != '0'){
                 if($request->input('password') == $ob->password){
                    return $ob;
                }
            }else{
                return null;
            }
        }
    }	
}
