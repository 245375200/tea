@include("home.base.public")
<div id="Orders" class="Inside_pages  clearfix">
  <div class="Orders_style clearfix">
     <div class="address clearfix">
       <div class="title">收货人信息</div>
          <div class="adderss_list clearfix">
            <div class="title_name">选择收货地址 <a href="#">+添加地址</a></div>
             <!--<div class="list" id="select">
            <ul class="confirm active">
            <div class="default">默认地址</div>
            <div class="adderss_operating">
             <div class="Operate"><a href="#" class="delete_btn"></a> <a href="#" class="modify_btn"></a></div>
            </div>
            <div class="user_address">
            <li>小张</li>
            <li>四川成都高新区创业路10号3栋1单元1102式</li>
            <li class="Postcode">610043</li>      
            <li>18908269130</li>
            </div>
            </ul>
             <ul class="">
              <div class="adderss_operating">
             <div class="Operate"><a href="#" class="delete_btn"></a> <a href="#" class="modify_btn"></a></div>
            </div>
             <div class="user_address">
            <li>小张</li>
            <li>四川成都高新区创业路10号3栋1单元1102式</li>
            <li class="Postcode">610043</li>
            <li>18908269130</li>
            </div>
            </ul>
             <ul class="">
              <div class="adderss_operating">
             <div class="Operate"><a href="#" class="delete_btn"></a> <a href="#" class="modify_btn"></a></div>
            </div>
             <div class="user_address">
            <li>小张</li>
            <li>四川成都高新区创业路10号3栋1单元1102式</li>
            <li class="Postcode">610043</li>
            <li>18908269130</li>
            </div>
            </ul>
            </div>
           </div>
