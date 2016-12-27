@extends('admin.base.index')

@section('content')

<div class="row-fluid" style="margin-left:30px">
  <div class="widget widget-padding span12" style="margin-top:80px;margin-left:-20px;width:1013px">
    <div class="widget-header">
      <i class="icon-group"></i>
      <h5>商品管理</h5>
      <div class="widget-buttons">
          <!-- <a href="http://www.datatables.net/usage/" data-title="Documentation" class="tip" target="_blank"><i class="icon-external-link"></i></a> -->
          <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
      </div>
    </div>
    <div class="widget-body">
      @if (session('msg'))
          <div class="alert alert-success">
              {{ session('msg') }}
          </div>
      @endif
      <form action='/cates' method='post' name='myform'>
          <input type='hidden' name='_token' value='{{ csrf_token() }}'>
          <input type='hidden' name='_method' value='DELETE'>
      </form>
      <form action='/cates' method='get'>
          <div class='media-body'>
              <input type='text' class='form-control m-b-5' name='name'>
              <input type='submit' class='btn' value='搜索' style="margin-top:-10px">
          </div>

      </form>
      <table id="users" class="table table-striped table-bordered dataTable">
        <thead>
          <tr>
            <th>编号</th>
            <th>图片</th>
            <th>商品名称</th>
            <th>价格</th>
            <th>pid</th>
            <th>path</th>
            <th>状态</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          @foreach($list as $v)
          <tr>
            <td>{{ $v->Gid }}</td>
            <td><img alt="" width="200px"src="{{ asset('uploads')}}/{{$v->Gimage}}" /></td>
            <td>{{ $v->Gname }}</td>
            <td>{{ $v->Gpice }}</td>
            <td>{{ $v->Gpid }}</td>
            <td>{{ $v->Gpath }}</td>
            <td><a href="{{ url('admin/status').'/'.$v->Gid.'/'.$v->status }}" class="label label-success">{{ $v->status ==0?"上架":"下架" }}</a></td>
            <td>
                <a href="{{ url('admin/cates').'/'.$v->Gid }}/edit" class="btn btn-success">修改</a>
                <a href="javascript:doDel({{ $v->Gid }})" class="btn btn-danger">删除</a>
                <a href="{{ url('admin/catesSon').'/'.$v->Gid }}" class="btn btn-success">添加子版块</a>
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
      <script type="text/javascript">
              function doDel(Gid)
              {
                  if(confirm('确定要删除吗？')){
                      var form = document.myform;
                      form.action = '/admin/cates/'+Gid;
                      form.submit()
                  }
              }
      </script>
    </div> <!-- /widget-body -->
  </div> <!-- /widget -->
</div> <!-- /row-fluid -->

</div>
@stop
