@include('home.base.public')
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
         var str = "你未选中任何商品，请选择后在操作！"; 
         alert(str);
       }
          
   });
})
</script>

<!--购物车商品-->
 <div class="Shopping_list" style = "margin-left:120px;">
  

 
    <form  method="post" action="/home/submitcart" style="width:1300px; margin-left:-150px; name = "myformcart" >
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
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
          @foreach($list as $v)
        <tr>
              <td class="checkbox"><input class="check-one check" type="checkbox" value = {{$v->id}} name = checkbox[]/></td>
              <td class="goods"><img src="Products/1.jpg" alt=""/><span>{{$v->goods_name}}</span></td>
              <td class="price">{{$v->Gpice}}</td>
              <td class="count"><span class="reduce"></span>
                <input class="count-input" type="text" value="{{$v->goods_num}}" name = "num[{{$v->id}}][]"/>
                <span class="add">+</span></td>
              <td class="subtotal">{{$v->Gpice*$v->goods_num}}</td>
              <td class="operation">
              <span class="delete"><a href="javascript:void(0)" onclick="delcart({{$v->id}},this)"><button>删除</button></a></span>
              </a></td>
        </tr>
 <script type="text/javascript">
    function delcart(id,bn){
              var o= $(bn); 
        o.parents("tr").remove(); 
        $.ajax({
          url:'/delToCart/get',
          async:false,        
          type:'get',        
          data:{id:id},       
          dataType:'json',      
          error:function()     
          {
            alert('删除失败');
          },
          success:function(data)   
          {
            
            if(data>0){
               
              alert('删除成功');
            }else{
              alert('删除失败');
            }
          }
        });
         
    }

</script>
        
        @endforeach
          </tbody>
        </table>
        <div class="foot" id="foot" style="width:1000px;">
          <label style="margin-top:-8px;" class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;&nbsp;全选</label>
          <a class="fl delete" style="margin-top:8px;" id="deleteAll" href="javascript:;">删除</a>
        <div class="fr closing"  style = "color:red;"><input type = "submit" value = "结算" style="margin-top:10px"></div>
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

<div class="footerbox">
   <!--友情链接-->
@include('home.base.bottom')