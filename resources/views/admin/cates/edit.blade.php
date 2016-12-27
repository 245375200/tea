@extends('admin.base.index')

@section('content')

<div class="main_container" id="forms_page" style="">
    <div class="row-fluid">
    </div>
    <div class="row-fluid" style="margin-top:80px;margin-left:-240px;width:1200px">
        <div class="widget widget-padding span12">
            <div class="widget-header">
                <i class="icon-list-alt"></i><h5>修改商品</h5>
                    <div class="widget-buttons">
                        <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
                    </div>
            </div>
            <div class="widget-body">
                <div class="widget-forms clearfix">
                    <form class="form-horizontal" action='{{ url("/admin/cates")."/".$cates->Gid }}' method="post">
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <input type='hidden' name='_method' value='PUT'>
                        <div class="control-group">
                            <label class="control-label">商品名称</label>
                                <div class="controls">
                                    <input name="Gname" class="span7"  type="text" placeholder="You can't type anything…" value="{{ $cates->Gname }}">
                                </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">商品价格</label>
                              <div class="controls">
                                  <input name="Gpice" class="span7 tip" type="text"  value="{{ $cates->Gpic }}">
                              </div>
                        </div>
                        <div class="control-group">
                              <div class="controls">
                                <button class="btn btn-primary" type="submit" style="width:350px;margin-left:30px;">修改</button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="row-fluid">

    </div>
</div>
</div>
@stop
