@include('home.base.public')
<!--内页样式-->
<style type="text/css">
  
  #page ul li{
        float:left;
        margin-left:5px;
  }
</style>
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
           <a href="#" class="on">产品<i class="icon-angle-down"></i></a>
          
           </div>
           <!--页数-->
           <div class="s_Paging">
           <span> </span>
           <a href="#" class="on"></a>
           <a href="#"></a>
           </div>
     </div>
 <!--产品列表样式-->
 <div class="p_list  clearfix">
   <ul>
   @foreach($list as $v)
        <li class="gl-item">
        <div class="Borders">
         <div class="img"><a href="/home/Product_Detailed/{{$v->Gid}}"><img src="{{asset('Products/3.jpg')}}" style="width:220px;height:220px"/></a></div>  
         <div class="name"><a href="/homeProduct_Detailed/{{$v->Gid}}">【2015年新茶】{{$v->Gname}}<br>
         {{$v->Gdetail}}}（绿）</a></div>
         <div class="Price">商城价：<b>¥{{$v->Gpice}}</b><span>原价：<em>123</em></span></div>
         <div class="Review">已有<a href="#">2345</a>评论</div>
         <div class="p-operate">
          <a href="/home/Product_Detailed/{{$v->Gid}}" class="p-o-btn Collect" style="font-size:14px;color:blue"><em></em>立即购买</a>
          <a href="javascript:addToCart({{$v->Gid}},{{$v->Gpice}})" class="p-o-btn shop_cart"><em></em>加入购物车</a>
         </div>
         </div>
        </li>
    @endforeach
    </ul>
   <div class="Paging_style" id="page">
     {{ $list->appends($where)->links() }}
   </div>
<script type="text/javascript">

       
   function addToCart(id,price){
       var num = 1;        
        $.ajax({
          url:'/addToCart/post',
          async:false,        
          type:'post',        
          data:{Gid:id,num:num,price:price},       
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          dataType:'json',      
          error:function()     
          {
            alert('添加失败');
          },
          success:function(data)    
          {
            
            if(data>0){
              alert('添加成功');
            }else{
              alert('添加失败');
            }
          }
        });

    }

      </script>
 </div>
      </div>
      <!--分页样式-->
      
    <div class="Paging marginbottom">
    
    </div>
  </div>  

      <!--友情链接-->
       @include('home.base.bottom')