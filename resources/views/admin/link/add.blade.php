@extends('admin.base.index')

@section('content')
  <div class="widget-header" style="width:1060px;margin-left:-20px;">
    <i class="icon-list-alt"></i><h5>添加链接</h5>
    <div class="widget-buttons">
      <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"></a>
    </div>
  </div>
  <div class="widget-body" style="width:1060px;margin-left:-20px;height:548px;">
    <div class="widget-forms clearfix">
      <form class="form-horizontal" style="margin-top:20px;" method="post" action="{{ url('/Links') }}">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <!-- <div class="control-group">
          <label class="control-label">用户名</label>
          <div class="controls">
            <input class="span4" name="username" type="text" placeholder="请输入用户名">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">密码</label>
          <div class="controls">
            <input class="span4" name="password" type="password" placeholder="请输入密码">
          </div>
        </div> -->
        <div class="control-group" style="margin-top:200px;margin-left:140px;">
          <label class="control-label">链接地址</label>
          <div class="controls">
            <input class="span4" name="urL" type="text" placeholder="请输入链接名称">
          </div>
        </div>
        <div class="control-group" style="margin-left:140px;">
          <label class="control-label">链接名称</label>
          <div class="controls">
            <input class="span4" name="name" type="text" placeholder="请输入链接地址">
          </div>
        </div>
       
        <div class="control-group">
          <div class="controls" style="margin-left:280px;">
             <button class="btn btn-primary span2" type="submit" style="margin-left:70px;">添加</button>
          </div>
        </div>
      </form>
  </div>
@stop