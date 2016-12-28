@extends('admin.base.index')

@section('content')
	 <div class="widget-header" style="margin-top:20px;width:1060px;margin-left:-18px">
              <i class="icon-group"></i>
              <h5>订单列表</h5>
              <div class="container-fluid">
              <div class="row-fluid">
                <div class="span12">
                  <form class="form-search" method="get" action="{{ url('/admin/order') }}"  style="margin-left:20px">
                    <input class="input-medium search-query" type="text" name="user" />
                    <button type="submit" class="btn">搜索</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
            <form action="{{ url('/admin/order') }}" method='post' name='myform'>
              <input type='hidden' name='_token' value='{{ csrf_token() }}'>
              <input type='hidden' name='_method' value='DELETE'>
            </form>
            <div class="widget-body" style="width:1060px;margin-left:-18px;height:500px">
              <table id="users" class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th style="width:60px;">编号</th>                   
                    <th style="width:100px;">用户名</th>
                    <th style="width:120px">订单编号</th>
                    <th style="width:80px;text-align:center">订单数量</th>
                    <th style="width:80px;">金额</th>
                    <th style="width:80px;">应付金额</th>
                    <th style="width:240px;">收货地址</th>
                    <th style="width:120px;">订单状态</th>                   
                    <th style="width:140px;text-align:center;">操作</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $v)
                  <tr>
                    <td>{{ $v->id }}</td>                  
                    <td>{{ $v->user }}</td>
                    <td>{{ $v->order_num }}</td>
                    <td>{{ $v->order_number }}</td>
                    <td>{{ $v->pay }}</td>
                    <td>{{ $v->pay_total }}</td>
                    <td>{{ $v->address }}</td>
                    <td>{{ $v->pay_status ==0?"未付款":"已付款" }},{{ $v->order_status ==0?"未发货":"已发货" }}</td>
                    <td>
                        <a href="javascript:doDel({{ $v->id }})" class="btn btn-danger">移除</a> 
                    </td>
                  </tr>
                  @endforeach      
                </tbody>
              </table>
               <div class="row-fluid" style="margin-left:550px;margin-top:-20px">
                <div class="span12">
                  <div class="pagination">
	                  <!-- 显示分页,并带上搜索 -->
	                 {{ $list->appends($where)->links() }}
                  </div>
                </div>
              </div>
            </div>
           
            <script type="text/javascript">
                function doDel(id)
                {
                  if(confirm('确定要移除订单吗？')){
                    var form = document.myform;
                    form.action = '/admin/order/'+id;
                    form.submit();
                  }
                }
            </script>  
@stop