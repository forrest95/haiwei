<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>武汉海微科技有限公司</title>
    <link href="/home/css/bootstrap.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="/home/images/logo_icon.ico"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>
<body data-spy="scroll" data-target="#myScrollspy">
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
@yield('content')

<!--底部开始-->
@include('home.haiwei.layouts._footer')
<!--底部结束-->
<script src="/home/js/jquery-2.0.3.js"></script>
<script src="/home/js/bootstrap.min.js"></script>
<script src="/home/js/home.js"></script>
<script src="/home/js/returnTop.js"></script>
<script>
    returnTop();
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
@yield('js')
</body>
</html>