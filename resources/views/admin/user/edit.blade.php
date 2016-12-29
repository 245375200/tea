@extends('admin.base.index')

@section('content')
  <div class="widget-header" style="width:1060px;margin-left:-20px">
    <i class="icon-list-alt"></i><h5>修改用户</h5>
    <div class="widget-buttons">
      <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
    </div>
  </div>
  <div class="widget-body" style="width:1060px;margin-left:-20px;height:548px;">
    <div class="widget-forms clearfix">
      <form class="form-horizontal" style="margin-top:100px;" method="post" action="{{ url('admin/demo').'/'.$users->id }}">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='hidden' name='_method' value='PUT'>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">用户名</label>
          <div class="controls">
            <input class="span4" name="username" type="text" value="{{ $users->username }}" style="margin-left:20px">
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
              <select tabindex="1" class="span4" name="sex" style="width:356px;margin-left:20px">
                 <option value="1" {{ $users->sex == 1?'selected':'' }}>男</option>
                 <option value="2" {{ $users->sex == 2?'selected':'' }}>女</option>
              </select>
           </div>
        </div> 
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">手机</label>
          <div class="controls">
            <input class="span4" name="phone" type="text" placeholder="请输入您的手机号" value="{{ $users->phone }}" style="margin-left:20px">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">邮箱</label>
          <div class="controls">
            <input class="span4" name="email" type="text" placeholder="请输入您的邮箱" value="{{ $users->email }}" style="margin-left:20px">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">权限</label>
            <div class="controls">
              <select tabindex="1" class="span4" name="level" style="width:356px;margin-left:20px;">
                 <option value="0" {{ $users->level == 0?'selected':'' }}>用户</option>
                 <option value="1" {{ $users->level == 1?'selected':'' }}>管理员</option>
              </select>
           </div>
        </div>
          <div class="controls">
             <button class="btn btn-primary span2" type="submit" style="margin-left:220px;">修改</button>
          </div>
        </div>
      </form>
  </div>
@stop