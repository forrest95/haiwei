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
  				<li><a href="/products?category_id={{$product->category_id}}">产品中心</a></li>
  				<li class="active">AVM360全景环视系统</li>
			</ol>
        </div>
        
    	<div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12">
            	<h1>3D-360全景环视系统</h1>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details7/pic1.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2>
                AVM360全景环视系统通过分别安装在车身之前、后、左、右的超广角摄像头；实时采集车辆周围的影像，经过图像处理单元对四个摄像头采集到的原始图像进行矫正、拼接、视角变换后，形成一幅从上往下的全景俯视画面；并实时传送到位于车载导航显示器上显示。驾驶员通过显示器画面即可轻松观察到车辆所处位置以及车辆周围的情况，从容操控车辆泊车入位、避开障碍物或通过复杂路面，有效减少刮蹭、碰撞、陷落等事故的发生。
				</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details7/icon/pic1.png"/>
                    <p class="text-center">高清摄像头</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details7/icon/pic2.png"/>
                    <p class="text-center">全数字信号传输</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details7/icon/pic3.png"/>
                    <p class="text-center">3D碗状无缝拼接</p>
                </div>
            </div>
        </div>
     
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">真实拍摄四周影像</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details7/pic2.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">真实拍摄四周影像</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">高速校正畸变影像</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details7/pic3.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">高速校正畸变影像</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">影像无缝拼接</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details7/pic4.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">影像无缝拼接</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">技术介绍</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2>
                AVM360全景环视系统通过分别安装在车身之前、后、左、右的超广角摄像头；实时采集车辆周围的影像，经过图像处理单元对四个摄像头采集到的原始图像进行矫正、拼接、视角变换后，形成一幅从上往下的全景俯视画面；并实时传送到位于车载导航显示器上显示。驾驶员通过显示器画面即可轻松观察到车辆所处位置以及车辆周围的情况，从容操控车辆泊车入位、避开障碍物或通过复杂路面，有效减少刮蹭、碰撞、陷落等事故的发生。
				</h2>
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