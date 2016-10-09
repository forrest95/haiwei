@extends('home.haiwei.layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="/home/css/news-details.css"/>
    @endsection
    @section('content')
    
    <!--主体开始-->
    <div class="container main">
    	<div class="row">
    		<ol class="breadcrumb">
  				<li><a href="/">首页</a></li>
  				<li><a href="/news">新闻中心</a></li>
  				<li class="active">正文</li>
			</ol>
        </div>
        
        <div class="row">
          {!! $xinwen->content !!}
        </div>
    </div>
    <!--主体结束-->
@endsection

@section('js')
    <script>
        returnTop();
    </script>
    @endsection
    
