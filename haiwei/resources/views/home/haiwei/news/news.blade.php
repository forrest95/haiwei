@extends('home.haiwei.layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="home/css/news.css"/>
    @endsection
@section('content')
<!--主体开始-->
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 news_h1">
            <h1>新闻中心</h1>
        </div>
    </div>
    @foreach($xinwens as $xinwen)
    <div class="row news_list">
        <div class="col-md-5 col-sm-12 col-xs-12">
            <ul class="time">
                <li class="year">{{$xinwen->created_at->format('Y')}}</li>
                <li class="month">{{$xinwen->created_at->format('m-d')}}</li>
            </ul>
            <img class="img-responsive" src="{{$xinwen->thumb}}"/>
        </div>
        <div class="col-md-7  col-sm-12 col-xs-12">
            <h2>{{$xinwen->title}}</h2>
            <p>
                {{$xinwen->desc}}
            </p>
            <div id="btn"><a href="/news/{{$xinwen->id}}" target="_blank">查看详情</a></div>
        </div>
    </div>
    @endforeach

</div>
<!--主体结束-->
@endsection