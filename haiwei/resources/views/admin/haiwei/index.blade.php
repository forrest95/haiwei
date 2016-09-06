@extends('admin.layouts.app')
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">管理首页</strong> /
                <small>Manage Home</small>
            </div>
        </div>

        @include('admin.layouts._flash')

        <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
            <li>
                <a href="" class="am-text-warning">
                    <span class="am-icon-btn am-icon-columns"></span><br/>栏目管理<br/>1
                </a>
            </li>

            <li>
                <a href="" class="am-text-danger">
                    <span class="am-icon-btn am-icon-file-text-o"></span><br/>文章管理<br/>2
                </a>
            </li>

            <li>
                <a href="" class="am-text-success">
                    <span class="am-icon-btn am-icon-link"></span><br/>友链管理<br/>3
                </a>
            </li>

            <li>
                <a href="/xSystem/config/clear_cache" class="am-text-secondary">
                    <span class="am-icon-btn am-icon-photo"></span><br/>文件管理
                </a>
            </li>
        </ul>




    </div>
@endsection