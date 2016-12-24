<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ asset('css/css.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/common.css') }}" rel="stylesheet" tyle="text/css"/>
<script src="{{ asset('js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.SuperSlide.2.1.1.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/common_js.js') }}" type="text/javascript"></script>
<title>用户登录</title>
</head>

<body>
<!--顶部样式-->
<div class="common_top">
 <div class="Narrow">
  <div class=" left logo"><a href=""><img src="{{ asset('images/logo.png')}}" /></a></div>
  <!--电话图层-->
  <div class="phone"><label>全国服务热线：</label><em>400-345-5633</em></div>
 </div>
</div>
<div class="login_bg">
<div class="login Narrow">
   <div class="login_advertising"><img src="{{ asset('images/bg_03.png') }}" /></div>
  <div class="login_frame">
   <div class="login-form">
     <div class="login-name"><h1 class="name">用户登录</h1><span class="login_link"><a href="/home/registered"><b></b>用户注册</a></span></div>
	  <!--提示信息-->
	    <form action="{{ url('home/login') }}" method="post">
	    <input type='hidden' name='_token' value='{{ csrf_token() }}'> 
	    <div class="form clearfix">
	    <br/>
	    	<h2 style="color:red;">
	    	 @if (session('msg'))
                        {{ session('msg') }}
                    @else
                      Hello Welocme Login!
             @endif	
             <h2>
	     <div class="item item-fore1"><label for="loginname" class="login-label name-label"></label><input name="username" type="text"  class="text" placeholder="请输入用户"/>
		 </div>
		 <br>
		 <div class="item item-fore2"><label for="nloginpwd" class="login-label pwd-label" ></label><input name="password" type="password"  class="text" placeholder="用户密码"/>
	     </div> 
	     <div class="Forgetpass"><a href="/home/findpass">忘记密码？</a></div>
	     
	     <div class="item-fore1">
		     <input name="code" type="text"  class="text"  placeholder="请输入验证码"/ style="width:100px;">
		     <a class="phone_verification" style="color:white;background-Color:white;"><img src="{{ url('/capch/'.time()) }}" onclick="this.src='{{ url('/capch') }}/'+Math.random()"  style="float:right;"></a> 
	    </div>
	    <br/>
	    <br/>
	    <div class="login-btn">
	    	<input type="submit" value="登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录" style="background:red;width:310px;height:45px;font-size:20px;">
	  </div>
    </div>
    <div class="Login_Method">
     
    </div>
	</form>
  </div>
</div>
</div>
<!--底部样式-->
 <div class="bottom_footer">
   <p><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">商家入驻</a> | <a href="#">法律申明</a> | <a href="#">友情链接</a>  </p>
	 <p>Copyright©2014四川金祥保险销售有限公司.All Rights Reserved. </p>
	 <p>川ICP备09150084号</p>
   </div>
</body>
</html>
