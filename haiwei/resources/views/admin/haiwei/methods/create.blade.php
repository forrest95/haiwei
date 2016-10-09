@extends('admin.layouts.app')

@section('css')
    {{--<link rel="stylesheet" href="/assets/vendor/markdown/css/editormd.min.css"/>--}}
@endsection
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新增故障解决方法</strong> /
                <small>Create Methods</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">

                <form class="am-form" action="{{ route('haiwei.methods.store') }}" method="post">
                    {!! csrf_field() !!}

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            产品名称
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <select data-am-selected="{btnWidth: '100%',  btnStyle: 'secondary', btnSize: 'sm', maxHeight: 360, searchBox: 1}"
                                    name="product_id">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">
                                        {!! indent_category($product->count) !!}{{ $product->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            问题描述
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" class="am-input-sm" name="desc" value="{{old('desc')}}">
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            解决方法
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <textarea rows="4" name="method">{{old('method')}}</textarea>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            是否显示
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="radio" name="is_show" value="1"  checked> 是
                            <input type="radio" name="is_show" value="0">  否
                        </div>
                    </div>

                    <div class="am-g am-margin-top sort">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            排序
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" name="sort_order" class="am-input-sm" value="99">
                        </div>
                    </div>

                    {{-- <div class="am-g am-margin-top-sm">
                         <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                             文章内容
                         </div>
                     </div>

                     <div class="am-g am-margin-top-sm">
                         <div class="am-u-sm-12 am-u-md-12">
                             <div id="markdown">
                                 <textarea rows="10" name="content" style="display:none;">{{old('content')}}</textarea>
                             </div>
                         </div>
                     </div>--}}

                    {{--<div class="am-g am-margin-top sort" >
                        <p>&nbsp;&nbsp;新闻内容</p>
                        <script id="container" name="content" type="text/plain" style="width:90%;height:300px;">
                                      <p>请在这里填写新闻内容</p>{{old('content')}}
                                    </script>
                    </div>--}}

                    <div class="am-margin">
                        <button type="submit" class="am-btn am-btn-primary am-radius">提交保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="/assets/js/jquery.html5-fileupload.js"></script>
    <script src="/assets/js/upload.js"></script>
    <script src="/assets/js/uploadList.js"></script>
    <script src="/assets/vendor/ckfinder/ckfinder.js"></script>
    <script src="/assets/js/ck_upload.js"></script>

    <!-- 配置文件 -->
   {{-- <script type="text/javascript" src="/assets/vendor/ueditor1_4_3_3-utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/assets/vendor/ueditor1_4_3_3-utf8-php/ueditor.all.js"></script>--}}
    <!-- 实例化编辑器 -->
    {{--<script type="text/javascript">
        var ue = UE.getEditor('container', {
            allowDivTransToP: false
        });
    </script>--}}

   {{-- <script src="/assets/vendor/markdown/editormd.min.js"></script>
    <script src="/assets/js/editormd_config.js"></script>--}}


@endsection