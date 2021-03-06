<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('css/css.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/common.css')}}" rel="stylesheet" tyle="text/css" />
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('js/jquery.min.1.8.2.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.SuperSlide.2.1.1.js')}}" type="text/javascript"></script>
<script src="{{asset('js/common_js.js')}}" type="text/javascript"></script>
<script src="{{asset('js/footer.js')}}" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
<script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
<![endif]-->
<title>购物车</title>
<script type="text/javascript">
$(document).ready(function () {
   //全选
   $("#CheckedAll").click(function () {
	   if (this.checked) {                 //如果当前点击的多选框被选中
		   $('input[type=checkbox][name=checkitems]').attr("checked", true);
	   } else {
		   $('input[type=checkbox][name=checkitems]').attr("checked", false);
	   }
   });
   $('input[type=checkbox][name=checkitems]').click(function () {
	   var flag = true;
	   $('input[type=checkbox][name=checkitems]').each(function () {
		   if (!this.checked) {
			   flag = false;
		   }
	   });

	   if (flag) {
		   $('#CheckedAll').attr('checked', true);
	   } else {
		   $('#CheckedAll').attr('checked', false);
	   }
   });
   //输出值
   $("#send").click(function () {
	      if($("input[type='checkbox'][name='checkitems']:checked").attr("checked")){
	   var str = "你是否要删除选中的商品：\r\n";
	   $('input[type=checkbox][name=checkitems]:checked').each(function () {
		   str += $(this).val() + "\r\n";
	   })
	   alert(str);
		  }
		  else{
			   var str = "你为选中任何商品，请选择后在操作！"; 
			   alert(str);
       }
	   	    
   });
})
</script>
</head>
<!--宽度1000的购物车样式-->
<body>
<div id="top">
  <div class="carts">
    <div class="Collection"><em></em><a href="#">收藏我们</a></div>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">欢迎光临本店！<a href="#" class="red">[请登录]</a> 新用户<a href="#" class="red">[免费注册]</a></li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的订单</a></li> 
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">购物车(<b>0</b>)</a> </li>
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
<div id="shop_cart">
 <div id="header">
  <div class="logo">
  <a href="#"><img src="{{asset('images/logo.png')}}" /></a>
  <div class="phone">
   免费咨询热线:<span class="telephone">400-3454-343</span>
  </div>
  </div>
  <div class="Search">
    <p><input name="" type="text"  class="text"/><input name="" type="submit" value=""  class="Search_btn"/></p>
	<p class="Words"><a href="#">苹果</a><a href="#">香蕉</a><a href="#">菠萝</a><a href="#">西红柿</a><a href="#">橙子</a><a href="#">苹果</a></p>
 </div>
</div>
<!--提示购物步骤-->

 <div class="prompt_step">
  <img src="{{asset('images/cart_step_01.png')}}" />
 </div>
 <!--购物车商品-->
 <div class="Shopping_list">
  

 
	  <form  method="post" action="" style="width:1300px; margin-left:-150px; ">
			 <div class="catbox">
			  <table id="cartTable"  style="width:1000px; font-size:14px;" style="align:center;">
			    <thead>
			      <tr>
			        <th><label>
			            <input class="check-all check" type="checkbox"/>&nbsp;&nbsp;&nbsp;&nbsp;全选</label></th>
			        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商品名称</th>
			        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本店价</th>
			        <th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购买数量</th>
			        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小计</th>
			        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;操作</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
			        <td class="goods"><img src="Products/1.jpg" alt=""/><span>巴山雀茶</span></td>
			        <td class="price">249.00</td>
			        <td class="count"><span class="reduce"></span>
			          <input class="count-input" type="text" value="1"/>
			          <span class="add">+</span></td>
			        <td class="subtotal">249.00</td>
			        <td class="operation"><span class="delete">删除</span></td>
			      	</tr><tr>
			        <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
			        <td class="goods"><img src="Products/1.jpg" alt=""/><span>巴山雀茶</span></td>
			        <td class="price">249.00</td>
			        <td class="count"><span class="reduce"></span>
			          <input class="count-input" type="text" value="1"/>
			          <span class="add">+</span></td>
			        <td class="subtotal">249.00</td>
			        <td class="operation"><span class="delete">删除</span></td>
			      </tr>
			      </tr><tr>
			        <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
			        <td class="goods"><img src="Products/1.jpg" alt=""/><span>巴山雀茶</span></td>
			        <td class="price">249.00</td>
			        <td class="count"><span class="reduce"></span>
			          <input class="count-input" type="text" value="1"/>
			          <span class="add">+</span></td>
			        <td class="subtotal">249.00</td>
			        <td class="operation"><span class="delete">删除</span></td>
			      </tr>
			    
			    </tbody>
			  </table>
			  <div class="foot" id="foot" style="width:1000px;">
			    <label style="margin-top:-8px;" class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;&nbsp;全选</label>
			    <a class="fl delete" style="margin-top:8px;" id="deleteAll" href="javascript:;">删除</a>
			    <div class="fr closing" onclick="getTotal();">结 算</div>
			    <input type="hidden" id="cartTotalPrice" />
			    <div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
			    <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件<span class="arrow up"></span><span class="arrow down"></span></div>
			    <div class="selected-view">
			      <div id="selectedViewList" class="clearfix">
			        <div><img src="images/1.jpg"><span>取消选择</span></div>
			      </div>
			      <span class="arrow">◆<span>◆</span></span> </div>
			  </div>
			</div>
   </form>
 </div>

</div>
<!--底部样式-->
 <div class="footer help-box  clearfix" style="margin-left:180px">
   <div class="right_footer clearfix">
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
  <div class="Copyright">
  <p><a href="#">关于我们</a> | <a href="#">隐私申明</a> | <a href="#">成为供应商</a> | <a href="#">茶叶</a> | <a href="#">博客</a> |<a href="#">友情链接</a> | <a href="#">网站地图</a></p>
  <p>Copyright 2010 - 2015 巴山雀舌 四川巴山雀舌茗茶实业有限公司 zuipin.cn All Rights Reserved </p>
  <p>川ICP备10200063号-1</p>
   <a href="#" class="return_img"></a>
 </div>
 </div>

<!--结束-->
</div>
</body>
</html>
