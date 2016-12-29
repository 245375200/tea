@include('home.base.public')
<!--用户中心-->
<div class="user_style clearfix" id="user">
<div class="user_title"><em></em>用户中心</div>
  <div class="clearfix user" >
    <div class="user_left">
      <div class="user_info">
      <div class="Head_portrait"><a href="{{asset('/home/user_mypic')}}/{{session('homeuser')->id}}"><img src="{{asset('uploads')}}/{{session('homeuser')->pic}}"  width="80px" height="80px"/></a><!--头像区域--></div>
       <div class="user_name">{{ session('homeuser')->username}}</div>
      </div>
      <ul class="Section">
       <!-- <li><a href="#"><em></em><span>我的特色馆</span></a></li> -->
       <li><a href="/home/user_info/{{session('homeuser')->id}}"><em></em><span>个人信息</span></a></li>
       <li><a href="/home/user_Password"><em></em><span>修改密码</span></a></li>
       <li><a href=""><em></em><span>我的订单</span></a></li>
       <li><a href="/home/mycomments"><em></em><span>我的评论</span></a></li>
       <li><a href="/home/user_address"><em></em><span>收货地址管理</span></a></li>
      </ul>
    </div>
   @yield('content')
  <!-- </div>
</div> -->
<div class="footerbox">
   <!--友情链接-->
       @include('home.base.bottom')