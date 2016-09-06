<!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>海微科技后台管理系统</title>
    <meta name="description" content="海微科技">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    {{--<link rel="icon" type="image/png" href="/AmazeUI/assets/i/favicon.png">--}}
    <link rel="icon" type="image/png" href="/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="/AmazeUI/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/AmazeUI/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/AmazeUI/assets/css/admin.css">
    <link rel="stylesheet" href="/assets/css/my.css" />
    <link rel="stylesheet" href="/assets/css/xSystem.css" />
    {{--<link rel="stylesheet" href="/assets/vendor/daterangepicker/daterangepicker.css" />--}}
    @yield('css')
    <meta name="csrf-token" content="{{csrf_token()}}">

    <script src="/AmazeUI/assets/js/jquery.min.js"></script>


</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>海微科技</strong> <small>后台管理系统</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li>
                <div class="am-dropdown" data-am-dropdown style="line-height: 50px;">

                    <button class="am-selected-btn am-btn am-dropdown-toggle am-btn-sm am-btn-danger" data-am-dropdown-toggle> <span class="am-icon-caret-down"></span></button>
                    <ul class="am-dropdown-content">
                        @foreach($systems as $url=>$system)

                                <li><a href="/{{$url}}">{{$system}}</a></li>
                            </option>
                        @endforeach
                    </ul>
                </div>
            </li>
           {{-- <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>--}}
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span>{{ Auth::user()->name }} 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li>
                        <a href="/system/clear_cache">
                            <span class="am-icon-refresh am-icon-spin"></span>
                            清除缓存
                        </a>
                    </li>
                    <li><a href="/system"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="{{url('/admin/logout')}}"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
@include("admin.$_system._menu")
    <!-- sidebar end -->

    <!-- content start -->
@yield('content')
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>



<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/AmazeUI/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->

<!--<![endif]-->
<script src="/AmazeUI/assets/js/amazeui.min.js"></script>
<script src="/AmazeUI/assets/js/app.js"></script>
<script src="/assets/js/laravel.js"></script>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $(function(){

       //下拉列表
       var system='{{$_system}}';  //取得当前是哪个系统
//       alert(system)
       var button_text=$('a[href="/{{$_system}}"]').eq(0).text();
       var html='<span class="am-icon-caret-down"></span>';
       $('.am-btn-danger').text(button_text).append(html);

       $('.am-dropdown-content').children().click(function(){

           $(this).addClass('am-active').siblings().removeClass('am-active');

       })


       //侧边栏点击样式改变

       $('.admin-sidebar-list').children().click(function(){
           $(this).siblings().children().removeClass('am-active');
           $(this).children().addClass('am-active');
       })
   })

</script>

@yield('js')
</body>
</html>
