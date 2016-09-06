@extends('admin.layouts.app')

@section('css')
@endsection
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新增新闻栏目</strong> /
                <small>Create A New Category</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">

                <form class="am-form" action="{{ route('haiwei.category.store') }}" method="post">
                    {!! csrf_field() !!}

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            上级分类
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <select data-am-selected="{btnWidth: '100%',  btnStyle: 'secondary', btnSize: 'sm', maxHeight: 360, searchBox: 1}"
                                    name="parent_id">
                                <option value="0">顶级分类</option>
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
                            分类名称
                        </div>
                        <div class="am-u-sm-8 am-u-md-4">
                            <input type="text" class="am-input-sm" name="name">
                        </div>
                        <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
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
                                <input type="hidden" name="thumb">
                            </div>

                            <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />

                            <div>
                                <img src="" id="img_show" style="max-height: 200px;">
                            </div>
                        </div>
                    </div>

                    {{--<div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            描述信息
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <textarea rows="4" name="desc"></textarea>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            栏目类型
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <label class="am-radio-inline">
                                <input type="radio" value="1" name="type"> 封面
                            </label>
                            <label class="am-radio-inline">
                                <input type="radio" value="2" name="type" checked> 列表
                            </label>
                            <label class="am-radio-inline">
                                <input type="radio" value="3" name="type"> URL跳转
                            </label>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            URL跳转地址
                        </div>
                        <div class="am-u-sm-8 am-u-md-4  am-u-end col-end">
                            <input type="text" class="am-input-sm" name="url" placeholder="如果选择了URL跳转,请填写地址~">
                        </div>
                    </div>--}}

                    <div class="am-g am-margin-top sort">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            排序
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" name="sort_order" class="am-input-sm" value="99">
                        </div>
                    </div>


                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            是否显示
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <label class="am-radio-inline">
                                <input type="radio" value="1" name="is_show" checked> 是
                            </label>
                            <label class="am-radio-inline">
                                <input type="radio" value="0" name="is_show"> 否
                            </label>
                        </div>
                    </div>


                    {{--<div class="am-g am-margin-top-sm">
                        <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                            栏目内容
                        </div>
                    </div>

                    <div class="am-g am-margin-top-sm">
                        <div class="am-u-sm-12 am-u-md-12">
                            <div id="markdown">
                                <textarea rows="10" name="content" style="display:none;"></textarea>
                            </div>
                        </div>
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


    <script src="/assets/vendor/ckfinder/ckfinder.js"></script>
    <script src="/assets/js/ck_upload.js"></script>

@endsection