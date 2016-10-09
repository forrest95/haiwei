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
  				<li class="back2"><a href="/products?category_id={{$product->category_id}}">产品中心</a></li>
  				<li class="active">EV71智能仪表</li>
			</ol>
        </div>
        
    	<div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12">
            	<h1>EV71智能仪表</h1>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details4/pic1.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center" style="margin:0px 0px 30px 0px;">
                电动汽车是汽车发展的未来趋势，相比于传统汽车，电动汽车的智能化程度更高，液晶仪表也会替代机械仪表成为标配，EV71智能仪表，可显示车速、灯光、等车辆行车信息。同时支持HUD及ADAS功能扩展。
				</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details4/icon/pic1.png"/>
                    <p class="text-center">多HMI联动</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details4/icon/pic2.png"/>
                    <p class="text-center">三维导航</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details4/icon/pic3.png"/>
                    <p class="text-center">窗口式娱乐投射</p>
                </div>
            </div>
        </div>
        <div class="row margin-top">
        	<div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details4/icon/pic4.png"/>
                    <p class="text-center">车况行车信息</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details4/icon/pic5.png"/>
                    <p class="text-center">HUD</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="border">
                	<img src="/home/images/product-details4/icon/pic6.png"/>
                    <p class="text-center">ADAS</p>
                </div>
            </div>
        </div>
     
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">车速表</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details4/pic2.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">显示当前车速</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">转速表</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details4/pic3.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">显示当前引擎转速</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">车况行车信息</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details4/pic4.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">行车电脑显示档位信息、小计里程、累计里程、续驶里程 、动力电池电压、动力电池电流、驱动电机转速、驱动电机温度等信息</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">LED指示灯</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details4/pic5.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">时时显示车身灯光</h2>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<h2 class="title">扬声器声音报警</h2>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<img class="img-responsive" style="margin:0 auto" src="/home/images/product-details4/pic6.png"/>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
            	<h2 class="text-center">左右转向提醒、危险警告报警、驾驶员安全带未系警告</h2>
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