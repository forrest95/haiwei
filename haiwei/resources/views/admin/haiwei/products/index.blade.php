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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">产品列表</strong> /
                <small>Products List</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a type="button" class="am-btn am-btn-default" href="{{route('haiwei.products.create')}}">
                            <span class="am-icon-plus"></span> 新增
                        </a>

                        <button type="button" class="am-btn am-btn-default" id="destroy_checked">
                            <span class="am-icon-trash-o"></span> 删除
                        </button>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
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
            </div>

            <div class="am-u-sm-12 am-u-md-3">
                <form  method="get">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" class="am-form-field" name="keyword"  value="{{Request::input('keyword')}}">
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
                            <th class="table-title">标题</th>
                            <th class="product-name">产品名称</th>
                            <th>缩略图</th>
                            <th class="table-category">所属栏目</th>
                            <th class="table-product_time">产品生产日期</th>
                            <th class="table-date am-hide-sm-only">文章发布日期 / 修改日期</th>
                            <th class="table-top am-hide-sm-only">是否置顶</th>
                            <th class="am-hide-sm-only" style="width:10%">排序</th>
                            <th class="table-set">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr data-id="{{$product->id}}">
                                <td><input type="checkbox" value="{{$product->id}}" class="checked_id"
                                           name="checked_id[]"/></td>
                                <td>{{$product->id}}</td>
                                <td>
                                    {{$product->title}}
                                </td>
                                <td>
                                    {{$product->name}}
                                </td>
                                <td class="article_thumb">
                                    @if($product->thumb)<img src="{{$product->thumb}}" alt="" class="thumb">@endif
                                </td>
                                <td>{{$product->category->name}}</td>
                                <td>
                                    {{$product->product_time}}
                                </td>
                                <td class="am-hide-sm-only">
                                    {{$product->created_at}} / {{$product->updated_at}}
                                </td>

                                <td class="am-hide-sm-only">
                                    {!! is_something('is_top', $product) !!}
                                </td>
                                <td class="am-hide-sm-only">
                                    <input type="text" name="sort_order" class="am-input-sm" value="{{$product->sort_order}}">
                                </td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <a class="am-btn am-btn-default am-btn-xs am-text-secondary"
                                               href="{{route('haiwei.products.edit', $product->id)}}">
                                                <span class="am-icon-pencil-square-o"></span> 编辑
                                            </a>

                                            <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"
                                               href="{{route('haiwei.products.destroy', $product->id)}}"
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

                    共 {{$products->total()}} 条记录

                    <div class="am-cf">
                        <div class="am-fr">
                            {!! $products->links() !!}
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
                    url: "/haiwei/products/destroy_checked",
                    data: checked_id,
                    success: function () {
                        location.href = location.href;
                    }
                });
            });


            //是否...
            $(".is_something").click(function () {
                var _this = $(this);
                var data = {
                    id: _this.parents("tr").data('id'),
                    attr: _this.data('attr')
                }

                $.ajax({
                    type: "PATCH",
                    url: "/haiwei/products/is_show",
                    data: data,
                    success: function () {
                        if (_this.hasClass('am-icon-close')) {
                            _this.removeClass('am-icon-close').addClass('am-icon-check');
                        } else {
                            _this.removeClass('am-icon-check').addClass('am-icon-close');
                        }
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
                    url:"{{url('/haiwei/products/sort_order')}}",
                    data: data,
                });
            })

            //切换栏目
            $("#change_category").change(function(){
                var category_id = $(this).val();
                if(category_id=="-1") {
                    location.href = "{{route('haiwei.products.index')}}";
                    return false;
                }
                var url = "/haiwei/products?category_id="+category_id;
                location.href = url;
            })
        });
    </script>
@endsection