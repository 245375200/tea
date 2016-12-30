@extends('admin.base.index')

@section('content')

<div class="row-fluid" style="margin-left:30px">
  <div class="widget widget-padding span12" style="margin-left:-52px;width:1060px">
    <div class="widget-header">
      <i class="icon-group"></i>
      <h5>商品管理</h5>
      <div class="widget-buttons">
          <!-- <a href="http://www.datatables.net/usage/" data-title="Documentation" class="tip" target="_blank"><i class="icon-external-link"></i></a> -->
          <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
      </div>
    </div>
    <div class="widget-body" style="height:1130px;">
      @if (session('msg'))
          <div class="alert alert-success">
              {{ session('msg') }}
          </div>
      @endif
      <form action="{{ url('admin/cates') }}" method='post' name='myform'>
          <input type='hidden' name='_token' value='{{ csrf_token() }}'>
          <input type='hidden' name='_method' value='DELETE'>
      </form>
      <form action="{{ url('admin/cates') }}" method='get'>
          <div class='media-body'>
              <input type='text' class='form-control m-b-5' name='Gname'>
              <input type='submit' class='btn' value='搜索' style="margin-top:-10px">
          </div>
      </form>
      <table id="users" class="table table-striped table-bordered dataTable">
        <thead>
          <tr>
            <th style="text-align:center;width:70px;">编号</th>
            <th style="width:100px;text-align:center;">图片</th>
            <th style="text-align:center;width:100px;">商品名称</th>
            <th style="text-align:center;">价格</th>
            <!-- <th style="text-align:center;">pid</th> -->
            <th style="text-align:center;">path</th>
            <th style="text-align:center;">详细</th>
            <th style="text-align:center;">活动</th>
            <th style="text-align:center;">状态</th>
            <th style="text-align:center;">操作</th>
          </tr>
        </thead>
        <tbody>
          @foreach($list as $v)
          <tr>
            <td style="text-align:center;">{{ $v->Gid }}</td>
            <td style="text-align:center;"><img src="{{ asset('uploads')}}/{{ $v->Gpic }}" width="60px" /></td>
            <td style="text-align:center;">{{ $v->Gname }}</td>
            <td style="text-align:center;">{{ $v->Gpice }}</td>
            <!-- <td style="text-align:center;">{{ $v->Gpid }}</td> -->
            <td style="text-align:center;">{{ $v->Gpath }}</td>
            <td style="text-align:center;width:180px;">{{ $v->Gdetail }}</td>
            <td style="text-align:center;width:100px;">
              <option value="0">{{ $v->level ==0?"正常商品":"" }}</option>
              <option value="1">{{ $v->level ==1?"热销产品":"" }}</option>
              <option value="2">{{ $v->level ==2?"新品推荐":"" }}</option>
              <option value="3">{{ $v->level ==3?"限时促销":"" }}</option>
            </td>
            <td style="text-align:center;">{{ $v->status ==0?"上架":"下架" }}</td>
            <td style="text-align:center;">
                <a href="{{ url('admin/cates').'/'.$v->Gid }}/edit" class="btn btn-success">修改</a>
                <a href="{{ url('admin/status').'/'.$v->Gid.'/'.$v->status }}" class="btn btn-success">{{ $v->status ==0?"下架":"上架" }}</a>
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
