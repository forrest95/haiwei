@extends('admin.layouts.app')
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改友情链接</strong> /
                <small>Edit Friendly Link</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">
                <form class="am-form" action="{{route('haiwei.link.update', $link->id)}}" method="post">
                    {!! csrf_field() !!}
                    {!! method_field('put') !!}
                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            友链名称
                        </div>
                        <div class="am-u-sm-8 am-u-md-4">
                            <input type="text" class="am-input-sm" name="name" value="{{$link->name}}">
                        </div>
                        <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            网址
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" class="am-input-sm" name="url" value="{{$link->url}}">
                        </div>

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
                                    <i class="am-icon-search-plus" id="loading"></i> 选择已存在的缩略图
                                </button>
                                <input type="hidden" name="thumb" value="{{$link->thumb}}">
                            </div>

                            <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />

                            <div>
                                <img src="{{$link->thumb}}" id="img_show" style="max-height: 200px;">
                            </div>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            是否显示
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <label class="am-radio-inline">
                                <input type="radio" value="1" name="is_show" @if($link->is_show) checked @endif> 是
                            </label>
                            <label class="am-radio-inline">
                                <input type="radio" value="0" name="is_show" @if(!$link->is_show) checked @endif> 否
                            </label>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            排序
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" class="am-input-sm" name="sort_order" value="{{$link->sort_order}}">
                        </div>
                    </div>

                    <div class="am-margin">
                        <button type="submit" class="am-btn am-btn-primary">提交保存</button>
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
@endsection