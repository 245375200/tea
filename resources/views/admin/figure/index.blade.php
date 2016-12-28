@extends('admin.base.index')

@section('content')
	<div class="row-fluid" style="width:1060px;margin-top:20px;margin-left:-18px">
          <div class="widget widget-padding span12">
            <div class="widget-header">
              <i class="icon-group"></i>
              <h5>轮播图列表</h5>
              <div class="widget-buttons">
            </div>
            <form action="{{ url('amdin/figure') }}" method='post' name='myform'>
              <input type='hidden' name='_token' value='{{ csrf_token() }}'>
              <input type='hidden' name='_method' value='DELETE'>
            </form>  
            <div class="widget-body" style="height:570px">
              <table id="users" class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th style="width:80px;text-align:center;">编号</th>
                    <th style="width:80px;text-align:center;">商品ID</th>
                    <th style="width:100px;text-align:center;">图片</th>
                    <th style="width:90px;text-align:center;">商品名称</th>
                    <th style="width:150px;text-align:center;">操作</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $v)
                    <tr>
                      <td style="text-align:center;line-height:60px;">{{ $v->id }}</td>
                      <td style="text-align:center;line-height:60px;">{{ $v->Gid }}</td>
                      <td style="text-align:center;line-height:60px;"><img src="{{ asset('uploads')}}/{{ $v->pic }}" alt="" width="100px;"></td>
                      <td style="text-align:center;line-height:60px;">{{ $v->good_Gname }}</td>
                      <td style="text-align:center;line-height:60px;">
                        <a href="javascript:doDel({{ $v->id }})" class="btn btn-danger">删除</a>                        
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="container-fluid">             
              <script type="text/javascript">
                function doDel(id)
                {
                  if(confirm('确定要删除吗？')){
                    var form = document.myform;
                    form.action = '/admin/figure/'+id;
                    form.submit();
                  }
                }
              </script>
            </div> <!-- /widget-body -->
          </div> <!-- /widget -->
        </div> <!-- /row-fluid -->
    </div>
@stop