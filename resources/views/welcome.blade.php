<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/common.css" rel="stylesheet" tyle="text/css" />
<script src="js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="js/common_js.js" type="text/javascript"></script>
<script src="js/footer.js" type="text/javascript"></script>
<title>茶叶商城首页</title>
  <style type="text/css">
      ul,li{margin:0px; padding:0px;}
      #did{
        /*border:1px solid red;*/
        height:125px;
        width:194px;
        overflow:hidden;
        /*//一旦有超出部分隐藏之后就会出现滚动条 */
      }
      /*li{
        padding-left:20px;
      }*/
    
  </style>
</head>

<body>
<!--顶部样式-->
@include('fixbox.top')
<!--logo和搜索样式-->
<div id="header"  class="header">
  <div class="logo">
  <a href="#"><img src="{{asset('images/logo.png')}}" /></a>
  <div class="phone">
   免费咨询热线:<span class="telephone">400-3404-000</span>
  </div>
  </div>
  <!-- 页面的的搜索框 -->
  <div class="Search">
    <form action='{{ url("home/type") }}' method='get'>
        <p><input name="name" type="text"  class="text"/>
        <input name="" type="submit" value=""  class="Search_btn"/></p>
    </form>
	<p class="Words"><a href="#">苹果</a><a href="#">香蕉</a><a href="#">菠萝</a><a href="#">西红柿</a><a href="#">橙子</a><a href="#">苹果</a></p>
</div>
</div>
<!--菜单栏样式-->
<!--导航栏样式-->
<div id="Menu" class="clearfix">
  <div class="Menu_style">
  <div id="allSortOuterbox">
    <div class="Category"><a href="#" class="Menu_img"><em></em></a></div>
    <div class="hd_allsort_out_box_new">
	 <!--左侧栏目开始-->
	 <div class="Menu_list">	
	    <div class="menu_title">茶叶品种</div>
      @foreach($cate as $c)
        <a href="{{url('home/search')}}/{{$c->Gname}}">{{$c->Gname}}</a>
      @endforeach
	</div>	
    <div class="Menu_list" style="word-break:break-all">	
	    <div class="menu_title">茶叶价格</div>
        <a href="#">100以下</a><br/><a href="#">100-200</a><a href="#">200-400</a><a href="#">400-600</a><br/><a href="#">600-900</a><a href="#">1000以上</a>
	</div>
  <style type="text/css">
      ul,li{margin:0px; padding:0px;}
      #did{
        /*border:1px solid red;*/
        height:125px;
        width:194px;
        overflow:hidden;
        /*//一旦有超出部分隐藏之后就会出现滚动条 */
      }
      /*li{
        padding-left:20px;
      }*/
    
  </style>	
     <div class="Menu_list">	

      <div class="menu_title">推荐茶叶</div>
  	    <div class="menu_title" id="did">

          <div id="item1">
            <ul class="recommend">
               <li><a href="#" title="[2017年新茶]巴山雀舌毛尖茶新茶，含硒">[2017年新茶]西湖龙井</a></li>
               <li><a href="#" title="[2017年新茶]巴山雀舌毛尖茶新茶，含硒">[2017年新茶]台湾高山茶</a></li>
               <li><a href="#" title="[2017年新茶]巴山雀舌毛尖茶新茶，含硒">[2017年新茶]黄山毛峰</a></li>
               <li><a href="#" title="[2017年新茶]巴山雀舌毛尖茶新茶，含硒">[2017年新茶]大红袍</a></li>
               <li><a href="#" title="[2017年新茶]巴山雀舌毛尖茶新茶，含硒">[2017年新茶]祁门红茶</a></li>
            </ul>
            </div>
            <div id="item2"></div>
        </div>
        <script type="text/javascript">

          var did = document.getElementById("did");
          var item1 = document.getElementById("item1");
          var item2 = document.getElementById("item2");

          item2.innerHTML = item1.innerHTML;

          var m=0;
          // 实现滚动效果
          setInterval(function (){
            m++;
            //实现无缝滚动
            if(m>item1.offsetHeight){
              m=0;
            }
            did.scrollTop = m;
          },50);
        </script>


	</div>	

	

	</div>		
	</div>

	<!--菜单栏-->
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
   <div class="s_cart"><em></em><a href="{{asset('home/mycarts')}}">购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount"></i></div>
   <div class="dorpdown-layer">
    
	 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
	 
  </div>
