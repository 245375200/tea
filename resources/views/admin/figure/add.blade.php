@extends('admin.base.index')

@section('content')
	<div class="widget-header" style="width:700px;margin-top:80px;margin-left:27px">
    <i class="icon-list-alt"></i><h5>添加图片</h5>
    <div class="widget-buttons">
      <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
    </div>
  </div>
  <div class="widget-body" style="width:700px;margin-left:27px;">
    <div class="widget-forms clearfix">
      <form class="form-horizontal" style="margin-top:20px;" method="post" action="{{ url('admin/figure') }}" enctype='multipart/form-data'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <div class="control-group">
          <label class="control-label">商品ID</label>
          <div class="controls">
            <input class="span4" name="good_Gid" type="text">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">商品名称</label>
          <div class="controls">
            <input class="span4" name="good_Gname" type="text">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">图片</label>
          <div class="controls">
            <input name="pic" type="file">
          </div>
        </div>       
        <div class="control-group">
          <div class="controls">
             <button class="btn btn-primary span2" type="submit" style="margin-left:70px;">添加</button>
          </div>
        </div>
      </form>
  </div>
@stop