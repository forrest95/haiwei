@extends('admin.layouts.app')

@section('css')
   
@endsection
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">编辑故障问题</strong> /
                <small>Edit Problems</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">

                <form class="am-form" action="{{ route('haiwei.problems.update', $problem->id) }}" method="post">
                    {!! csrf_field() !!}
                    {!! method_field('put') !!}

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            故障提交人/网点
                        </div>
                        <div class="am-u-sm-8 am-u-md-4">
                            <input type="text" class="am-input-sm" name="name" value="{{$problem->name}}">
                        </div>
                        <div class="am-hide-sm-only am-u-md-6">*必填</div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            联系电话:
                        </div>
                        <div class="am-u-sm-8 am-u-md-4">
                            <input type="text" class="am-input-sm" name="tel" value="{{$problem->tel}}">
                        </div>
                        <div class="am-hide-sm-only am-u-md-6">*必填</div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            邮箱地址：
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" class="am-input-sm" name="email" value="{{$problem->email}}">
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            产品名称
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" class="am-input-sm" name="product_name" value="{{$problem->product_name}}">
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
                                    <option value="option1" @if($problem->problem_type=='option1') selected @endif>选项一...</option>
                                    <option value="option2" @if($problem->problem_type=='option2') selected @endif>选项二.....</option>
                                    <option value="option3" @if($problem->problem_type=='option3') selected @endif>选项三........</option>
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
                                <input type="hidden" name="file" value="{{$problem->file}}">
                            </div>
                            <div>
                                <p class="am-form-help" id="file_show">{{$problem->file}}</p>

                            </div>
                        </div>
                    </div>



                    <div class="am-g am-margin-top sort">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            描述信息
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <textarea rows="4" name="desc">{{$problem->desc}}</textarea>
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            置顶
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="radio" name="is_top" value="1" @if($problem->is_top) checked @endif> 是
                            <input type="radio" name="is_top" value="0" @if(!$problem->is_top) checked @endif> 否
                        </div>
                    </div>

                    <div class="am-g am-margin-top sort">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            排序
                        </div>
                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                            <input type="text" name="sort_order" class="am-input-sm" value="{{$problem->sort_order}}">
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