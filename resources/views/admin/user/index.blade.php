@extends('admin.base.index')

@section('content')
        <div class="row-fluid" style="width:1060px;margin-top:8px;margin-left:-22px;">
          <div class="widget widget-padding span12">
            <div class="widget-header">
              <i class="icon-group"></i>
              <h5>用户列表</h5>
              <div class="widget-buttons">
              <!-- <a href="http://www.datatables.net/usage/" data-title="Documentation" class="tip" target="_blank"><i class="icon-external-link"></i></a> -->
              <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
            </div>
            <div class="container-fluid">
              <div class="row-fluid" style="margin-left:15px;">
                <div class="span12">
                  <form class="form-search" method="get" action="{{ url('/admin/demo') }}">
                    <input class="input-medium search-query" type="text" name="username" />
                    <button type="submit" class="btn">搜索</button>
                  </form>
                </div>
              </div>
            </div>
            @if (session('msg'))
              <div class="alert alert-success">
                  {{ session('msg') }}
              </div>
            @endif
            <form action="{{ url('admin/demo')}}" method='post' name='myform'>
              <input type='hidden' name='_token' value='{{ csrf_token() }}'>
              <input type='hidden' name='_method' value='DELETE'>
            </form>  
            <div class="widget-body" style="height:520px">
              <table id="users" class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th style="width:80px;">编号</th>
                    <th style="width:80px;">用户名</th>
                    <th style="width:80px;">性别</th>
                    <th style="width:120px;">手机</th>
                    <th style="width:120px;">邮箱</th>
                    <th style="width:80px;">权限</th>
                    <th style="width:50px;">状态</th>
                    <th style="width:287px;text-align:center;">操作</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $v)
                    <tr>
                      <td>{{ $v->id }}</td>
                      <td>{{ $v->username }}</td>
                      <td>{{ $v->sex ==1?"男":"女" }}</td>
                      <td>{{ $v->phone }}</td>
                      <td>{{ $v->email }}</td>
                      <td>{{ $v->level == 0?"用户":"管理员" }}</td>
                      <td>{{ $v->status == 0?'正常':'锁定' }}</td>
                      <td>
                        <a href="{{ url('admin/demo').'/'.$v->id.'/edit' }}" class="btn btn-success">编辑</a>
                        <a href="{{ url('admin/demo1').'/'.$v->id.'/'.$v->status }}" class="btn btn-success">{{ $v->status ==0?"锁定":"解锁" }}</a>
                        <a href="javascript:doDel({{ $v->id }})" class="btn btn-danger">删除</a>                        
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="container-fluid">
              <div class="row-fluid" style="margin-left:550px;">
                <div class="span12">
                  <div class="pagination">
                   <!-- 显示分页，并带上附加搜索参数 -->
                  {{ $list->appends($where)->links() }}
                  </div>
                </div>
              </div>
            </div>
              <div class="container-fluid">             
              <script type="text/javascript">
                function doDel(id)
                {
                  if(confirm('确定要删除吗？')){
                    var form = document.myform;
                    form.action = '/admin/demo/'+id;
                    form.submit();
                  }
                }
              </script>
            </div> <!-- /widget-body -->
          </div> <!-- /widget -->
        </div> <!-- /row-fluid -->
    </div>
@stop