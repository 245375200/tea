@extends('admin.base.index')

@section('content')
  <div class="widget-header" style="width:700px;margin-top:80px;margin-left:27px">
    <i class="icon-list-alt"></i><h5>网站</h5>
    <div class="widget-buttons">
      <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
    </div>
  </div>

  <div class="widget-body" style="width:700px;margin-left:27px;">
    <div class="widget-forms clearfix">
      <form class="form-horizontal" style="margin-top:20px;" method="post" action='/Conf/{{ $conf->id}}'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='hidden' name='_method' value='PUT'>
        <div class="control-group">
          <label class="control-label">网站标题</label>
          <div class="controls">
            <input class="span4" name="title" type="text"  value="{{ $conf->title }}">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">网站描述</label>
          <div class="controls">
            <input class="span4" name="description" type="text"  value="{{ $conf->description }}">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">网站关键字</label>
          <div class="controls">
            <input class="span4" name="keyword" type="text"  value="{{ $conf->keyword }}">
          </div>
        </div>
        <div>
            


        </div>
        <div class="control-group">
          &nbsp;&nbsp;&nbsp;&nbsp;<label class="control-label">网站开关&nbsp;</label>
          <div class="btn-group">
              
               <div class="radio">
                <label>
                  <input type="radio" name="status" id="optionsRadios1" value="{{ $conf->status =='1'?'2':'1'}}" checked>
                 开
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="status" id="optionsRadios2" value="{{ $conf->status =='1'?'2':'1'}}">
                  关
                </label>
              </div>
              <!--  <select class="form-control" name="status">
                  <option value="{{ $conf->status =='1'?'2':'1'}}">{{ $conf->status ==1?"关闭":"开启"}}</option>
                  <option value="{{ $conf->status }}">{{ $conf->status ==1?"开启":"关闭"}}</option>
                
                </select> -->
               <!-- <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
               <span class="caret"></span></button>
              <ul class="dropdown-menu">
                      <li>
                         <a href="#">打开</a>
                      </li>
                      <li>
                         <a href="#">关闭</a>
                      </li>
    
                      <li class="divider">
                    </li>
       
                  
              </ul> -->
            </div>
          
        </div>
        
       
        <div class="control-group">
          <div class="controls">
             <button class="btn btn-primary span2" type="submit" style="margin-left:70px;">提交</button>
          </div>
        </div>
      </form>
  </div>
@stop