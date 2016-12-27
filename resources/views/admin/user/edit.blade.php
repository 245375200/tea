@extends('admin.base.index')

@section('content')
  <div class="widget-header" style="width:700px;margin-top:80px;margin-left:27px">
    <i class="icon-list-alt"></i><h5>修改用户</h5>
    <div class="widget-buttons">
      <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
    </div>
  </div>
  <div class="widget-body" style="width:700px;margin-left:27px;">
    <div class="widget-forms clearfix">
      <form class="form-horizontal" style="margin-top:20px;" method="post" action="{{ url('/demo'.'/'.$users->id.'') }}">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='hidden' name='_method' value='PUT'>
        <div class="control-group">
          <label class="control-label">用户名</label>
          <div class="controls">
            <input class="span4" name="username" type="text" value="{{ $users->username }}">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">密码</label>
          <div class="controls">
            <input class="span4" name="password" type="password" placeholder="请输入密码">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">性别</label>
            <div class="controls">
              <select tabindex="1" class="span4" name="sex" style="width:356px">
                 <option value="{{ $users->sex }}">男</option>
                 <option value="{{ $users->sex }}">女</option>
              </select>
           </div>
        </div> 
        <div class="control-group">
          <label class="control-label">手机</label>
          <div class="controls">
            <input class="span4" name="phone" type="text" placeholder="请输入您的手机号" value="{{ $users->phone }}">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">邮箱</label>
          <div class="controls">
            <input class="span4" name="email" type="text" placeholder="请输入您的邮箱" value="{{ $users->email }}">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">权限</label>
            <div class="controls">
              <select tabindex="1" class="span4" name="level" style="width:356px">
                 <option value="{{ $users->level }}">用户</option>
                 <option value="{{ $users->level }}">管理员</option>
              </select>
           </div>
        </div>
          <div class="controls">
             <button class="btn btn-primary span2" type="submit" style="margin-left:70px;">修改</button>
          </div>
        </div>
      </form>
  </div>
@stop