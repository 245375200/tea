@extends('home.base.user_base')

@section('content')

    <div class=" right_style r_user_style">
      <div class="user_Borders">
       <div class="title_name">
        <span class="name">个人信息</span>
       </div>
       <div class="about_user_info"> 
       <div class="user_layout">
         <ul >
          
         <sapn style="font-size:30px;">用户昵称：{{$list->username}}</sapn><br>
         <sapn style="font-size:30px;">用户性别：{{$list->sex==1?'男':'女'}}</sapn><br>
          
         <sapn style="font-size:30px;"> 手&nbsp;机&nbsp;号：</label>{{$list->phone}}</sapn><br>
         <sapn style="font-size:30px;"> 邮箱地址：{{$list->email}} </sapn>        
         </ul>
         </div>
         
       </div>
      </div>
    </div>

  </div>
  <h2 class="user_title_name" style="font-size:20px;margin-left:440px;">修改信息</h2>
     <div class="about_user_info" style="margin-left:200px;">

       <form id="form1" name="form1" method="post" action="{{ url('/home/user_infoupdate') }}">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$list->id}}"> 
       <div class="user_layout">
         <ul >
          <li><label class="user_title_name">用户昵称：</label><input name="username" type="text"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">用户性别：</label>               
                <label class="sex"> <input type="radio" name="sex" value="1" id="RadioGroup1_0" /><span>男</span></label>
                <label class="sex"><input type="radio" name="sex" value="2" id="RadioGroup1_1" /><span>女</span></label> 
                <i>*</i>         
          </li>
          <li><label class="user_title_name">手&nbsp;机&nbsp;号：</label><input name="phone" type="text"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">邮箱地址：</label><input name="email" type="text"  class="add_text"/><i>*</i></li>         
         </ul>
         <div class="operating_btn"><input  type="submit" value="提交"  class="submit—btn"/></div>
         </div>
          </form>
       </div>
      </div>
@stop