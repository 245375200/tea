@extends('admin.base.index')

@section('content')
  <div class="widget-header" style="width:700px;margin-top:80px;margin-left:27px">
    <i class="icon-list-alt"></i><h5>修改链接</h5>
    <div class="widget-buttons">
      <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
    </div>
  </div>
  <div class="widget-body" style="width:700px;margin-left:27px;">
    <div class="widget-forms clearfix">
      <form class="form-horizontal" style="margin-top:20px;" method="post" action='/Links/{{ $link->id}}'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='hidden' name='_method' value='PUT'>
        <div class="control-group">
          <label class="control-label">链接名称</label>
          <div class="controls">
            <input class="span4" name="name" type="text" placeholder="请输入用户名" value="{{ $link->name }}">
          </div>

        </div>
        <div class="control-group">
          <label class="control-label">链接地址</label>
          <div class="controls">
            <input class="span4" name="url" type="text" placeholder="请输入链接地址" value="{{ $link->url }}">
          </div>
        </div>
       
        
       

          <div class="controls">
             <button class="btn btn-primary span2" type="submit" style="margin-left:70px;">&nbsp;&nbsp;&nbsp;修改</button>
          </div>
        </div>
      </form>
  </div>
@stop