-->        <!--收货地址样式-->
     <div class="Shipping_address">
       <!-- <ul class="detailed">
        <li><label>收货人姓名</label><span>张晓</span></li>
        <li><label>电子邮件</label><span>4567454@qq.com</span></li>
        <li><label>详细地址</label><span>四川成都武侯区簇景西路20号3栋1单元302号</span></li>
        <li><label>邮政编码</label><span></span></li>
        <li><label>移动电话</label><span></span></li> 
         <li><label>固定电话</label><span></span></li>        
       </ul> -->

       <!-- ======================================= -->
       <style type="text/css">
        .t1
        {
            clear: both;
            border: 1px solid #c9dae4;
        }
        .t1 tr th
        {
            color: #0d487b;
            background: #f2f4f8 url(../CSS/Table/images/sj_title_pp.jpg) repeat-x left bottom;
            line-height: 28px;
            border-bottom: 1px solid #9cb6cf;
            border-top: 1px solid #e9edf3;
            font-weight: normal;
            text-shadow: #e6ecf3 1px 1px 0px;
            padding-left: 5px;
            padding-right: 5px;
        }
        .t1 tr td
        {
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 5px;
            padding-top: 5px;
            color: #444;
            border-top: 1px solid #FFFFFF;
            padding-left: 5px;
            padding-right: 5px;
            word-break: break-all;
        }
        /* white-space:nowrap; text-overflow:ellipsis; */
        tr.alt td
        {
            background: #ecf6fc; /*这行将给所有的tr加上背景色*/
        }
        tr.over td
        {
            background: #bcd4ec; /*这个将是鼠标高亮行的背景色*/
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () { 
            $(".t1 tr").mouseover(function () {
                //如果鼠标移到class为stripe的表格的tr上时，执行函数  
                $(this).addClass("over");
            }).mouseout(function () {
                //给这行添加class值为over，并且当鼠标一出该行时执行函数  
                $(this).removeClass("over");
            }) //移除该行的class  
            $(".t1 tr:even").addClass("alt");
            //给class为stripe的表格的偶数行添加class值为alt
        });
    </script>
        <form id="form1" runat="server" name = "detail" action = "/home/findorder" method = "post">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
   
    <table width="100%" id="ListArea" border="0" class="t1" align="center" cellpadding="0"
        cellspacing="0">
        <tr align="center">
            <td>请选择</td>
            <td>姓名</td>
            <td>住址</td>
            <td>联系电话</td>
            <td>邮编</td>
        </tr>
  @foreach($address as $k=>$v)
        <tr align="center">
            <td><input type="radio" name = "address" value="{{$address[$k]->id}}"></td>
            <td>{{$address[$k]->consignee}}</td>
            <td>{{$address[$k]->province}}{{$address[$k]->city}}{{$address[$k]->district}}{{$address[$k]->address}}</td>
            <td>{{$address[$k]->tel}}</td>
            <td>{{$address[$k]->postcode}}</td>
        </tr>
    @endforeach
     <tr align="center">
            <td>添加地址</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>

   
       <!-- ======================================= -->
     </div>
     </div> 
        
     
		<fieldset> 
     <!--快递选择-->
     <div class="express_delivery">
       <div class="title_name">选择快递方式</div>
    
        <ul class="dowebok">
      <li><input type="radio" name="radio" data-labelauty="圆通快递" value = "圆通快递">
          <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
           <p><a href="#">点击查看是否在配送范围内</a></p>
          </div>
        </li>
      <li><input type="radio" name="radio" data-labelauty="中通快递" value = "中通快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
      <li><input type="radio" name="radio" data-labelauty="申通快递" value = "申通快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
      <li><input type="radio" name="radio" data-labelauty="邮政EMS" value = "邮政EMS">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
        <li><input type="radio" name="radio" data-labelauty="城际快递" value = "城际快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：同城包邮</p>
   
          </div>
        </li>
        <li><input type="radio" name="radio" data-labelauty="韵达快递" value = "韵达快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
      <li><input type="radio" name="radio" data-labelauty="国通快递" value = "国通快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
      <li><input type="radio" name="radio" data-labelauty="顺丰快递" value = "顺丰快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满88元包邮</p>
          </div>
        </li>
      <li><input type="radio" name="radio" data-labelauty="邮政小包" value = "邮政小包">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
        <li><input type="radio" name="radio" data-labelauty="天天快递" value = "天天快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
        </ul>       
      
     </div>
    
     <!--付款方式-->
     <div class="payment">
      <div class="title_name">支付方式</div>
       <ul>
        <li><input type="radio" name="pay" data-labelauty="支付宝"  value="支付宝"></li>
        <li><input type="radio" name="pay" data-labelauty="财付通" value="财付通"></li>
        <li><input type="radio" name="pay" data-labelauty="银联支付"  value="银联支付"></li>
       </ul>
     </div>
      <!--发票样式-->
     
     <!--产品列表-->
  <div class="Shopping_list" style = "margin-left:18px;">

    
       <div class="catbox">
        <table id="cartTable"  style="width:1000px; font-size:14px;" style="align:center;">
          <thead>
            <tr>
              <th><label>
                  <input class="check-all check" type="checkbox" checked = true  disabled  name = "checked[]" />&nbsp;&nbsp;&nbsp;&nbsp;</label></th>
              <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商品名称</th>
              <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本店价</th>
              <th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购买数量</th>
              <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小计</th>
              
            </tr>
          </thead>
          <tbody>
          @foreach($list as $v)
          <input type = "hidden" name = "id[]" value = "{{$v->id}}">
        <tr>

              <td class="checkbox"><input class="check-one check" type="checkbox" checked = true; disabled  name = "checked[]" value = "{{$v->id}}" /></td>
              <td class="goods"><img src="Products/1.jpg" alt=""/><span>{{$v->goods_name}}</span></td>
              <td class="price">{{$v->goods_price}}</td>
              <td class="count">
                <input class="count-input" type="text" value="{{$v->goods_num}}" disabled style = "border:0px solid white;"/>

                
              <td class="subtotal">{{$v->goods_price*$v->goods_num}}</td>
             
        </tr>
        @endforeach
          </tbody>
        </table>
        <div class="foot" id="foot" style="width:1000px;">
          <label style="margin-top:-8px;" class="fl select-all"><input type="checkbox" class="check-all check"  checked = true disabled />&nbsp;&nbsp;</label>
          <a class="fl delete" style="margin-top:8px;" id="deleteAll" href="javascript:;"></a>
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
      
  </div>
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
</div>
<script type="text/javascript">
function checkLength(which) {
  var maxChars = 50; //
  if(which.value.length > maxChars){
    alert("您出入的字数超多限制!");
    // 超过限制的字数了就将 文本框中的内容按规定的字数 截取
    which.value = which.value.substring(0,maxChars);
    return false;
  }else{
    var curr = maxChars - which.value.length; //250 减去 当前输入的
    document.getElementById("sy").innerHTML = curr.toString();
    return true;
  }
}
</script>
<script>
$(function(){
  $(':input').labelauty();
});
</script>
<!--友情链接-->
@include("home.base.bottom")