<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ asset('css/css.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/common.css')}}" rel="stylesheet" tyle="text/css" />
<link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/jquery.min.1.8.2.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.SuperSlide.2.1.1.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/common_js.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/footer.js')}}" type="text/javascript"></script>
<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
<![endif]-->
<!--"{{ asset('js/jquery.min.js') }}"-->
<title>产品列表</title>
</head>

<body>
<!--顶部样式-->
@include('fixbox.top')
<!--logo和搜索样式-->
<div id="header"  class="header">
  <div class="logo">
  <a href="#"><img src="{{ asset('images/logo.png')}} " /></a>
  <div class="phone">
   免费咨询热线:<span class="telephone">400-3454-343</span>
  </div>
  </div>
  <div class="Search">
    <p><input name="" type="text"  class="text"/><input name="" type="submit" value=""  class="Search_btn"/></p>
	<p class="Words"><a href="#">苹果</a><a href="#">香蕉</a><a href="#">菠萝</a><a href="#">西红柿</a><a href="#">橙子</a><a href="#">苹果</a></p>
</div>
</div>
<!--导航栏样式-->
<div id="Menu" class="clearfix">
<div class="Menu_style">
  <div id="allSortOuterbox" class="display">
    <div class="Category"><a href="#" class="Menu_img"><em></em></a></div>
    <div class="hd_allsort_out_box_new">
	 <!--左侧栏目开始-->
	 <div class="Menu_list">	
	    <div class="menu_title">茶叶品种</div>
         <a href="/home/Product_List">巴山雀舌</a><a href="/home/Gun_Ming">贡茗</a><a href="/home/Guan_Ming">冠茗</a><a href="/home/Zang_Tang">臧芝堂</a><a href="/home/Da_Ba">大巴山茶</a><a href="/home/Da_Zhou">达州（茶）</a>
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
			<li><a class="nav_on" id="mynav1"  href="/homeindex"><span>首页</span></a></li>
			<li><a class="nav_on" id="mynav2"  href="/home/Product_List"><span>巴山雀舌</span></a></li>
			<li><a class="nav_on" id="mynav3"  href="/home/Gun_Ming"><span>贡茗</span></a></li>
			<li><a class="nav_on" id="mynav4"  href="/home/Guan_Ming"><span>冠茗</span></a></li>
			<li><a class="nav_on" id="mynav5"  href="/home/Zang_Tang"><span>臧芝堂</span></a></li>
			<li><a class="nav_on" id="mynav6"  href="/home/Da_Ba"><span>大巴山茶</span></a></li>
			<li><a class="nav_on" id="mynav7"  href="/home/Da_Zhou"><span>达州（茶）</span></a></li>
			<li><a class="nav_on" id="mynav8"  href="#"><span>活动</span></a></li>
			<li><a class="nav_on" id="mynav8"  href="#"><span>联系我们</span></a></li>
		 </ul>			 
		</div>
	<script>$("#Navigation").slide({titCell:".Navigation_name li"});</script>
    <!--购物车-->	
    
     <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><em></em><a href="#">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
	 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
	 <ul class="p_s_list">	   
		<li>
		    <div class="img"><img src="{{ asset('images/tianma.png')}}"></div>
			<!--"{{ asset('js/jquery.min.js') }}"-->
		    <div class="content"><p><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
			<div class="Operations">
			<p class="Price">￥55.00</p>
			<p><a href="#">删除</a></p></div>
		  </li>
		</ul>		
	 <div class="Shopping_style">
	 <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
	  <a href="shopping_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
	 </div>	 
   </div>	
  </div>
