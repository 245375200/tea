@extends('admin.base.index')

@section('content')

<div class="main_container" id="forms_page">
    <div class="row-fluid">
    </div>
    <div class="row-fluid" style="margin-left:-247px;width:1060px">
        <div class="widget widget-padding span12">
            <div class="widget-header">
                <i class="icon-list-alt"></i><h5>添加商品</h5>
                    <div class="widget-buttons">
                        <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
                    </div>
            </div>
            <div class="widget-body" style="height:480px;">
                <div class="widget-forms clearfix">
                    <form class="form-horizontal" action='{{ url("/admin/cates") }}' method="post" name='myform' enctype='multipart/form-data'>
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <div class="control-group" style="margin-left:150px;">
                            <label class="control-label">商品名称</label>
                            <div class="controls">
                                <input name="Gname" class="span7"  type="text">
                            </div>
                        </div>
                        <div class="control-group" style="margin-left:150px;">
                            <label class="control-label">商品价格</label>
                            <div class="controls">
                                <input name="Gpice" class="span7"  type="text">
                            </div>
                        </div>
                        <div class="control-group" style="margin-left:150px;">
                            <label class="control-label">商品详情</label>
                            <div class="controls">
                                <input name="Gdetail" class="span7"  type="text">
                            </div>
                        </div>
                        <div class="control-group" style="margin-left:150px;">
                            <label class="control-label"></label>
                                <div class="controls">
                                    <input name="Gpid" class="span7 pop" data-title="A popover for the input" data-content="Place some more information about the input here" type="hidden" value=0>
                                </div>
                             </div>
                        </div>
                        <div class="control-group" style="margin-left:150px;">
                            <div class="controls">
                      			<input type='hidden' name='_token' value='{{ csrf_token() }}'>
                      			 <div style="margin-left:100px">
                      			  列表图片 <input type='file' name='Gpic' style="margin-left:20px">
                      			</div>
                            </div>
                        </div>
                        <div class="control-group" style="margin-left:150px;">
                            <div class="controls">
                      			<input type='hidden' name='_token' value='{{ csrf_token() }}'>
                      			<div style="margin-left:100px">
                      			  商品主图 <input type='file' name='Gimage' style="margin-left:20px">
                      			</div>
                            </div>
                        </div>
                        <div class="control-group" style="margin-left:150px;">
                            <div class="controls">
                                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                <div style="margin-left:100px">
                                  商品主图1 <input type='file' name='Gimage1' style="margin-left:14px">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                          <div class="controles">
                            <input class="btn btn-primary" type="submit" style="width:350px;margin-left:300px;" value="添加">
                          </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@stop
