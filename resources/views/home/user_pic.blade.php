@extends('home.base.user_base')

@section('content')

    <div class=" right_style r_user_style">
      <div class="user_Borders">
       <div class="title_name">
        <span class="name">个人信息设置</span>
       </div>
       <div class="about_user_info">
          <h3>文件上传</h3>
          <img src="{{asset('/uploads')}}/{{$list->pic}}" width="300px">
          @if(session('msg'))
          {{session('msg')}}
          @endif
        <form action='/home/mypic_upload' method='post' enctype='multipart/form-data'>
          <input type='hidden' name='_token' value='{{ csrf_token() }}'>
          <input type='hidden' name='id' value="{{session('homeuser')->id}}">
          文件：<input type='file' name='pic'>
          <input type='submit' value='上传'>
        </form>
       </div>
      </div>
    </div>
  </div>
@stop