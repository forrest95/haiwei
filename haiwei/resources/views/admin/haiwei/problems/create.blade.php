@extends('admin.layouts.app')

@section('css')
    
@endsection
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新增故障问题</strong> /
                <small>Create Problems</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">

                <form class="am-form" action="{{ route('haiwei.problems.store') }}" method="post">
                    {!! csrf_field() !!}

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            故障提交人/网点
                        </div>
                        <div class="am-u-sm-8 am-u-md-4">
                            <input type="text" class="am-input-sm" name="name" value="{{old('name')}}">
                        </div>
                        <div class="am-hide-sm-only am-u-md-6">*必填</div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            联系电话:
                        </div>
                        <div class="am-u-sm-8 am-u-md-4">
                            <input type="text" class="am-input-sm" name="tel" value="{{old('tel')}}">
                        </div>
                        <div class="am-hide-sm-only am-u-md-6">*必填</div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            邮箱地址：
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" class="am-input-sm" name="email" value="{{old('email')}}">
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            产品名称
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" class="am-input-sm" name="product_name" value="{{old('product_name')}}">
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            问题类型
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
{{--                            <input type="text" class="am-input-sm" name="name" value="{{old('name')}}">--}}

                            <div class="am-form-group am-form-select">
                                <select id="doc-select-1" name="problem_type">
                                    <option value="option1">选项一...</option>
                                    <option value="option2">选项二.....</option>
                                    <option value="option3">选项三........</option>
                                </select>{{--<span class="am-form-caret">111</span>--}}
                            </div>
                        </div>
                    </div>

                    <div class="am-g am-margin-top file">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            文件上传
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <div class="am-form-group am-form-file new_file">
                                <button type="button" class="am-btn am-btn-secondary am-btn-sm">
                                    <i class="am-icon-cloud-upload" id="loading"></i> 上传文件
                                </button>
                                <input type="file" id="file_upload">
                                <input type="hidden" name="file" value="{{old('file')}}">
                            </div>
                            <div>
                                <p class="am-form-help" id="file_show">请选择要上传的文件...</p>

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
                            <input type="radio" name="is_top" value="1" checked> 是
                            <input type="radio" name="is_top" value="0"> 否
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
    <script src="/assets/js/uploadFile.js"></script>


    {{--<script src="/assets/js/uploadList.js"></script>--}}
    {{--<script src="/assets/vendor/ckfinder/ckfinder.js"></script>--}}
    {{--<script src="/assets/js/ck_upload.js"></script>--}}

@endsection