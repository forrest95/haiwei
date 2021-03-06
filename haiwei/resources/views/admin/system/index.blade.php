
@extends('admin.layouts.app')

@section('content')


    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">管理首页</strong> /
                <small>Manage Home</small>
            </div>
        </div>


        <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
            <li>
                <a href="/system/log-viewer" class="am-text-danger">
                    <span class="am-icon-btn am-icon-server"></span><br>日志管理<br>
                </a>
            </li>
            <li>
                <a href="/system/edit" class="am-text-warning">
                    <span class="am-icon-btn am-icon-desktop"></span><br>站点信息<br>
                </a>
            </li>
            <li>
                <a href="/system/password" class="am-text-success">
                    <span class="am-icon-btn am-icon-user"></span><br>修改密码<br>
                </a>
            </li>
            <li>
                <a href="/system/clear_cache" class="am-text-secondary">
                    <span class="am-icon-btn am-icon-refresh am-icon-spin"></span><br>清除缓存
                </a>
            </li>
        </ul>
           </div>

@endsection