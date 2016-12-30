@extends('admin.base.index')

@section('content')
    <div class="widget-header" style="margin-top:20px;width:1060px;margin-left:-22px">
              <i class="icon-group"></i>
              <h5>评论列表</h5>
              <div class="container-fluid">
              <div class="row-fluid">
                <div class="span12">
                  <form class="form-search" method="get" action="/comments"  style="margin-left:20px;margin-top:-10px;">
                    <input class="input-medium search-query" type="text" name="good_name" />
                    <button type="submit" class="btn">搜索</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
            <form action='/comments' method='post' name='myform'>
              <input type='hidden' name='_token' value='{{ csrf_token() }}'>
              <input type='hidden' name='_method' value='DELETE'>
            </form>
            <div class="widget-body" style="width:1060px;margin-left:-22px;height:670px">
              <table id="users" class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th style="width:60px;">编号</th>                   
                    <th style="width:100px;">商品名称</th>
                    <th style="width:80px">发贴人</th>
                    <th style="width:300px;text-align:center" >评论内容</th>
                    <th style="width:160px;">发帖时间</th>
                    <th style="width:80px;">状态</th>
                    <th style="text-align:center;">操作</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $v)
                  <tr>
                    <td>{{ $v->id }}</td>                  
                    <td>{{ $v->good_name }}</td>
                    <td>{{ $v->user_name }}</td>
                    <td style="overflow:break-all;">{{ $v->content }}</td>
                    <td>{{ $v->created_at }}</td>
                    <td><span class="label label-success" name="status" >{{ $v->status == 0?"显示":"隐藏" }}</span></td>
                    <td>
                        <a href="/comments/edit/{{ $v->status==0?'1':0 }}/{{$v->id}}" name="status" class="btn btn-success" >{{ $v->status == 0?"隐藏":"显示" }}</a>
                        <a href="javascript:doDel({{ $v->id }})" class="btn btn-danger">删除</a> 
                    </td>
                  </tr>
                  @endforeach      
                </tbody>
              </table>
               <div class="row-fluid" style="margin-left:550px;margin-top:-20px">
                <div class="span12">
                  <div class="pagination">
                   <!-- 显示分页，并带上附加搜索参数 -->
                  {{ $list->appends($where)->links() }}
                  </div>
                </div>
              </div>
            </div>
           
            <script type="text/javascript">
                function doDel(id)
                {
                  if(confirm('确定要删除吗？')){
                    var form = document.myform;
                    form.action = '/comments/'+id;
                    form.submit();
                  }
                }
            </script>  
@stop