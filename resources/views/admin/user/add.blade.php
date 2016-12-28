@extends('admin.base.index')

@section('content')
  <div class="widget-header" style="width:1060px;margin-left:-20px">
    <i class="icon-list-alt"></i><h5>添加用户</h5>
    <div class="widget-buttons">
      <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
    </div>
  </div>
  <div class="widget-body" style="width:1060px;margin-left:-20px;height:548px">
   @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <div class="widget-forms clearfix">
      <form class="form-horizontal" style="margin-top:40px;" method="post" action="{{ url('/admin/demo') }}">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">用户名</label>
          <div class="controls">
            <input class="span4" name="username" type="text" placeholder="请输入用户名" style="margin-left:20px">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">密码</label>
          <div class="controls">
            <input class="span4" name="password" type="password" placeholder="请输入密码" style="margin-left:20px">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">性别</label>
            <div class="controls">
              <select tabindex="1" class="span4" name="sex" style="width:356px;margin-left:20px;">
                 <option value="1">男</option>
                 <option value="2">女</option>
              </select>
           </div>
        </div> 
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">手机</label>
          <div class="controls">
            <input class="span4" name="phone" type="text" placeholder="请输入您的手机号" style="margin-left:20px"> 
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">邮箱</label>
          <div class="controls">
            <input class="span4" name="email" type="text" placeholder="请输入您的邮箱" style="margin-left:20px">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">权限</label>
            <div class="controls">
              <select tabindex="1" class="span4" name="level" style="width:356px;margin-left:20px" >
                 <option value="0">用户</option>
                 <option value="1">管理员</option>
              </select>
           </div>
        </div>       
        <div class="control-group">
          <div class="controls">
             <button class="btn btn-primary span2" type="submit" style="margin-left:220px;margin-top:20px;">添加</button>
          </div>
        </div>
      </form>
  </div>
@stop