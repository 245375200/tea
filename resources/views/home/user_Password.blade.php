@extends('home.base.user_base')
@section('content')
    <!--右侧样式-->
    <div class="right_style r_user_style user_right">
      <div class="user_Borders">     
       <div class="title_name">
        <span class="name">修改密码</span>
       </div>
       <!--修改密码样式-->
       <div class="about_user_info">
       
       <div class="user_layout">
         <ul >
         <form  method="post" action="{{ url('/home/password') }}"> 
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{session()->get('homeuser.id')}}">
          <li><label class="user_title_name">原密码：</label><input name="" type="password"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">新密码：</label><input name="password" type="password"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">确认新密码：</label><input name="rpassword" type="password"  class="add_text"/><i>*</i></li>         
         </ul>
         <div class="operating_btn"><input name="name" type="submit" value="确认"  class="submit—btn"/></div>
         </div>
        </form>
        
       </div>
      </div>
    </div>
  </div>
</div>
@stop