@extends('admin.base.index')

@section('content')

<div class="main_container" id="forms_page">
    <div class="row-fluid">
    </div>
    <div class="row-fluid" style="margin-top:80px;margin-left:-240px;width:1200px">
        <div class="widget widget-padding span12">
            <div class="widget-header">
                <i class="icon-list-alt"></i><h5>添加子版块</h5>
                    <div class="widget-buttons">
                        <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
                    </div>
            </div>
            <div class="widget-body">
                <div class="widget-forms clearfix">
                    <form class="form-horizontal" action='{{ url("/admin/catesSon") }}' method="post">
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <div class="control-group">
                          <label class="control-label">父版块</label>
                            <div class="controls">
                                <input class="span7"  type="text" value="{{ $list->Gname }}" disabled >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">子版块</label>
                              <div class="controls">
                                  <input name="Gname" class="span7"  type="text">
                              </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">商品价格</label>
                            <div class="controls">
                                <input name="Gpice" class="span7"  type="text">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"></label>
                            <div class="controls">
                                <input name="Gpid" class="span7 pop" data-title="A popover for the input" data-content="Place some more information about the input here" type="hidden" value={{ $list->Gid }}>
                            </div>
                        </div>
                        <div class="control-group">
                          <div class="controles">
                            <input class="btn btn-primary" type="submit" style="width:350px;margin-left:220px;" value="添加">
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
