
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('css/css.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/common.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/font-awesome.min.cs')}}s" rel="stylesheet" type="text/css" />
<script src="{{asset('js/jquery.min.1.8.2.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.SuperSlide.2.1.1.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/slide.js')}}"></script>
<script src="{{asset('js/common_js.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.foucs.js')}}" type="text/javascript"></script>
<script src="{{asset('js/footer.js')}}" type="text/javascript"></script>
<link href="{{asset('css/show.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('js/jqzoom.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.spinner.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
<script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
<title>用户中心</title>
</head>

<body>
<!--顶部样式-->
<div id="top">
  <div class="top">
    <div class="Collection"><em></em><a href="#">收藏我们</a></div>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">欢迎光临本店！
     
      @if(!empty(session('homeuser')))  
       <a class="red" href="{{asset('/home/user_center')}}/{{session('homeuser')->id}}">{{ session('homeuser')->username}}</a>
       <a href="/home/logout" class="red">[退出]</a> 
       @else
     <a href="/home/login" class="red">[请登录]</a> 
     新用户<a href="/home/registered" class="red">[免费注册]</a>
     </li>
     @endif
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的订单</a></li> 
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="{{asset('home/mycarts')}}">购物车</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">联系我们</a></li>
	   <li class="hd_menu_tit list_name" data-addclass="hd_menu_hover"><a href="#" class="hd_menu">客户服务</a>
	    <div class="hd_menu_list">
		   <ul>
		    <li><a href="#">常见问题</a></li>
			<li><a href="#">在线退换货</a></li>
		    <li><a href="#">在线投诉</a></li>
			<li><a href="#">配送范围</a></li>
		   </ul>
		</div>	   
	   </li>
	  </ul>
	</div>
  </div>
</div>
<!--logo和搜索样式-->
<div id="header"  class="header">
  <div class="logo">
  <a href="#"><img src="{{asset('images/logo.png')}}" /></a>
  <div class="phone">
   免费咨询热线:<span class="telephone">400-3454-343</span>
  </div>
  </div>
  <div class="Search">
    <form action='{{ url("home/type") }}' method='get'>
    <p><input name="name" type="text"  class="text"/>
    <input name="" type="submit" value=""  class="Search_btn"/></p>
    </form>
	<p class="Words"><a href="#">苹果</a><a href="#">香蕉</a><a href="#">菠萝</a><a href="#">西红柿</a><a href="#">橙子</a><a href="#">苹果</a></p>
</div>
</div>
<!--导航栏样式-->
<div id="Menu" class="clearfix">
<div class="Menu_style">
  <div id="allSortOuterbox" class="display">
    <div class="Category"><a href="/" class="Menu_img"><em></em></a></div>
    <div class="hd_allsort_out_box_new">
	 <!--左侧栏目开始-->
	 <div class="Menu_list">	
	    <div class="menu_title">茶叶品种</div>
        <a href="#">贡茗茶</a><a href="#">冠茗茶</a><a href="#">佳茗茶</a><a href="#">珍茗茶</a><a href="#">绿茶</a><a href="#">毛尖茶</a>
	</div>	
    <div class="Menu_list">	
	    <div class="menu_title">茶叶价格</div>
        <a href="#">100以下</a><a href="#">100-200</a><a href="#">200-400</a><a href="#">400-600</a><a href="#">600-900</a><a href="#">1000以上</a>
	</div>	
     <div class="Menu_list">	
	    <div class="menu_title">推荐茶叶</div>
        <ul class="recommend">
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
        </ul>
	</div>	
	</div>		
	</div>
    <div class="Navigation" id="Navigation">
		 <ul class="Navigation_name">
			<li><a class="nav_on" id="mynav1"  href="{{url('home/search')}}"><span>首页</span></a></li>
			<li><a class="nav_on" id="mynav2"  href="{{url('home/search')}}/{{'巴山'}}"><span>巴山雀舌</span></a></li>
			<li><a class="nav_on" id="mynav3"  href="{{url('home/search')}}/{{'贡茗'}}"><span>贡茗</span></a></li>
			<li><a class="nav_on" id="mynav4"  href="{{url('home/search')}}/{{'冠茗'}}"><span>冠茗</span></a></li>
			<li><a class="nav_on" id="mynav5"  href="{{url('home/search')}}/{{'臧芝堂'}}"><span>臧芝堂</span></a></li>
			<li><a class="nav_on" id="mynav6"  href="{{url('home/search')}}/{{'大巴山茶'}}"><span>大巴山茶</span></a></li>
			<li><a class="nav_on" id="mynav7"  href="{{url('home/search')}}/{{'达州'}}"><span>达州（茶）</span></a></li>
		 </ul>			 
		</div>
	<script>$("#Navigation").slide({titCell:".Navigation_name li"});</script>
    <!--购物车-->	
    
     <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><em></em><a href="{{asset('home/mycarts')}}">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount"></i></div>
  <!--  <div class="dorpdown-layer">
    <div class="spacer"></div> -->
	 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
	 <!-- <ul class="p_s_list">	   
		<li>
		    <div class="img"><img src="images/tianma.png"></div>
		    <div class="content"><p><a href="#">产品名称</a></p></div>
			<div class="Operations">
			<p class="Price">￥55.00</p>
			<p><a href="#">删除</a></p></div>
		  </li>
		</ul>		
	 <div class="Shopping_style">
	 <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
	  <a href="#" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
	 </div>	 
   </div>	 -->
  </div>
</div>
</div>