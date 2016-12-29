@include('home.base.public')
<!--内页样式-->
 <div class="Inside_pages">
    <div class="products">
    <!--当前位置（面包屑）-->
    
    <!--筛选条件样式-->
      <div class="products_Select marginbottom">
        
      <div class="Filter_list clearfix">
      <!-- <div class="Filter_title"></span></div>
      <div class="Filter_Entire"></div> -->
      
  </div>
 </div>
      </div>
      <!--产品列表列表-->
      <div class="products_list marginbottom">
         <div class="Sorted">
          <div class="Sorted_style">
           <a href="#" class="on">综合<i class="icon-angle-down"></i></a>
          
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
   @foreach($list as $v)
        <li class="gl-item">
        <div class="Borders">
         <div class="img"><a href="Product_Detailed/{{$v->Gid}}"><img src="{{asset('uploads')}}/{{$v->Gimage}}" style="width:220px;height:220px"/></a></div>  
         <div class="name"><a href="Product_Detailed/{{$v->Gid}}">【2015年新茶】{{$v->Gname}}{{$v->Gdetail}}}（绿）</a></div>
         <div class="Price">商城价：<b>¥{{$v->Gpice}}</b><span>原价：<em>123</em></span></div>
         <div class="Review">已有<a href="#">2345</a>评论</div>
         <div class="p-operate">
          <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
          <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
         </div>
         </div>
        </li>
    @endforeach
    </ul>
   <div class="Paging_style">
     {{ $list->appends($where)->links() }}
   </div>
 </div>
      </div>
      <!--分页样式-->
    <div class="Paging marginbottom">
    
    </div>
    </div>   
      <!--友情链接-->
       @include('home.base.bottom')