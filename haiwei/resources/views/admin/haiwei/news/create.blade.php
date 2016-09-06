@extends('admin.layouts.app')

@section('css')
    {{--<link rel="stylesheet" href="/assets/vendor/markdown/css/editormd.min.css"/>--}}
@endsection
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新增新闻内容</strong> /
                <small>Create NEWS</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">

                <form class="am-form" action="{{ route('haiwei.news.store') }}" method="post">
                    {!! csrf_field() !!}

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            新闻栏目
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <select data-am-selected="{btnWidth: '100%',  btnStyle: 'secondary', btnSize: 'sm', maxHeight: 360, searchBox: 1}"
                                    name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {!! indent_category($category->count) !!}{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            新闻标题
                        </div>
                        <div class="am-u-sm-8 am-u-md-4">
                            <input type="text" class="am-input-sm" name="title" value="{{old('title')}}">
                        </div>
                        <div class="am-hide-sm-only am-u-md-6">*必填</div>
                    </div>


                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            缩略图
                        </div>

                        <div class="am-u-sm-8 am-u-md-8 am-u-end col-end">
                            <div class="am-form-group am-form-file new_thumb">
                                <button type="button" class="am-btn am-btn-secondary am-btn-sm">
                                    <i class="am-icon-cloud-upload" id="loading"></i> 上传新的缩略图
                                </button>
                                <input type="file" id="thumb_upload">
                            </div>

                            <div class="select_thumb">
                                <button type="button" class="am-btn am-btn-success am-btn-sm" id="ck_thumb_upload">
                                    <i class="am-icon-search-plus"></i> 选择已存在的缩略图
                                </button>
                                <input type="hidden" name="thumb" value="{{old('thumb')}}">
                            </div>

                            <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed"/>

                            <div>
                                <img src="{{old('thumb')}}" id="img_show" style="max-height: 200px;">
                            </div>
                        </div>
                    </div>

                    <div class="am-g am-margin-top sort">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            描述信息
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <textarea rows="4" name="desc">{{old('desc')}}</textarea>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            置顶
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="radio" name="is_top" value="1" @if(old('is_top') == '1')) checked @endif> 是
                            <input type="radio" name="is_top" value="0" @if(!old('is_top') or old('is_top') =='0'))
                                   checked @endif> 否
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

                    <div class="am-g am-margin-top sort" >
                        <p>&nbsp;&nbsp;新闻内容</p>
                        <script id="container" name="content" type="text/plain" style="width:950px;height:300px;">
                                      <p>请在这里填写新闻内容</p>{{old('content')}}
                                    </script>
                    </div>

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


    <script src="/assets/vendor/ckfinder/ckfinder.js"></script>
    <script src="/assets/js/ck_upload.js"></script>

    <!-- 配置文件 -->
    <script type="text/javascript" src="/assets/vendor/ueditor1_4_3_3-utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/assets/vendor/ueditor1_4_3_3-utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>

   {{-- <script src="/assets/vendor/markdown/editormd.min.js"></script>
    <script src="/assets/js/editormd_config.js"></script>--}}


@endsection