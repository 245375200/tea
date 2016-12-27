<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ asset('css/css.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/common.css') }}" rel="stylesheet" tyle="text/css" />
<script src="{{ asset('js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.SuperSlide.2.1.1.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/common_js.js') }}" type="text/javascript"></script>
<title>找回密码</title>
</head>

<body>
<!--顶部样式-->
<div class="common_top">
 <div class="Narrow">
  <div class=" left logo"><a href="#"><img src=" {{ asset('images/logo.png') }}" /></a></div>
  <!--电话图层-->
  <div class="phone"><label>全国服务热线：</label><em>400-400-4000</em></div>
 </div>
</div>
<!--用户注册样式-->
<div class="registered_style Narrow clearfix">
   <div class="left_advertising">
    <img src="{{asset('images/update.jpg')}}" style="width:300px;margin-top:20px;"/>
   </div>
   <div class="right_register">
     <div class="register_Switching" id="register_Switching">
       <div class="hd">
        <ul><li>修改密码</li><!-- <li>普通注册</li> --></ul>
       </div>
       <br />
       <h2 style="color:red;">
         @if (session('msg'))
                        {{ session('msg') }}
                   
             @endif 
        <h2>
        <br>
       <!-- <div class="bd">

        <ul>
    <form action="{{ url('home/findpass') }}" method="post" name="myform">
      <input type='hidden' name='_token' value='{{ csrf_token() }}'> 
	   <div class="form clearfix">	
        <div class="item"><label class="rgister-label">密&nbsp;&nbsp;户&nbsp;&nbsp;名：</label><input name="username" type="text"  class="text" /></div>
        <div class="item"><label class="rgister-label" >邮&nbsp;&nbsp;&nbsp;&nbsp;箱：</label><input name="email" type="text"  class="text" /></div> 
        <div class="item-ifo">
                    <input type="checkbox" class="checkbox left" checked="checked" id="readme" onclick="agreeonProtocol();">
                    <label for="protocol" class="left">我已阅读并同意<a href="#" class="blue" id="protocol">《福际商城用户注册协议》</a></label>
                </div>
       </div>
       <div class="rgister-btn">
	  <a href="javascript:doAction();" class="btn_rgister">提&nbsp;&nbsp;&nbsp;&nbsp;交</a>
	  </div>
	  <div class="Note"><span class="login_link">已是会员<a href="login.html">请登录</a></span></div>	  
       </form>
       <script type="text/javascript">

          function doAction()
          {
             
                  var form = document.myform;
                  form.action = 'home/findpass';
                  form.submit();
              
          }

       </script>
        </ul> -->
        <ul>
            <form id="form1" name="form1" method="post" action="{{ url('/home/Fpass') }}"> 
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
	   <div class="form clearfix">	
	    <div class="item"><label class="rgister-label">用&nbsp;&nbsp;户&nbsp;&nbsp;名：</label><input name="username" type="text"  class="text"   /><b>*</b></div>
		
	    <div class="item"><label class="rgister-label" >电子邮箱：</label><input name="email" type="text"  class="text"   /><b>*</b></div>
      <div class="item"><label class="rgister-label" >密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</label><input name="password" type="password"  class="text" p/><b>*</b></div> 
      
    <div class="item"><label class="rgister-label " >确认密码：</label><input name="Rpassword" type="password"  class="text" /><b>*</b></div> 
	 
	    <div class="item "><label  class="rgister-label ">验&nbsp;证&nbsp;码：</label><input name="code" type="text"  class="Recommend_text" />
              <a class="phone_verification" style="color:white;background-Color:white;"><img src="{{ url('/capch/'.time()) }}" onclick="this.src='{{ url('/capch') }}/'+Math.random()"  style="margin-left:-248px;height:36px;width:77px;"></a> 
      </div>
      		<!-- <div class="item-ifo">
                          <input type="checkbox" class="checkbox left" checked="checked" id="readme" onclick="agreeonProtocol();">
                          <label for="protocol" class="left">我已阅读并同意<a href="#" class="blue" id="protocol">《福际商城用户注册协议》</a></label>
          </div> -->
	  </div>	
	  <div class="login-btn">
        <input type="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交" style="background:red;width:310px;height:45px;font-size:20px;">
    </div>
	  </form>
    <script type="text/javascript">
    //                     function doAction(id)
    //                     {
    //                         if(confirm('确定要修改吗？')){
    //                             var form = document.form1;
    //                             form.action = '/home/findpass/'+id;
    //                             form.submit();
    //                         }
    //                     }
       </script>
        </ul>
       </div>
     </div>
  <script>jQuery(".register_Switching").slide({trigger:"click"});</script>
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
