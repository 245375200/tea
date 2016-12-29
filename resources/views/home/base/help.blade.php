@include('home.base.public')
<!--修改密码样式-->
<div class="user_style clearfix" id="user">
<div class="user_title"><em></em>帮助中心</div>
  <div class="clearfix user" >
  <!--左侧菜单栏样式-->
  <div class="user_left">
      <div class="user_info">
      </div>
      <ul class="Section">
       <li><a href="{{url('home/help/kuaidi')}}">&nbsp;&nbsp;&nbsp;普通快递</span></a></li>
       <li><a href="{{url('home/help/kuaidi')}}">&nbsp;&nbsp;&nbsp;顺丰快递</a></li>
       <li><a href="{{url('home/help/wangshang')}}">&nbsp;&nbsp;&nbsp;网上支付</a></li>
       <li><a href="{{url('home/help/yinhang')}}">&nbsp;&nbsp;&nbsp;银行转账</a></li>
       <li><a href="{{url('home/help/xieyi')}}">&nbsp;&nbsp;&nbsp;用户协议</a></li>
       <li><a href="{{url('home/help/jiaoyi')}}">&nbsp;&nbsp;&nbsp;交易条款</a></li>
       <li><a href="{{url('home/help/yuanze')}}">&nbsp;&nbsp;&nbsp;退换货原则</a></li>
       <li><a href="{{url('home/help/chengnuo')}}">&nbsp;&nbsp;&nbsp;服务承诺</a></li>
      </ul>
    </div>
    <!--右侧样式-->
    <div class="right_style r_user_style user_right">
     @yield('content')

    </div>
  </div>
</div>
<div class="footerbox">
@include('home.base.bottom')