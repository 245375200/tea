@extends('home.base.user_base')
@section('content')
    <script src="Threelinkage/kit.js"></script>
		<!--[if IE]>
		<script src="Threelinkage/ieFix.js"></script>
		<![endif]-->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-30210234-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
		<script src="Threelinkage/dom.js"></script>
		<script src="Threelinkage/event.js"></script>
        <script src="Threelinkage/math.js"></script>
		<script src="Threelinkage/TreeDict.js"></script>
		<script src="Threelinkage/form.js"></script>
		<script src="Threelinkage/combobox.js"></script>
		<script src="Threelinkage/suggestselect.js"></script>
		<script src="Threelinkage/list.js"></script>
		<!--json data-->
		<script src="Threelinkage/json-data.js" charset="utf-8"></script>
    <!--右侧内容样式-->
    <div class="right_style r_user_style">
      <div class="user_Borders">
       <div class="title_name">
        <span class="name">地址管理</span>
       </div>
       <div class="about_user_info">
         <form id="form1" name="form1" method="post" action="/home/add_address"> 
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="user_id" value="{{session('homeuser')->id}}"> 
       <div class="user_layout" style="width:400px;">
         <ul>
          <li class="li"><label class="user_title_name">收件人姓名：</label><input name="consignee" type="text" class="add_text"><i>*</i></li>
          <li class="li">
          <div class="select">
          <span class="li"><label> 省份 </label><input type="text" name="province" ></span>
          <span class="li"><label> 市/县 </label><input type="text" name="city"></span>
          <span class="li"><label> 区/县 </label><input type="text" name="district" ></span>
            <i>*</i>
		</div>   
        </li >
          <li class="li"><label class="user_title_name">收货地址：</label><input name="address" type="text" class="add_text"><i*</i></li>
          <li class="li"><label class="user_title_name">邮&nbsp;&nbsp;&nbsp;&nbsp;编：</label><input name="postcode" type="text" class="add_text"><i>*</i></li>
          <li class="li"><label class="user_title_name">手&nbsp;机&nbsp;号：</label><input name="tel" type="text" class="add_text"><i>*</i></li>
         </ul>
         <div class="operating_btn"><input  type="submit" value="确认" class="submit—btn"></div>
         </div>
          </form>       
       </div>
       <!--地址列表-->
       <div class="Address_List">
        <div class="title_name"><span class="name">用户地址列表</span></div>
        <div class="list">
         <table>
         <thead>
          <td class="list_name_title0">收件人姓名</td>
          <td class="list_name_title1">地区</td>
          <td class="list_name_title2">邮编</td>
          <td class="list_name_title3">电话</td>
          <td class="list_name_title4">收货地址</td>
          <td class="list_name_title5">操作</td>
         </thead>        
        @foreach($list as $v)
          <tr>
              <td>{{$v->consignee}}</td>
              <td>{{$v->province}}{{$v->city}}{{$v->district}}</td>
              <td>{{$v->postcode}}</td>
              <td>{{$v->tel}}</td>
              <td>{{$v->address}}</td>
              <td><a href="/home/deladress/{{$v->id}}">删除</a></td>
          </tr>
        @endforeach
         </table>
        </div>
       </div>
      </div>
   </div>
 </div>
</div>
@stop
  <script>
			var a = $kit.els8cls($kit.ui.Form.ComboBox.Select.defaultConfig.transformCls), a1 = [];
			for(var i = 0; i < a.length; i++) {
				a1.push(a[i])
			}
			a = a1;
			var b1 = new $kit.ui.Form.ComboBox.Select({
				el : a[0],
				data : (function() {
					var provTreeDict = new TreeDict();
					for(var prov in chinaJSON) {
						provTreeDict.ad(prov, prov);
					}
					return provTreeDict;
				})()
			});
			b1.transform();
			b1.ev({
				ev : 'change',
				fn : function() {
					var prov = chinaJSON[b1.inputEl.value];
					if(prov == null) {
						return;
					}
					var cityTree = new TreeDict();
					for(var city in prov) {
						cityTree.ad(city, city);
					}
					b2.inputEl.value = '';
					b2.formEl.value = '';
					b2.config.data = cityTree;
					b2.list.buildList(cityTree.search(''));
				}
			});
			var b2 = new $kit.ui.Form.ComboBox.Select({
				el : a[1],
				data : undefined
			});
			b2.transform();
			b2.ev({
				ev : 'change',
				fn : function() {
					var city = chinaJSON[b1.inputEl.value][b2.inputEl.value];
					if(city == null) {
						return;
					}
					var districtTree = new TreeDict();
					for(var district in city) {
						districtTree.ad(district, city[district]);
					}
					b3.inputEl.value = '';
					b3.formEl.value = '';
					b3.config.data = districtTree;
					b3.list.buildList(districtTree.search(''));
				}
			});
			var b3 = new $kit.ui.Form.ComboBox.Select({
				el : a[2],
				data : undefined
			});
			b3.transform();

		</script>