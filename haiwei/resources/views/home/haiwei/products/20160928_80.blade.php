<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>产品中心详情-HW</title>
    <link href="/home/css/bootstrap.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="/home/images/logo_icon.ico"/>
    <link rel="stylesheet" type="text/css" href="/home/css/product-details.css"/>
  </head>
  <body>
  	<!--顶部开始-->
	<div class="container top">
  		<div class="row top_row">
        	<div class="col-xs-6">
            	<img src="/home/images/logo.png"/>
            </div>
            <div class="col-xs-6">
                <ul>
                	<li class="lianxi">联系方式</li>
                    <li class="haoma">027-59905050</li>
                </ul>
                <img class="top_call" src="/home/images/call.png"/>
            </div>
        </div>
	</div>
    <!--顶部结束-->
    
    <!--导航开始-->
    <nav class="nav_shuxing navbar navbar-inverse">
        <div class="container nav_padding">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav nav_list">
                    <li class="{{$_index or ''}}"><a href="/">首页</a></li>
                    <li class="{{$_news or ''}}"><a href="/news">新闻中心</a></li>
                    <li class="{{$_product or ''}}"><a href="/products">产品中心</a></li>
                    <li class="{{$_solution or ''}}"><a href="/solutions">解决方案</a></li>
                    <li class="{{$_service or ''}}"><a href="/services">服务支持</a></li>
                    <li class="{{$_about or ''}}"><a href="/abouts">关于海微</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航结束-->
    
    <!--主体开始-->
    <div class="container detail">
    	<div class="row">
    		<ol class="breadcrumb">
  				<li><a href="/">首页</a></li>
  				<li class="back"><a href="/products?category_id={{$product->category_id}}">产品中心</a></li>
  				<li class="active">智能互联导航盒</li>
			</ol>
        </div>
        
    	<div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12">
            	<h1>智能互联导航盒（Android）</h1>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details/pic1.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
        	<div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details/icon/pic1.png"/>
                    <p class="text-center">巅峰配置</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details/icon/pic2.png"/>
                    <p class="text-center">定制系统</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details/icon/pic3.png"/>
                    <p class="text-center">3D实景导航</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details/icon/pic4.png"/>
                    <p class="text-center">手机互联</p>
                </div>
            </div>
        </div>
        <div class="row margin-top">
        	<div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details/icon/pic5.png"/>
                    <p class="text-center">云语音识别</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details/icon/pic6.png"/>
                    <p class="text-center">高清影音</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details/icon/pic7.png"/>
                    <p class="text-center">在线应用</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details/icon/pic8.png"/>
                    <p class="text-center">WIFI上网</p>
                </div>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">高清影音</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" src="/home/images/product-details/pic2.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">支持APE、FLAC等无损音频播放</h2>
                <h2 class="text-center">支持最高1080P视频流畅播放</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">本地/在线导航</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details/pic3.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">内置易图通15Q1最新地图，提供1年内免费升级</h2>
                <h2 class="text-center">支持安装百度、高德、腾讯等第三方导航软件</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">手机互联</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details/pic4.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">支持Android USB、Android Wifi、iPhone Wifi映射</h2>
                <h2 class="text-center">无需安装任何APP即可映射手机音视频、导航等功能</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">语音识别</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details/pic5.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">使用百度云语音识别，依托在线云计算提供更好识别</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">应用市场</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details/pic6.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">自建应用市场，所有APP经严格审查后上架，避免恶意扣费，适配车机横向屏幕</h2>
                <h2 class="text-center">应用涵盖在线导航、天气、新闻、音乐、视频、查违章等常用功能</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        {{--<p id="btn" class="text-center"><a href="/system/down_file?url={{$product->product_manual}}">产品手册下载</a></p>
        <p id="btn2" class="text-center"><a href="/system/down_file?url={{$product->install_manual}}">安装手册下载</a></p>--}}

        <p id="btn" class="text-center">产品手册下载</p>
        <p id="btn2" class="text-center">安装手册下载</p>
    </div>
    <!--主体结束-->
    
    <!--底部开始-->
    <div>
    	<p class="text-center copyright">Copyright © 2012-2016 武汉海微科技有限公司 版权所有</p>
    </div>
    <a href="#" class="cd-top">Top</a><!--返回顶部-->
    <!--底部结束-->
    <script src="/home/js/jquery-2.0.3.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/returnTop.js"></script>
    <script src="/home/js/back.js"></script>
    <script>
		returnTop();
       //下载文件
        $(function(){
            //点击下载产品手册
            $('#btn').click(function(){
                window.location.href="/system/down_file?url={{$product->product_manual}}";
            })

            //点击下载安装手册
            $('#btn2').click(function(){
                window.location.href="/system/down_file?url={{$product->install_manual}}";
            })
        })

	</script>
  </body>
</html>