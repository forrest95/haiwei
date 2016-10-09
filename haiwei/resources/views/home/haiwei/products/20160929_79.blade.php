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
  				<li class="active">大众GPS导航娱乐系统</li>
			</ol>
        </div>
        
    	<div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12">
            	<h1>大众GPS导航娱乐系统</h1>
            </div>
            <!--<div class="col-md-1">
            </div>-->
            <div class="col-md-12">
            	<img class="img-responsive" style="margin:0 auto 5%;border-radius:5px;" src="/home/images/product-details3/pic1.png"/>
            </div>
            <!--<div class="col-md-1">
            </div>-->
        </div>
        <div class="row">
        	<div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details3/icon/pic1.png"/>
                    <p class="text-center">大众原装风格</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details3/icon/pic2.png"/>
                    <p class="text-center">倒车影像</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details3/icon/pic3.png"/>
                    <p class="text-center">3D实景导航</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details3/icon/pic4.png"/>
                    <p class="text-center">影音娱乐</p>
                </div>
            </div>
        </div>
        <div class="row margin-top">
        	<div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details3/icon/pic5.png"/>
                    <p class="text-center">收音机</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details3/icon/pic6.png"/>
                    <p class="text-center">蓝牙电话</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details3/icon/pic7.png"/>
                    <p class="text-center">车辆信息</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
            	<div class="border">
                	<img src="/home/images/product-details3/icon/pic8.png"/>
                    <p class="text-center">个性系统设置</p>
                </div>
            </div>
        </div>
     
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">收音机</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details3/pic2.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">波段AM531~1602KHZ和FM87.5~108.0MHZ切换</h2>
                <h2 class="text-center">自动依据当前GPS定位信息来确定所在城市，自动显示出电台频点对应的电台名称</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">多媒体</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details3/pic3.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">支持CD/DVD、SD卡、USB、外接音频、蓝牙音乐播放源模式</h2>
                <h2 class="text-center">可播放MP3、WMA压缩音频格式及WAV、FLAC、APE无损音频格式；可播放MPEG2</h2>
                <h2 class="text-center">MPEG4、H264、AVI等常见视频格式，最大可支持1080P 60MBps码流</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">导航地图</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details3/pic4.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">系统自带导航外，支持TF存储卡启动第三方导航程序</h2>
                <h2 class="text-center">大众原车风格，支持白天黑夜模式自动切换</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">车辆信息</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details3/pic5.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">通过车身CAN-Bus获取并显示当前车辆的剩余油量、电池电压、车外温度、安全带、驻车制动、清洗液、瞬时里程、总里程以及车门状态信息</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <p id="btn" class="text-center">产品手册下载</p>
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