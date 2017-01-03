@extends('admin.base.index')

@section('content')
  <head>
    
    <meta charset='utf-8'>
      <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/alertify.css') }}" rel="stylesheet">
      <style>
          .file {
              position: relative;
              display: inline-block;
              background: #D0EEFF;
              border: 1px solid #99D3F5;
              border-radius: 4px;
              padding: 4px 12px;
              overflow: hidden;
              color: #1E88C7;
              text-decoration: none;
              text-indent: 0;
              line-height: 20px;
          }
          .file input {
              position: absolute;
              font-size: 100px;
              right: 0;
              top: 0;
              opacity: 0;
          }
          .file:hover {
              background: #AADFFD;
              border-color: #78C3F3;
              color: #004974;
              text-decoration: none;
          }


      </style>
  </head>
    <div class="row-fluid" style="width:1060px;margin-left:-20px;margin-top:80px;">
          <div class="widget widget-padding span12">
            <div class="widget-header">
              <i class="icon-group"></i>
              <h5>网站logo</h5>
              <div class="widget-buttons">
                 
              </div>
            </div>  
            <!--  <button class="btn" type="button">按钮</button> -->
          </div>
    </div>
  <body>

          
             <!--  <h3>文件上传</h3>
              {{--<form action="{{url('admin/upload')}}" method='post' enctype='multipart/form-data'>--}}
                {{--<input  class="btn" type='hidden' name='_token' value='{{ csrf_token() }}'>--}}
                文件：<input type='file' name='mypic'>
                <input class="btn" type='submit' value='上传'>

                  <button class="btn" type="button" >首页</button></a>
              </form> -->

              <!-- <div class="container-fluid">
                <div class="row-fluid">
                  <div class="span12">
                    {{--<img alt="140x140" width="200px"src="{{ asset('uploads')}}/{{$list->logo}}" />--}}
                  </div>
                </div>
              </div> -->
             <div  style="margin-left:-24px;width:1060px;">
                  <table id="users" class="table table-striped table-bordered dataTable">
                    <thead>
                      <tr>
                        <th style="width:90px;text-align:center;">标题</th>
                        <th style="width:90px;text-align:center;">描述</th>
                        <th style="width:90px;text-align:center;">尺寸</th>
                        <th style="width:90px;text-align:center;">logo</th>
                        <th style="width:90px;text-align:center;">status</th>
                        <th style="width:90px;text-align:center;">编号</th>                 
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                         
                            <td style="text-align:center;line-height:60px;">网站logo</td>
                            <td style="text-align:center;line-height:60px;">logo</td>
                            <td style="text-align:center;line-height:60px;">400*400</td>
                            {{--@if (!empty($list->logo))--}}
                                <td style="text-align:center;line-height:60px;"><img src="{{ asset('uploads')}}/{{ $list->logo }}" alt="" width="100px; "></td>
                            {{--@else (echo "<script>alert('图片不能为空');</script>";)--}}
                            <td style="text-align:center;line-height:60px;">{{$list->status}}</td>
                            <td style="text-align:center;line-height:60px;">{{$list->id}}</td>
                           {{--<!--  <td style="text-align:center;line-height:60px;">{{$list->id}}</td> -->--}}
                                {{--@endif--}}
                        </tr>
                    </tbody>
                  </table>

               </div> <!-- /widget -->

    
          <div class="widget-forms clearfix" align="center">
              <form class="form-horizontal" style="margin-top:20px;" method="post" action="{{ url('admin/upload') }}" enctype='multipart/form-data'>
                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
               
                <div class="control-group">
                 <!--  <label class="control-label">图片</label> -->
                    <a href="javascript:;" class="file">选择文件
                        <input type="file" name="mypic" id="">

                    </a>

                  {{--<div class="class">--}}
                    {{--<input name="mypic" type="file">--}}
                  {{--</div>--}}
                </div>       
                <div class="control-group"  >
                      <div class="controls">
                      <button class="btn btn-primary span2" style="margin-left:360px;" type="submit" >添加</button>
                      </div>
                </div>
              </form>
          </div>
    
  
  </body>


@stop