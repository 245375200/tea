@extends('admin.base.index')

@section('content')
  <head>
    
    <meta charset='utf-8'>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/alertify.css') }}" rel="stylesheet">
  </head>
  <div class="row-fluid" style="margin-left:-25px;margin-top:80px;">
          <div class="widget widget-padding span12">
            <div class="widget-header">
              <i class="icon-group"></i>
              <h5>网站logo</h5>
              <div class="widget-buttons">
                 
              </div>
            </div>  
            <!--  <button class="btn" type="button">按钮</button> -->
          
      <html>
  
  <body>
    <h3>文件上传</h3>
    <form action="{{url('admin/upload')}}" method='post' enctype='multipart/form-data'>
      <input  class="btn" type='hidden' name='_token' value='{{ csrf_token() }}'>
      文件：<input type='file' name='mypic'>
      <input class="btn" type='submit' value='上传'>

        <button class="btn" type="button" >首页</button></a>
    </form>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <img alt="140x140" width="200px"src="{{ asset('uploads')}}/{{$list->logo}}" />
        </div>
      </div>
    </div>


    
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12 column">
          
          </form>
         
        </div>
      </div>
    </div>
  
  </body>

</html>
              
     
               
                
          
        
    
      

        
            </div> <!-- /widget-body -->
          </div> <!-- /widget -->
        </div> <!-- /row-fluid -->

    </div>
@stop