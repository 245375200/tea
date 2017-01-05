<!DOCTYPE html>
<html class="null">
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shopping-mall-index.css') }}" />
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/zhonglin.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/zhongling2.js') }}"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=high-dpi">
    <script type="text/javascript">
    if (screen.width < 360) {
        var mvp = document.getElementById('viewport');
        mvp.setAttribute('content','width=360, initial-scale=0.87, minimum-scale=0.87, maximum-scale=0.87, user-scalable=no, target-densitydpi=high-dpi');
    }
    
    /****************************************/
    /*页面开始加载前的时间，用于统计页面加载时间。放置于最前以保证准确性。
    /****************************************/
    var STARTTIME=new Date().getTime();
    </script>

    <link href="{{ asset('Css/lid_min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('Css/lid_zuk_min.css') }}" rel="stylesheet" type="text/css"/>
    
    <style type="text/css">
    </style>
</head>
<body class="register">

<!-- ldHeader -->
<div id="ldHeader" class="ldHeader">
    <div class="cont clearfix">
        <div class="fleft">
            <a href=""><img src="{{ asset('images/paylogo.jpeg') }}"></a>
        </div>
        </div>
</div>

<!-- /ldHeader -->
<div class="cont clearfix">
	<div class="fmain">
	<!-- ldregisthd -->
	

<div class="ldRegist" id="ldRegist">
    <input type="hidden" class="jsPath" value="/wauthen3">
	
	
	<div class="hd">
		<!-- 手机号注册 -->
		<span class="normal active jsRegMobileTab"><a href="javascript:void(0);" style = "font-size:30px;colcor:red;">支付</a></span>
		<!-- 邮箱注册 -->
		
	</div>
</div>
	<!-- /ldregisthd -->
	<!-- ldRegistMobileForm -->
		


<div class="ldRegistMobileForm" id="ldRegistMobileForm">
       <div class="pay-info">
        	<div class="info-tit">
            	<h3>输入卡号</h3>
            </div>
            <div class="pay-kahao">
            	<input type="text" placeholder="请输入银行卡号或支付宝账号"/>
                
            </div>
        </div>
    	<div class="pay-info">
        	<div class="info-tit">
            	<h3 style="color:red;">输入您的支付密码   你在安全的环境中，请放心使用！</h3>
            </div>
            <div class="pay-mima">
            	
                <div class="mima-ipt">
                	<p>支付宝或银行卡密码：</p>
                    <input type="text" style="border-left:1px solid #E5E5E5;" /><input type="text" /><input type="text" /><input type="text" /><input type="text" /><input type="text" />
                    <span>请输入6位数字支付密码</span>
                </div>
               
        <form   action = "/home/sucesspay" method = "post">

                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                @foreach($row as $k=>$v)
                <input type = "hidden" name = "row[]" value = "{{$row[$k]}}">
                @endforeach
                @foreach($id as $k=>$v)
                <input type = "hidden" name = "cartid[]" value = "{{$id[$k]}}">
                @endforeach
               <input type = "submit" class="mima-btn" style="background-color:#0097FA;" value = "立即支付">
            </form>

            </div>
        </div>
    </div>
	<script type="text/javascript" src="Scripts/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Scripts/lid_min.js"></script>    
<script>
$(document).ready(function(e){
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?dd563cd2e3ebf51875f7a58ad5ad8e6f";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();


    var pageId = '';
        pageId = "AccountRegister";      
    

    /****************************************/
    /*配置及初始化
    /****************************************/
        var avatar=window.Avatar||[];
        window.Avatar=avatar;
        avatar.push({
        startTime:STARTTIME   //统计加载时间
        ,pageId:pageId
        ,appKey:'Z508CSNJ71W7' //标识被统计的应用
        //,events:{click:{list:Clicks, remover:RemoveClick}}
        ,init:function(){//页面初始化完成后发送统计前调用，通常用于设置额外的参数，而这些参数又需要Avatar的辅助
        //Avatar.setOption('PVInfo', {ref:Avatar.getProperty("ref")+'^'+Avatar.getProperty("pref")});
        Avatar.setOption('PVInfo', {times:Avatar.getProperty('nps')});
    }
    });
        /****************************************/
        /*加载Avatar
         /****************************************/
        var scriptTag = document.createElement('script');
        scriptTag.type = 'text/javascript';
        scriptTag.async = true;//异步的方式保证不阻塞页面；
        scriptTag.src = "https://passport.lenovomobile.com/wauthen3/wauth/js/avatar_zuk.js?v=1.0.0.1";
        var head=document.getElementsByTagName("head")[0]||document.documentElement;
        head.insertBefore(scriptTag, head.firstChild);


});


</script>
</div>
</div>
</div>
<!-- ldFooter -->
<div class="ldFooter">
    <span>Copyright &copy;2016 巴山集团,All Rights Reserved 版权所有 京ICP备15007699号-4 京公网安备 11010802017522 京网文(2015)0191-121号&nbsp;&nbsp;
        <a target="_blank" href="javascript:void(0);">使用条款</a>和<a target="_blank" href="javascript:void(0);">隐私权政策</a></span>  
</div>
	
<!-- /ldFooter -->

</body>
</html>