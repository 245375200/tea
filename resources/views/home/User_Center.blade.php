@extends('home.base.user_base')

@section('content')
   <!--右侧内容展示-->
  <div class="right_style r_user_style">
 
   <!--用户基本信息-->
   <div class="clearfix">
    <div class="user_info clearfix">
         <div class="user_name_info">
          <ul>
           <li class="us_one">
            <div class="name left">用户名:<b>{{session()->get('homeuser.username')}}</b>,  欢迎你 [<a href="#">修改密码</a>]  </div>
            <div class="right time"> <span>上次访问时间：2015-5-21 10:23</span></div>
          </li>
          <li class="us_two"> 
          <dl><dt class="left">账户余额：</dt><dd>￥<b>0</b>元</dd></dl>
       <dl><dt class="left">账户积分：</dt><dd><b>2355</b>分 &nbsp;<a href="#">[积分商城]</a></dd></dl>
       <dl><dt class="left">用户等级：</dt><dd><b>普通会员</b></dd></dl>
      </li>
      <li class="us_Order">
       <dl><dt class="left">未完成订单：</dt><dd><a href="#">0</a></dd></dl>
       <dl><dt class="left">完成订单：</dt><dd><a href="#">2</a></dd></dl>
      </li>
      <li class="us_four">
      <div class="Address"><em></em><a href="#">地址管理&gt;</a></div>
      </li>
     </ul>
    </div>
   </div>  
  </div>
  <!--订单-->
   <div class="user_info_p_s clearfix">
    <div class="left_user_cont">
     <div class="us_Orders left clearfix">
  <div class="Orders_name">
   <div class="title_name">
   <div class="Records">购买记录</div>
   <div class="right select">
   只记录你最近30天的购买记录   </div>
   </div>   
  </div>
  <table>
  <thead>
  <tr>
   <th>产品名称</th>
   <th>数量</th>
   <th>状态</th>
   <th>操作</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td class="img">
<a href="#"><span class="left"><img src="common/images/cp-2.jpg"></span>
    <span class="left">产品名称敬龙云</span></a>
    </td>
    <td>2</td>
    <td>完成</td>
    <td><a href="#">查看</a></td>
   </tr>
    <tr>
    <td class="img">
<a href="#"><span class="left"><img src="common/images/cp-2.jpg"></span>
    <span class="left">产品名称敬龙云</span></a>
    </td>
    <td>2</td>
    <td>完成</td>
    <td><a href="#">查看</a></td>
   </tr>
   </tbody>
  </table>
   <div class="us_jls">共2条记录</div>
  </div>
    </div> 
    <!--右侧记录样式-->
    <div class="right_user_recording">
    <div class="us_Record">
      <div id="Record_p" class="Record_p">
        <div class="title_name">
        <span class="name left">浏览历史</span>
         <span class="pageState right"><span>1</span>/7</span>      </div>
     
                        <div class="hd">
                            <a class="next">&lt;</a>
                            <a class="prev">&gt;</a>                        </div>
                        <div class="bd">
                        <ul >
                        <li class="clone">
                            <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/11.jpg"></a></div>   
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>  
                                </li>
                            <li >
                            <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/11.jpg"></a></div>   
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>      
                            </li>
                                <li >
                                <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/9.jpg"></a></div>    
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>  
                                </li>
                                <li >
                                    <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/8.jpg"></a></div>    
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>                          
                                </li>
                                <li >
                                    <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/7.jpg"></a></div>    
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>                          
                                </li>
                                    <li >
                                    <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/6.jpg"></a></div>    
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>              
                                </li>
                                    <li >
                                    <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/5.jpg"></a></div>    
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>  
                                </li>
                                    <li >
                                    <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/3.jpg"></a></div>    
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>  
                                </li>
                                <li class="clone" >
                            <div class="p_width">
                                <div class="pic"><a href=""><img src="Products/12.jpg"></a></div>   
                                <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                <div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
                            </div>      
                            </li></ul></div>
                        
                    </div>
                    <script type="text/javascript">jQuery("#Record_p").slide({ mainCell:".bd ul",effect:"leftLoop",vis:1,autoPlay:false });</script>
        </div>
    </div>
   </div>
   <!--收藏商品-->
   <div class="Collections_p">
   <div class="title_name">收藏的商品</div>
    <div id="Collect_Products" class="Collect_Products">
                        <div class="hd">
                            <a class="next">&lt;</a>
                            <a class="prev">&gt;</a>
                        </div>
                        <div class="bd">
                            <ul >
                            <li class="clone" style="float: left; width: 160px;">
                            <div class="pic"><a href=""><img src="Products/11.jpg"></a></div>   
                        <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>       
                                </li>
                                <li style="float: left; width: 160px;">
                                    <div class="pic"><a href=""><img src="Products/12.jpg"></a></div>
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>
                                </li>
                                <li style="float: left; width: 160px;">
                                    <div class="pic"><a href=""><img src="Products/10.jpg"></a></div>   
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>                           
                                </li>
                                <li style="float: left; width: 160px;">
                                        <div class="pic"><a href=""><img src="Products/9.jpg"></a></div>    
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>                               
                                </li>
                                    <li style="float: left; width: 160px;">
                                        <div class="pic"><a href=""><img src="Products/8.jpg"></a></div>    
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>                   
                                </li>
                                    <li style="float: left; width: 160px;">
                                        <div class="pic"><a href=""><img src="Products/1.jpg"></a></div>    
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>       
                                </li>
                                    <li style="float: left; width: 160px;">
                                        <div class="pic"><a href=""><img src="Products/1.jpg"></a></div>    
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>       
                                </li>
                            <li class="clone" style="float: left; width: 160px;">
                                    <div class="pic"><a href=""><img src="Products/5.jpg"></a></div>
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>
                                </li><li class="clone" style="float: left; width: 160px;">
                                    <div class="pic"><a href=""><img src="Products/4.jpg"></a></div>    
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>                           
                                </li><li class="clone" style="float: left; width: 160px;">
                                        <div class="pic"><a href=""><img src="Products/3.jpg"></a></div>    
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>                               
                                </li><li class="clone" style="float: left; width: 160px;">
                                        <div class="pic"><a href=""><img src="Products/2.jpg"></a></div>    
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>                   
                                </li><li class="clone" style="float: left; width: 160px;">
                                        <div class="pic"><a href=""><img src="Products/1.jpg"></a></div>    
                                    <div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
                                    <div class="p_Price">￥32.50</div>       
                                </li></ul></div>
                        </div>
                    
    <script type="text/javascript">jQuery("#Collect_Products").slide({ mainCell:".bd ul",effect:"leftLoop",vis:5,autoPlay:false });</script>
 </div>
   <!--结束-->
 </div>
</div>
   <!--结束-->
 @stop