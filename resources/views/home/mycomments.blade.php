@extends('home.base.user_base')
@section('content')
    <!--右侧内容样式-->
     <div class="right_style r_user_style">
      <div class="user_Borders">
      <div class="title_name">
        <span class="name">用户评价管理</span>
       </div>
       <!--积分样式-->
       <div class="user_integral_style slideTxtBox">
         <div class="hd">
          <ul>
           <li>我的评价</li>
          </ul>
         </div>
         <div class="bd">
           <ul>
            <div class="Integral_Number"><em></em></div>
            <table>
             <thead>
               <tr>
                <td>标题</td>
                <td>评价内容</td>
                <td>评价时间</td>
                <td>删除</td>
               </tr>
             </thead>
             <tbody>
             @foreach($list as $v)
              <tr>
                   <td>{{$v->good_name}}</td>
                   <td>{{$v->content}}</td>
                   <td>{{$v->created_at}}</td>
                   <td><a href="/home/delcomments/{{$v->id}}">删除</a></td>
               
              </tr>
              @endforeach
             </tbody>
            </table>
           </ul>
         </div>
       </div>
       <script>jQuery(".slideTxtBox").slide({trigger:"click"});</script>
      </div>
     </div>    
  </div>
</div>
@stop