</div>
<!--幻灯片样式-->
<div class="Plates"  id="mian">
<div class="bottom_style clearfix">
    <div class="image_display">
	<!--幻灯片样式-->
	  <div class="slider">
	   <div id="slideBox" class="slideBox">
			<div class="hd">
				<ul></ul>
			</div>
			<div class="bd">
				<ul>

        @foreach($list4 as $v)
					<li><a href="/home/Product_Detailed/{{$v->Gid}}" target="_blank"><img src="{{asset('/uploads')}}/{{$v->pic}}" /></a></li>
        @endforeach
				
				</ul>
			</div>
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>
		</div>
		<script type="text/javascript">

		jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:5000});

		</script>
	  </div>     
      </div>
      </div>
      <!--内容样式-->
        <div class="Selling_list">        
         <div id="slideBox_list" class="slideBox_list">
           <div class="hd">
				<span class="arrow"><a class="next"></a><a class="prev"></a></span>
				<ul><li><a href="#">热销产品</a></li><li><a href="#">新品推荐</a></li><li><a href="#">限时促销</a></li></ul>
			</div>
			<div class="bd">
			 <ul>
       @foreach($list1 as $v)
          <li class="s_Products">
              <div class="Products_list_name">
					   <div class="img center"><a href="/home/Product_Detailed/{{$v->Gid}}"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="/home/Product_Detailed/{{$v->Gid}}">【2016年新茶】{{$v->Gname}} &nbsp;{{$v->Gdetail}}（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥{{$v->Gpice}}.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
              </div>
				  </li>
        @endforeach          	
          </ul>
             <ul>
             @foreach($list2 as $v)
             <li class="s_Products">
             <em class="icon_new"></em>
              <div class="Products_list_name">
					   <div class="img center"><a href="/home/Product_Detailed/{{$v->Gid}}"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="/home/Product_Detailed/{{$v->Gid}}">【2016年新茶】{{$v->Gname}} &nbsp;{{$v->Gdetail}}（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥{{$v->Gpice}}.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
              </div>
				 </li>
         @endforeach
             </ul>
               <ul>
               @foreach($list3 as $v)
             <li class="s_Products">
              <div class="Products_list_name">
					   <div class="img center"><a href="/home/Product_Detailed/{{$v->Gid}}"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="/home/Product_Detailed/{{$v->Gid}}">【2016年新茶】{{$v->Gname}} &nbsp;{{$v->Gdetail}}（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥{{$v->Gpice}}.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                      <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
              </div>
				 </li>
					@endforeach
             </ul>
            </div>
         </div>
         <script type="text/javascript">jQuery(".slideBox_list").slide();</script>
       </div>
       <!--产品系列样式表-->
       @foreach($cate as $c)
       <div class="Area"> 
         <div class="Area_title">
         <div class="name"><em class="icon_title"></em>{{$c->Gname}}</div>
         <div class="right">
         <span class="p_link"></span>
         <span class="more"></span>
         </div>
         </div>
         <div class="Area_list clearfix">
          <div class="Area_ad">
            <a href="#"><img src="images/AD-04.jpg" /></a>
            <a href="#"><img src="images/AD-03.jpg" /></a>
          </div>
          <div class="Area_p_list">
          @foreach($c->subcates as $s)
          
          <ul>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="/home/Product_Detailed/{{$s->Gid}}"><img src="Products/11.jpg" /></a></div>
					   <div class="title_name"><a href="/home/Product_Detailed/{{$s->Gid}}">{{$s->Gname}} &nbsp;{{$s->Gdetail}}</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥{{$s->Gpice}}.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
          @endforeach
          </ul>

          </div>
         
         </div>
       </div>
       @endforeach
       <!--信息内容样式-->
       <div class="bs_info_area clearfix">
       <!--百科知识-->
        <div class="know_how left">
        <div class="title_name"><em class="title_icon"></em>茶叶百科  <a href="">更多》</a></div>
        <div class="info_content">
         <uL>
          <li><em class="info_icon"></em><a href="#">乌龙茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">大红袍属于什么茶</a></li>
          <li><em class="info_icon"></em><a href="#">普洱茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">乌龙茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">绿茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">乌龙茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">铁观音属于什么茶</a></li>
           <li><em class="info_icon"></em><a href="#">铁观音属于什么茶</a></li>
         </uL>
        </div>
        </div>
        <!--巴山雀舌信息-->
        <div class="info_about left">
         <div class="title_name"><em class="title_icon"></em>巴山介绍 <a href="#">查看详细》</a></div>
         <div class="info_content bs_about" >
         <style type="text/css">
    ul,li{margin:0px; padding:0px;}
    #dad{
     
      height:230px;
      width:500px;
      overflow:hidden;
      /*//一旦有超出部分隐藏之后就会出现滚动条 */
    }
    li{
      padding-left:0px;
    }
    
  </style>


          <img src="images/logo_img_03.png" />
          <div id="dad">
            <div id="bala1">
            <ul>
              <li>巴山雀舌，品种：绿茶，产于四川省万源市，境内环境优美，土壤、气候特别适宜茶树生长，茶叶自然品质好，并天然富硒。巴山雀舌系采用其茶树的 高档原料精心制作而成，其品质特征外形扁平匀直，绿润带毫。经水冲泡叶底嫩绿明亮，香气鲜嫩持久，滋味醇爽回甘，汤色嫩绿明亮。
           茶叶以富含硒而出名，抗氧化能力强，能清除水中污染毒素，故具有延缓衰老，防癌抗癌，抗高血压，防止色素堆积，增强机体活力，防辐射等作用。巴山雀舌”先后获得国家省部级以上奖项达60余次,产品曾先后获得“中国文化名茶”、“四川省十大名茶”、“四川省名牌产品”...</li></ul>
         
             </div>
              <div id="bala2"></div>
          </div>
          </div>
          <script type="text/javascript">
              //思路 
              // did item1 item2 三个节点
              //did节点的scrollTop变大 
              var dad = document.getElementById("dad");
              var bala1 = document.getElementById("bala1");
              var bala2 = document.getElementById("bala2");

              bala2.innerHTML = bala1.innerHTML;
              var m=0;
              setInterval(function (){
                m++;
                if(m>bala1.offsetHeight){
                  m=0;
                }
                dad.scrollTop = m;

              },60);
            </script>

        </div>
        <!--新闻中心-->
        <div class="mews right">
         <div class="title_name"><em class="title_icon"></em>文化底蕴<a href="#">更多》</a></div>
         <div class="info_content news">
          <ul>
          <li class="Headlines_news">
           <a href="#" class="news_img"><img src="images/news_img.jpg" /></a>
           <a href="#">1991年“七·五”星火科技成果巴山雀舌获金奖江总书记视...</a>
           <p class="news_Profile">星火科技成果巴山雀舌获金奖江总书记视察巴山雀舌展台</p>
          </li>
          <li><a href="#">006年11月巴山雀舌获“四川省十大名茶”</a></li>
          <li><a href="#">2007年十月中国食品协会授予万源市“中国富硒...</a></li>
          <li><a href="#">张爱萍将军为巴山雀舌提字</a></li>
          <li><a href="#">巴山雀舌茶历史可追溯到西周年代</a></li>
          </ul>        
         </div>
        </div>       
       </div>
       <!--友情链接-->
       <!--友情链接-->
       <div class="Links">
        <div class="link_title">友情链接</div>
        <div class="link_address">
        @foreach($link as $v)
        <a href="{{$v->url}}">{{$v->name}}</a> 
        @endforeach
           </div>
       </div>
</div>
     @include('home.base.bottom')