</div>
</div>
<!--内页样式-->
 <div class="Inside_pages">
    <div class="products">
    <!--当前位置（面包屑）-->
     <div class="Location_link">
     <em></em><a href="#">产品中心</a>  &lt;   <a href="#">巴山雀舌</a>  
     </div>
    <!--筛选条件样式-->
      <div class="products_Select marginbottom">
       <div class="Filter">
  <div class="Filter_list clearfix">
   <div class="Filter_title"><span>品牌：</span></div>
   <div class="Filter_Entire"><a href="#">全部</a></div>
   <div class="p_f_name">
    <a href="#" title="莱家/Loacker">莱家/Loacker </a>  
	<a href="#" title="">丽芝士/Richeese</a>  
	<a href="#" title="白色恋人/SHIROI KOIBITO ">白色恋人/SHIROI KOIBITO </a> 
	<a href="#">爱时乐/Astick </a> 
	<a href="#">利葡/LiPO </a> 
	<a href="#">友谊牌/Tipo </a> 
	<a href="#"> 三立/SANRITSU  </a>  
	<a href="#"> 皇冠/Danisa </a>  
	<a href="#">丹麦蓝罐/Kjeldsens</a>  
   </div>
  </div>
  <div class="Filter_list clearfix">
  <div class="Filter_title"><span>包装方式：</span></div>
  <div class="Filter_Entire"><a href="#">全部</a></div>
  <div class="p_f_name">
  <a href="#">袋装</a><a href="#">盒装</a><a href="#">罐装</a><a href="#">礼盒装</a><a href="#">散装(称重)</a>
  </div>
  </div>
  <div class="Filter_list clearfix">
  <div class="Filter_title"><span>价格：</span></div>
  <div class="Filter_Entire"><a href="#">全部</a></div>
  <div class="p_f_name">
    <a href="#">0-50</a><a href="#">50-150</a><a href="#">150-500</a><a href="#">500-1000</a><a href="#">1000以上</a>
  </div>
  </div>
 </div>
      </div>
      <!--产品列表列表-->
      <div class="products_list marginbottom">
      <div class="Sorted">
  <div class="Sorted_style">
   <a href="#" class="on">综合<i class="icon-angle-down"></i></a>
   <a href="#">销量<i class="icon-angle-down"></i></a>
   <a href="#">价格<i class="icon-angle-down"></i></a>
   <a href="#">新品<i class="icon-angle-down"></i></a>
   </div>
   <!--页数-->
   <div class="s_Paging">
   <span> 1/12</span>
   <a href="#" class="on">&lt;</a>
   <a href="#">&gt;</a>
   </div>
 </div>
 <!--产品列表样式-->
 <div class="p_list  clearfix">
   <ul>
    <li class="gl-item">				
	<div class="Borders">
	 <div class="img"><a href="Product_Detailed.html"><img src="{{ asset('Products/1.jpg')}}" style="width:220px;height:220px"/></a></div>	 
	 <div class="name"><a href="Product_Detailed.html">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
     <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="Product_Detailed.html"><img src="{{ asset('Products/1.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="Product_Detailed.html">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="Product_Detailed.html"><img src="{{ asset('Products/1.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="Product_Detailed.html">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/1.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="Price"><b>¥89</b><span>[¥49.01/500g]</span></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/1.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/3.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/3.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/3.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/3.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/4.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/4.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/4.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/4.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/5.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	<li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="#"><img src="{{ asset('Products/5.jpg')}}" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
   </ul>
   <div class="Paging_style">
     <a href="#" class="pn-prev disabled">&lt;上一页</a>
	 <a href="#" class="on">1</a>
	 <a href="#">2</a>
	 <a href="#">3</a>
	 <a href="#">4</a>
	 <a href="#">下一页&gt;</a>
	 <a href="#">尾页</a>
	<span class="p-skip"><em>共<b>232</b>页&nbsp;&nbsp;到第</em><input id="page_jump_num" value="1" onkeydown="javascript:if(event.keyCode==13){page_jump();return false;}" class="input-txt"><em>页</em><a href="javascript:page_jump();" class="btn btn-default">确定</a></span>
   </div>
 </div>
      </div>
      <!--分页样式-->
    <div class="Paging marginbottom">
    
    </div>
    </div>    
      <!--友情链接-->
       <div class="Links">
        <div class="link_title">友情链接</div>
        <div class="link_address"><a href="#">四川茶叶协会</a>  <a href="#">链接地址</a>  <a href="#">链接地址</a>  <a href="#">链接地址 </a>   <a href="#">链接地址</a> <a href="#">链接地址</a> <a href="#">链接地址</a></div>
       </div>
 </div>
 <!--底部样式-->
<div class="footer">
 <div class="streak"></div>
 <div class="footerbox clearfix">
  <div class="left_footer">
   <div class="img"><img src="{{ asset('images/img_33.png')}}" /></div>
   <div class="phone">
    <h2>服务咨询电话</h2>
    <p class="Numbers">400-3455-334</p>
   </div>
  </div>
  <div class="right_footer">
   <dl>
    <dt><em class="icon_img"></em>购物指南</dt>
    <dd><a href="#">怎样购物</a></dd>
    <dd><a href="#">积分政策</a></dd>
    <dd><a href="#">会员优惠</a></dd>
    <dd><a href="#">订单状态</a></dd>
    <dd><a href="#">产品信息</a></dd>
    <dd><a href="#">怎样购物</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="#">快递资费及送达时间</a></dd>
    <dd><a href="#">快递覆盖地区查询</a></dd>
    <dd><a href="#">验货与签收</a></dd>
    <dd><a href="#">订单状态</a></dd>
    <dd><a href="#">产品信息</a></dd>
    <dd><a href="#">怎样购物</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="#">货到付款</a></dd>
    <dd><a href="#">支付宝</a></dd>
    <dd><a href="#">财付通</a></dd>
    <dd><a href="#">网银支付</a></dd>
    <dd><a href="#">银联支付</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>售后服务</dt>
    <dd><a href="#">退换货原则</a></dd>
    <dd><a href="#">退换货要求与运费规则</a></dd>
    <dd><a href="#">退换货流程</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>关于我们</dt>
    <dd><a href="#">关于我们</a></dd>
    <dd><a href="#">友情链接</a></dd>
    <dd><a href="#">媒体报道</a></dd>
    <dd><a href="#">新闻动态</a></dd>
    <dd><a href="#">企业文化</a></dd>
 
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
@include('fixbox.fixbox')
</body>
</html>