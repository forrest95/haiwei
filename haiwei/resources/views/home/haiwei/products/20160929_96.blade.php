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
  				<li class="active">智云功能盒</li>
			</ol>
        </div>
        
    	<div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12">
            	<h1>智云功能盒</h1>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details6/pic1.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details6/icon/pic1.png"/>
                    <p class="text-center">远程掌握车况</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details6/icon/pic2.png"/>
                    <p class="text-center">远程设定目的地</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details6/icon/pic3.png"/>
                    <p class="text-center">移动行车管理</p>
                </div>
            </div>
        </div>
     
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">智云功能盒</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details6/pic2.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">
                智云功能盒可实现车机导航功能，另提供GPRS上网功能，与智驾云APP配合使用，可将车辆信息实时上传云后台，用户通过智驾云APP，即可远程查看车实时位置、行驶数据等相关信息，并可远程进行目的地设定，拓展车内传统导航系统使用局限，提升用户体验。
				</h2>
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
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details6/pic3.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">远程查看当前车况、实时掌握车辆信息</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">行程信息</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details6/pic4.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">随时查看历史行程，自动保存加油记录</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">远程目的地设定</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details6/pic5.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">支持车辆防盗及紧急救援，支持远程设定导航目的地</h2>
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