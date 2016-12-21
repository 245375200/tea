@extends("home.base.parent")
@section('content')
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
					<li><a href="#" target="_blank"><img src="images/ad-1.png" /></a></li>
			        <li><a href="#" target="_blank"><img src="images/ad-3.jpg" /></a></li>
				</ul>
			</div>
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>
		</div>
		<script type="text/javascript">
		jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:9000});
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
             <li class="s_Products">
              <div class="Products_list_name">
					   <div class="img center"><a href="Product_Detailed.html"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="Product_Detailed.html">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
              </div>
				 </li>
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="Product_Detailed.html"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="Product_Detailed.html">52°五岭洞藏黑金刚1500ml(双瓶装)</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>	
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					  <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>
					<li class="s_Products">
                      <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">桐木关正山小种 特级XZ1390-250g 天地盖硬盒 本朴</a></div>
					 <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>	
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>	
                       </li>	
                       	
             </ul>
             <ul>
             <li class="s_Products">
             <em class="icon_new"></em>
              <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="#">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
              </div>
				 </li>
					<li class="s_Products">
                    <em class="icon_new"></em>
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°五岭洞藏黑金刚1500ml(双瓶装)</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>	
					<li class="s_Products">
                    <em class="icon_new"></em>
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					  <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>
					<li class="s_Products">
                    <em class="icon_new"></em>
                      <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">桐木关正山小种 特级XZ1390-250g 天地盖硬盒 本朴</a></div>
					 <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>	
					<li class="s_Products">
                    <em class="icon_new"></em>
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>	
                       </li>	
             </ul>
               <ul>
             <li class="s_Products">
              <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="#">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                      <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
              </div>
				 </li>
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°五岭洞藏黑金刚1500ml(双瓶装)</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                        <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
                       </div>
					</li>	
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					  <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
                       </div>
					</li>
					<li class="s_Products">
                      <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">桐木关正山小种 特级XZ1390-250g 天地盖硬盒 本朴</a></div>
					 <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
                       </div>
					</li>	
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                     <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
                       </div>	
                       </li>	
             </ul>
            </div>
         </div>
         <script type="text/javascript">jQuery(".slideBox_list").slide();</script>
       </div>
       <!--产品系列样式表-->
       <div class="Area"> 
         <div class="Area_title">
         <div class="name"><em class="icon_title"></em>巴山雀舌系列</div>
         <div class="right">
         <span class="p_link"><a href="#">贡茶</a><a href="#">毛尖茶</a><a href="#">佳茗茶</a><a href="#">贡茶</a></span>
         <span class="more"><a href="#">更多《</a></span>
         </div>
         </div>
         <div class="Area_list clearfix">
          <div class="Area_ad">
            <a href="#"><img src="images/AD-04.jpg" /></a>
            <a href="#"><img src="images/AD-03.jpg" /></a>
          </div>
          <div class="Area_p_list">
          <ul>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="Product_Detailed.html"><img src="Products/11.jpg" /></a></div>
					   <div class="title_name"><a href="Product_Detailed.html">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="Product_Detailed.html"><img src="Products/10.jpg" /></a></div>
					   <div class="title_name"><a href="Product_Detailed.html">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/12.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
          </ul>
          </div>
         </div>
       </div>
       <!--产品版块-->
        <div class="Area"> 
         <div class="Area_title">
         <div class="name"><em class="icon_title"></em>巴山雀舌系列</div>
         <div class="right">
         <span class="p_link"><a href="#">贡茶</a><a href="#">毛尖茶</a><a href="#">佳茗茶</a><a href="#">贡茶</a></span>
         <span class="more"><a href="#">更多《</a></span>
         </div>
         </div>
         <div class="Area_list clearfix">
          <div class="Area_ad">
            <a href="#"><img src="images/AD-02.jpg" /></a>
            <a href="#"><img src="images/AD-01.jpg" /></a>
          </div>
          <div class="Area_p_list">
          <ul>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/4.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/5.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/6.jpg" /></a></div>
					   <div class="title_name"><a href="#">【2015新茶上市】桐木关金骏眉（小菜芽）JM3300-60g 小抽屉盒 雅朴</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/7.jpg" /></a></div>
					   <div class="title_name"><a href="#">【2015新茶上市】桐木关金骏眉（小菜芽）JM3300-60g 小抽屉盒 雅朴</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/9.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/8.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
          </ul>
          </div>
         </div>
       </div>
        <!--产品版块-->
        <div class="Area"> 
         <div class="Area_title">
         <div class="name"><em class="icon_title"></em>茶具系列</div>
         <div class="right">
         <span class="p_link"><a href="#">贡茶</a><a href="#">毛尖茶</a><a href="#">佳茗茶</a><a href="#">贡茶</a></span>
         <span class="more"><a href="#">更多《</a></span>
         </div>
         </div>
         <div class="Area_list clearfix">
          <div class="Area_ad">
            <a href="#"><img src="images/AD-05.jpg" /></a>
            <a href="#"><img src="images/AD-06.jpg" /></a>
          </div>
          <div class="Area_p_list">
          <ul>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/18.jpg" /></a></div>
					   <div class="title_name"><a href="#">雅集整套花茶壶茶杯保温套装耐热玻璃泡茶壶花草茶茶具带品茶杯</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/13.jpg" /></a></div>
					   <div class="title_name"><a href="#">闽毓 茶具 整套实木茶盘套装电磁炉套装 冰裂功夫茶具套装四合一</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/14.jpg" /></a></div>
					   <div class="title_name"><a href="#">闽毓 茶具 整套实木茶盘套装电磁炉套装 冰裂功夫茶具套装四合一</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/15.jpg" /></a></div>
					   <div class="title_name"><a href="#">闽毓 茶具 整套实木茶盘套装电磁炉套装 冰裂功夫茶具套装四合一</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/16.jpg" /></a></div>
					   <div class="title_name"><a href="#">宏中 宜兴紫砂茶叶罐 七饼普洱醒茶罐手工茶罐茶缸桶大号精品</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/17.jpg" /></a></div>
					   <div class="title_name"><a href="#">踞虎堂正品铁壶朱雀铜雀铜盖日本南部铸铁壶生铁壶茶具茶壶</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/19.jpg" /></a></div>
					   <div class="title_name"><a href="#">东茶西壶 雪花茶具陶瓷茶壶茶杯整套功</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/20.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
          </ul>
          </div>
         </div>
       </div>
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
         <div class="info_content bs_about">
          <img src="images/logo_img_03.png" />
          巴山雀舌，品种：绿茶，产于四川省万源市，境内环境优美，土壤、气候特别适宜茶树生长，茶叶自然品质好，并天然富硒。巴山雀舌系采用其茶树的 高档原料精心制作而成，其品质特征外形扁平匀直，绿润带毫。经水冲泡叶底嫩绿明亮，香气鲜嫩持久，滋味醇爽回甘，汤色嫩绿明亮。<br />
           茶叶以富含硒而出名，抗氧化能力强，能清除水中污染毒素，故具有延缓衰老，防癌抗癌，抗高血压，防止色素堆积，增强机体活力，防辐射等作用。
    巴山雀舌”先后获得国家省部级以上奖项达60余次,产品曾先后获得“中国文化名茶”、“四川省十大名茶”、“四川省名牌产品”...
         </div>
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
       <div class="Links">
        <div class="link_title">友情链接</div>
        <div class="link_address"><a href="#">四川茶叶协会</a>  <a href="#">链接地址</a>  <a href="#">链接地址</a>  <a href="#">链接地址 </a>   <a href="#">链接地址</a> <a href="#">链接地址</a> <a href="#">链接地址</a></div>
       </div>
</div>
<!--底部样式-->
@stop
