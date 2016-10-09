@extends('home.haiwei.layouts.app')

        @section('css')
            <link rel="stylesheet" type="text/css" href="home/css/home.css"/>
        @endsection
@section('content')

        <!--轮播图开始-->
<div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="/home/images/banner/1.png"/>
        </div>
        <div class="item">
            <img src="/home/images/banner/2.png"/>
        </div>
        <div class="item">
            <img src="/home/images/banner/3.png"/>
        </div>
        <div class="item">
            <img src="/home/images/banner/4.png"/>
        </div>
        <div class="item">
            <img src="/home/images/banner/5.png"/>
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <!--<a class="carousel-control left" href="#myCarousel"
    data-slide="prev">&lsaquo;
    </a>
    <a class="carousel-control right" href="#myCarousel"
    data-slide="next">&rsaquo;
    </a> -->
</div>
<div class="hr"></div>
<!--轮播图结束-->

<!--列表开始-->
<div class="list container">
    <div class="row">
        <div class="col-md-4">
            <div class="item">
                <h4>
                    <span class="item_icon1"><img src="/home/images/item1.png"></span>
                    <span class="cn"><strong>公司动态</strong></span>
                    <span class="virgule">/</span>
                    <span class="en">Company Dynamic</span>
                    <a class="more" href="/abouts" target="_blank">more</a>
                </h4>
                <div class="item_wrap">
                    <a href="/abouts/#section-3" target="_blank">
                        <div class="col-lg-6 col-xs-6">
                            <img class="img-responsive" src="/home/images/list/list1.png"/>
                        </div>
                        <p class="col-lg-6 col-xs-6">
                            专属于魅爵的百人研发团队以实体化形式成立，专注于中国汽车电子，专注于车规级导航娱乐产品的研发。
                        </p>
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="/abouts/#section-3" target="_blank">魅爵荣获“2013年度地图导航定位产品推荐产品”证书</a>
                        <!--<span>2016/08/26</span>-->
                    </li>
                    <li>
                        <a href="/abouts/#section-3" target="_blank">魅爵荣获2013年汽车电子十大优秀品牌奖</a>
                        <!--<span>2016/08/26</span>-->
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="item">
                <h4>
                    <span class="item_icon2"><img src="/home/images/item2.png"></span>
                    <span class="cn"><strong>新品发布</strong></span>
                    <span class="virgule">/</span>
                    <span class="en">New Product Release</span>
                    <a class="more" href="/products" target="_blank">more</a>
                </h4>
                <div class="item_wrap">
                    <a href="/products/{{$products[0]->html_id}}" target="_blank">
                        <div class="col-lg-6  col-xs-6">
                            <img class="img-responsive" src="{{$products[0]->small_thumb}}"/>
                        </div>
                        <p class="col-lg-6  col-xs-6">
                            {{$products[0]->desc}}
                        </p>
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="/products/{{$products[1]->html_id}}" target="_blank">{{$products[1]->title}}</a>
                        <!--<span>2016/08/26</span>-->
                    </li>
                    <li>
                        <a href="/products/{{$products[2]->html_id}}" target="_blank">{{$products[2]->title}}</a>
                        <!--<span>2016/08/26</span>-->
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="item">
                <h4 class="item_h4">
                    <span class="item_icon3"><img src="/home/images/item3.png"></span>
                    <span class="cn"><strong>行业动态</strong></span>
                    <span class="virgule">/</span>
                    <span class="en">Industry Dynamic</span>
                    <a class="more" href="/news" target="_blank">more</a>
                </h4>
                <div class="item_wrap">
                    <a href="/news/{{$xinwens[0]->id}}" target="_blank">
                        <div class="col-lg-6 col-xs-6">
                            <img class="img-responsive" src="{{$xinwens[0]->small_thumb}}"/>
                        </div>
                        <p class="col-lg-6 col-xs-6">
                            {{mb_substr($xinwens[0]->desc,0,54)}}..
                        </p>
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="/news/{{$xinwens[1]->id}}" target="_blank">{{$xinwens[1]->title}}</a>
                        <!--<span>2016/08/26</span>-->
                    </li>
                    <li>
                        <a href="/news/{{$xinwens[2]->id}}" target="_blank">{{$xinwens[2]->title}}</a>
                        <!--<span>2016/08/26</span>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--列表结束-->

<div class="footer container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="info1">
                    <li class="strong">关于海微</li>
                    <li><a href="about.html#section-2" target="_blank">核心团队</a></li>
                    <li><a href="about.html#section-3" target="_blank">发展历程</a></li>
                    <li><a href="about.html#section-4" target="_blank">联系我们</a></li>
                </ul>
                <ul class="info2">
                    <li class="strong">联系我们</li>
                    <li>地址：武汉市东湖开发区武大园东路</li>
                    <li class="indent">武大航域二区B3栋15楼</li>
                    <li>电话：027-59905050</li>
                </ul>
            </div>
            <div class="code col-md-6">
                <a class="email" href="http://qiye.163.com/login/" target="_blank">邮箱登录</a>
                <img class="img-responsive" src="/home/images/2code.png"/>
            </div>
        </div>
    </div>
</div>
    @endsection