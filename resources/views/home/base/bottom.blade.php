
<!--底部样式-->
<div class="footer">
 <div class="streak"></div>
 <div class="footerbox clearfix">
  <div class="left_footer">
   <div class="img"><img src="{{ asset('images/img_33.png')}}" /></div>
   <div class="phone">
    <h2>服务咨询电话</h2>
    <p class="Numbers">400-0000-000</p>
   </div>
  </div>
  <div class="right_footer">
   <dl>
    <dt><em class="icon_img"></em>购物指南</dt>
    <dd><a href="{{url('home/help/kuaidi')}}">普通快递</a></dd>
    <dd><a href="{{url('home/help/kuaidi')}}">顺丰快递</a></dd>
    
    
   </dl>
   <dl>
    <dt><em class="icon_img"></em>如何支付</dt>
    <dd><a href="{{url('home/help/wangshang')}}">网上支付</a></dd>
    <dd><a href="{{url('home/help/yinhang')}}">银行转账</a></dd>
   
    
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="{{url('home/help/xieyi')}}">用户协议</a></dd>
    <dd><a href="{{url('home/help/jiaoyi')}}">交易条款</a></dd>
    
    
    
   </dl>
   <dl>
    <dt><em class="icon_img"></em>售后服务</dt>
    <dd><a href="{{url('home/help/yuanze')}}">退换货原则</a></dd>
    <dd><a href="{{url('home/help/chengnuo')}}">服务承诺</a></dd>
    <dd><a href="#">退换货流程</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>关于我们</dt>
    <dd><a href="#">找回密码</a></dd>
    
    
 
   </dl>
  </div>
 </div>
 <div class="slogen">
  <div class="footerbox clearfix ">
  <ul class="wrap">
	 <li>
	  <a href="#"><img src="{{ asset('images/icon_img_02.png')}}" data-bd-imgshare-binded="1"></a>
	  <b>正品保证</b>
	  <span>正品行货 放心选购</span>
	 </li>
	 <li><a href="#"><img src="{{ asset('images/icon_img_03.png')}}" data-bd-imgshare-binded="2"></a>
	  <b>满68元包邮</b>
	  <span>购物满68元，免费快递</span>
	 </li>
	 <li>
	  <a href="#"><img src="{{ asset('images/icon_img_04.png')}}" data-bd-imgshare-binded="3"></a>
	  <b>厂家直供</b>
	  <span>价格更低，质量更可靠</span>
	 </li>
      <li>
	  <a href="#"><img src="{{ asset('images/icon_img_05.png')}}" data-bd-imgshare-binded="4"></a>
	  <b>权威认证</b>
	  <span>政府扶持单位，安全保证</span>
	 </li>
	</ul>
  </div>
 </div>
 <div class="footerbox Copyright">
  <p><a href="#">关于我们</a> | <a href="#">隐私申明</a> | <a href="#">成为供应商</a> | <a href="#">茶叶</a> | <a href="#">博客</a> |<a href="#">友情链接</a> | <a href="#">网站地图</a></p>
  <p>Copyright 2010 - 2015 巴山雀舌 四川巴山雀舌茗茶实业有限公司 zuipin.cn All Rights Reserved </p>
  <p>川ICP备10200063号-1</p>
   <a href="#" class="return_img"></a>
 </div>
</div>
 <!--右侧菜单栏购物车样式-->
<div class="fixedBox">
  <ul class="fixedBoxList">
      <li class="fixeBoxLi user">
      @if(empty(session('homeuser')))
        <a href="#"> <span class="fixeBoxSpan"></span> <strong>用户</strong></a>
      @else
      <a href="{{asset('/home/user_center')}}/{{session('homeuser')->id}}"> <span class="fixeBoxSpan"></span> <strong>用户</strong></a>
      @endif
      </li>
    <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
		
			<span class="fixeBoxSpan"></span> <strong><a href="{{asset('home/mycarts')}}">购物车</a></strong>
			<div class="cartBox">
       		<div class="bjfff"></div> </div></li>
    
	 <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
			<span class="fixeBoxSpan"></span> <strong>微信</strong>
			<div class="cartBox">
       		<div class="bjfff"></div>
			<div class="QR_code">
			 <p><img src="{{ asset('images/erweim.jpg')}}" width="150px" height="150px" style=" margin-top:10px;" /></p>
			 <p>微信扫一扫，关注我们</p>
			</div>		
			</div>
			</li>

    
    <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
  </ul>
</div>
</body>
