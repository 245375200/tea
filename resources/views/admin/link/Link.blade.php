@extends('admin.base.index')

@section('content')
        <div class="row-fluid" style="margin-left:-25px;margin-top:80px;">
          <div class="widget widget-padding span12">
            <div class="widget-header">
              <i class="icon-group"></i>
              <h5>友情链接</h5>
              <div class="widget-buttons">
                 
              </div>
            </div>  
            
					
			<form class="form-search" method="get" action="/Links">
                &nbsp;&nbsp;&nbsp;&nbsp;<input class="input-medium search-query" type="text" name="name" />
                <button type="submit" class="btn">搜索</button>
              </form>

           <form action='/Links' method='post' name='myform'>
              <input type='hidden' name='_token' value='{{ csrf_token() }}'>
              <input type='hidden' name='_method' value='DELETE'>
               <div class="widget-body">
              <table id="users" class="table table-striped table-bordered dataTable">
                <thead>
				
				          <tr>      
                    <th>序号</th>
                    <th>链接名称</th>
                    <th>url</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>
				    @foreach ($list as $v)
                  <tr>
                    <td>{{$v->id}}</td>
                    <td>{{$v->name}}</td>
                    <td>{{$v->url}}</td>

                    <!-- <td>
							|
						<a href="/stu/{{ $v->id }}/edit">修改</a>
					</td> -->
					     <td>
                 <span >
      							<a href="javascript:doDel({{ $v->id }})"><button type="button" class="btn btn-primary btn-lg">删除</button>&nbsp;&nbsp;</a>
      							<a href="/Links/{{ $v->id }}/edit"><button type="button" class="btn btn-danger">修改</button>&nbsp;&nbsp;</a>
      							<a href="/Links/create"><button type="button" class="btn btn-primary btn-lg">添加</button>

  	                    

               </span>
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
     </form>
              <script type="text/javascript">
                function doDel(id)
                {
                  if(confirm("你确定要删除吗？")){
                    var form = document.myform;
                    form.action = '/Links/'+id;
                    form.submit();
                  }
                }
              </script>

			  
            </div> <!-- /widget-body -->
          </div> <!-- /widget -->
        </div> <!-- /row-fluid -->

    </div>
@stop