@extends('admin.layouts.app')
@section('css')
    <style>
        .thumb {
            max-height: 60px;
        }
    </style>
@endsection

@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">客户故障问题反馈</strong> /
                <small>Problems List</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a type="button" class="am-btn am-btn-default" href="{{route('haiwei.problems.create')}}">
                            <span class="am-icon-plus"></span> 新增
                        </a>

                        <button type="button" class="am-btn am-btn-default" id="destroy_checked">
                            <span class="am-icon-trash-o"></span> 删除
                        </button>
                    </div>
                </div>
            </div>
            {{--<div class="am-u-sm-12 am-u-md-3">
                <div class="am-form-group">
                    <select data-am-selected="{btnWidth: '80%',  btnStyle: 'secondary', btnSize: 'sm', maxHeight: 360, searchBox: 1}"
                            name="category_id" id="change_category">
                        <option value="-1">所有栏目</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == Request::input('category_id')) selected @endif>
                                {!! indent_category($category->count) !!}{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>--}}

            <div class="am-u-sm-12 am-u-md-3">
                <form  method="get">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" class="am-form-field" name="keyword" placeholder="搜索名字、电话、产品" value="{{Request::input('keyword')}}">
                        <span class="am-input-group-btn">
                            <button class="am-btn am-btn-default" type="submit">搜索</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12">
                <form class="am-form" id="form">
                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                        <tr>
                            <th class="table-check"><input type="checkbox" id="checked"/></th>
                            <th class="table-id">编号</th>
                            <th class="table-name">客户名字</th>
                            <th>电话/e-mail</th>
                            <th >产品名称</th>
                            <th >问题类型</th>
                            <th style="width: 20%" >问题描述</th>
                            <th >反馈时间</th>
                            <th >上传文件</th>
                            <th class="am-hide-sm-only" style="width:10%">排序</th>
                            <th class="table-set">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($problems as $problem)
                            <tr data-id="{{$problem->id}}">
                                <td><input type="checkbox" value="{{$problem->id}}" class="checked_id"
                                           name="checked_id[]"/></td>
                                <td>{{$problem->id}}</td>
                                <td>
                                    {{$problem->name}}
                                </td>
                                <td>
                                    {{$problem->tel}}/{{$problem->email}}
                                </td>
                                <td>{{$problem->product_name}}</td>
                                <td class="am-hide-sm-only">
                                    {{$problem->problem_type}}
                                </td>
                                <td>{{$problem->desc}}</td>
                                <td>{{$problem->created_at}}</td>
                                <td>{{$problem->file}}</td>
                                <td class="am-hide-sm-only">
                                    <input type="text" name="sort_order" class="am-input-sm" value="{{$problem->sort_order}}">
                                </td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <a class="am-btn am-btn-default am-btn-xs am-text-secondary"
                                               href="{{route('haiwei.problems.edit', $problem->id)}}">
                                                <span class="am-icon-pencil-square-o"></span> 编辑
                                            </a>

                                            <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"
                                               href="{{route('haiwei.problems.destroy', $problem->id)}}"
                                               data-method="delete"
                                               data-token="{{csrf_token()}}" data-confirm="确认删除吗?">
                                                <span class="am-icon-trash-o"></span> 删除
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    共 {{$problems->total()}} 条记录

                    <div class="am-cf">
                        <div class="am-fr">
                            {!! $problems->links() !!}
                        </div>
                    </div>
                    <hr/>
                </form>
            </div>

        </div>

    </div>
@endsection

@section('js')
    <script>
        $(function () {
            //多选
            $('#checked').click(function(){
                $('.checked_id').prop('checked',this.checked);
            })

            //删除所选
            $('#destroy_checked').click(function () {
                var length = $(".checked_id:checked").length;
                if (length == 0) {
                    alert("您必须至少选中一条!");
                    return false;
                }

                var checked_id = $(".checked_id:checked").serialize();

                $.ajax({
                    type: "DELETE",
                    url: "/haiwei/problems/destroy_checked",
                    data: checked_id,
                    success: function (data) {
//                        console.log(data);
                        location.href = location.href;
                    }
                });
            });

            //排序
            $("input[name='sort_order']").change(function () {
                var data = {
                    sort_order: $(this).val(),
                    id: $(this).parents("tr").attr('data-id')
                }

                $.ajax({
                    type: "patch",
                    url:"{{url('/haiwei/problems/sort_order')}}",
                    data: data,
                });
            })

            //切换栏目
            /*$("#change_category").change(function(){
                var category_id = $(this).val();
                if(category_id=="-1") {
                    {{--location.href = "{{route('haiwei.news.index')}}";--}}
                    return false;
                }
                var url = "/haiwei/news?category_id="+category_id;
                location.href = url;
            })*/
        });
    </script>
@endsection