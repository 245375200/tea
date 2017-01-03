@extends('admin.base.index')

@section('content')
	<div class="widget-header" style="width:1060px;margin-top:20px;margin-left:-18px">
    <i class="icon-list-alt"></i><h5>添加图片</h5>
    <div class="widget-buttons">
      <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
    </div>
  </div>
  <div class="widget-body" style="width:1060px;margin-left:-18px;height:500px">
    <div class="widget-forms clearfix">
      <form class="form-horizontal" style="margin-top:90px;" method="post" action="{{ url('admin/figure') }}" enctype='multipart/form-data'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">商品ID</label>
          <div class="controls">
            <input class="span4" name="good_Gid" type="text" style="margin-left:20px">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">商品名称</label>
          <div class="controls">
            <input class="span4" name="good_Gname" type="text" style="margin-left:20px">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" style="margin-left:140px">图片</label>
          <div class="controls">
            <input name="pic" type="file" style="margin-left:20px">
          </div>
        </div>       
        <div class="control-group">
          <div class="controls">
             <button class="btn btn-primary span2" type="submit" style="margin-left:220px;">添加</button>
          </div>
        </div>
      </form>
  </div>
@stop