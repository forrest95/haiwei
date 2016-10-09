@extends('home.haiwei.layouts.app')

    @section('css')
    <link rel="stylesheet" type="text/css" href="home/css/product.css"/>
    @endsection

@section('content')
        <!--主体开始-->
<div class="container tab_wrap">
    <div class="row tab">
        <div class="col-md-12">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="tab1"><a href="#">车载导航</a></li>
                <li role="presentation" class="tab2"><a href="#">智能仪表</a></li>
                <li role="presentation" class="tab3"><a href="#">车载附件</a></li>
            </ul>
        </div>
    </div>

    <div id="box-wrap" >
        <div class="row">
            @foreach($products1 as $product)
            <div class="col-md-3 box">
                <a href="/products/{{$product->html_id}}" target="_blank">
                    <div class="box_wrap">
                        <div>
                            <img class="imgresponsive" src="{{$product->thumb}}"/>
                        </div>
                        {{--<p>产品名称：{{$product->name}}</p>
                        <p>生产日期：{{$product->product_time}}</p>--}}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div id="box-wrap2">
        <div class="row">
            @foreach($products2 as $product)
            <div class="col-md-3 box">
                <a href="/products/{{$product->html_id}}" target="_blank">
                    <div class="box_wrap">
                        <div>
                            <img class="imgresponsive" src="{{$product->thumb}}"/>
                        </div>
                        <!--<p>产品名称：EV71智能仪表</p>
                        <p>生产日期：2016年8月29日</p>-->
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div id="box-wrap3">
        <div class="row">
            @foreach($products3 as $product)
                <div class="col-md-3 box">
                    <a href="/products/{{$product->html_id}}" target="_blank">
                        <div class="box_wrap">
                            <div>
                                <img class="imgresponsive" src="{{$product->thumb}}"/>
                            </div>
                            <!--<p>产品名称：EV71智能仪表</p>
                            <p>生产日期：2016年8月29日</p>-->
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</div>
<!--主体结束-->

<a href="#0" class="cd-top">Top</a><!--返回顶部-->
    @endsection


  @section('js')
      <script src="/home/js/product.js"></script>
      <script>
          $(function(){
              function GetQueryString(name)
              {
                  var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
                  var r = window.location.search.substr(1).match(reg);
                  if(r!=null)return  unescape(r[2]); return null;
              }

              var category_id=GetQueryString('category_id');
              if(category_id==null){
                  category_id=1;
              }
              console.log(category_id);
              if(category_id==3){
                  $('.tab3').addClass('active').siblings().removeClass('active');
                  $('#box-wrap').hide();
                  $('#box-wrap2').hide();
                  $('#box-wrap3').show();
                  return false;
              }
              if(category_id==2){
                  $('.tab2').addClass('active').siblings().removeClass('active');
                  $('#box-wrap2').show();
                  $('#box-wrap3').hide();
                  $('#box-wrap').hide();
                  return false;
              }
              if(category_id==1){
                  $('.tab1').addClass('active').siblings().removeClass('active');
                  $('#box-wrap2').hide();
                  $('#box-wrap3').hide();
                  $('#box-wrap').show();
              }
          })

      </script>
      @endsection