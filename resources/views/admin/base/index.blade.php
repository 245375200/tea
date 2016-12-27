<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>网站后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bluth Company">
    <link rel="shortcut icon" href="assets/ico/favicon.html">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/alertify.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('http://fonts.useso.com/css?family=Open+Sans:400,700') }}" rel="stylesheet" type="text/css"> -->
    <link rel="Favicon Icon" href="favicon.ico">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrap">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <div class="logo"> 
            <img src="{{ asset('assets/img/logo.png') }}" alt="Realm Admin Template">
          </div>
           <a class="btn btn-navbar visible-phone" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
           <a class="btn btn-navbar slide_menu_left visible-tablet">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="top-menu visible-desktop">
            <ul class="pull-left">
              <li><a href="#"><i class="icon-envelope"></i> Messages</a></li>
              <li><a href="#"><i class="icon-globe"></i> Notifications</a></li>
            </ul>
            <ul class="pull-right">  
              <li><a href="{{ url('admin/logout') }}"><i class="icon-off"></i>退出</a></li>
            </ul>
          </div>

          <div class="top-menu visible-phone visible-tablet">
            <ul class="pull-right">  
              <li><a title="link to View all Messages page, no popover in phone view or tablet" href="#"><i class="icon-envelope"></i></a></li>
              <li><a title="link to View all Notifications page, no popover in phone view or tablet" href="#"><i class="icon-globe"></i></a></li>
              <li><a href="login.html"><i class="icon-off"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid">
     
      <!-- Side menu -->
      <div class="sidebar-nav nav-collapse collapse">
        <div class="user_side clearfix">
          <img src="{{ asset('assets/img/odinn.jpg') }}" alt="Odinn god of Thunder">
          <h5>admin</h5>
          <a href="#"><i class="icon-cog"></i> Settings</a>        
        </div>
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle active b_F79999" href="{{ url('/admin') }}"><i class="icon-dashboard"></i> <span>首页</span></a>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_C3F7A7 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1"><i class="icon-magic"></i> <span>用户管理</span></a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="{{ url('admin/demo') }}"><i class="icon-star"></i>用户列表</a>
                <a class="accordion-toggle" href="{{ url('admin/demo/create') }}"><i class="icon-list-alt"></i>添加用户</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse2"><i class="icon-reorder"></i> <span>商品管理</span></a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="{{ url('admin/cates') }}"><i class="icon-rss"></i> 商品列表</a>
                <a class="accordion-toggle" href="{{ url('admin/cates/create') }}"><i class="icon-calendar"></i> 添加商品</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse2"><i class="icon-reorder"></i> <span>轮播图管理</span></a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="{{ url('admin/figure') }}"><i class="icon-star"></i>轮播图列表</a>
                <a class="accordion-toggle" href="{{ url('admin/figure/create') }}"><i class="icon-list-alt"></i>添加轮播图</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse3"><i class="icon-reorder"></i> <span>评论管理</span></a>
            </div>
            <div id="collapse3" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="{{ url('/comments') }}"><i class="icon-star"></i>评论列表</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_C1F8A9" href="analytics.html"><i class="icon-bar-chart"></i> <span>Analytics</span></a>
            </div>
          </div> 
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6" href="tickets.html"><i class="icon-bullhorn"></i> <span>Support Tickets</span></a>
            </div>
          </div> 
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse5"><i class="icon-reorder"></i> <span>订单管理</span></a>
            </div>
            <div id="collapse5" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="{{ url('admin/order') }}"><i class="icon-star"></i>订单列表</a>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <!-- /Side menu -->

      <!-- Main window -->
      <div class="main_container" id="dashboard_page">
        <section id="content" class="container">
            @yield('content')
        </section>
      </div>
      <!-- /Main window -->
      
    </div><!--/.fluid-container-->
    </div><!-- wrap ends-->


    <!-- example modal -->
    <div id="example_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Support Ticket</h3>
      </div>
      <div class="modal-body">
        <p>Here you can view and manage this support ticket.</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
      </div>
    </div> 

    <!-- example modal -->
    <div id="example_modal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Example Modal</h3>
      </div>
      <div class="modal-body">
        <p>Here you can write more information about the object you clicked</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
      </div>
    </div> 



    <!-- task_modal modal -->
    <div id="task_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Task info example</h3>
      </div>
      <div class="modal-body">
        <div class="clearfix">
          <img src="{{ asset('assets/img/avatars/11.jpg') }}" class="img-circle" style="float: left; width: 65px; margin-right: 20px;">
           <h3 style="margin:0">John</h3>
           <p class="muted">Marketing</p>
        </div>
        <hr>
        <h5>Task</h5>
        <p>Create a marketing plan for the new campaign</p>
        <h5>status&nbsp;&nbsp;<small>60%</small></h5>
        <div class="progress">
          <div class="bar" style="width: 60%;"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </div> 



     <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/js/raphael-min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/js/sparkline.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/js/morris.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>   
     <script type="text/javascript" src="{{ asset('assets/js/jquery.masonry.min.js') }}"></script>   
     <script type="text/javascript" src="{{ asset('assets/js/jquery.imagesloaded.min.js') }}"></script>   
     <script type="text/javascript" src="{{ asset('assets/js/jquery.facybox.js') }}"></script>   
     <script type="text/javascript" src="{{ asset('assets/js/jquery.alertify.min.js') }}"></script> 
     <script type="text/javascript" src="{{ asset('assets/js/jquery.knob.js') }}"></script>
     <script type='text/javascript' src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
     <script type='text/javascript' src="{{ asset('assets/js/jquery.gritter.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/js/realm.js') }}"></script>
     <!-- // <script type="text/javascript" src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script> -->
  </body>
</html>
