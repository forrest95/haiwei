@extends('admin.layouts.app')
@section('content')
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">文件管理</strong> /
                <small>Finder</small>
            </div>
        </div><br/>

        @include('admin.layouts._flash')

        <div class="am-g">
            <div class="am-u-md-12">
                <div id="finder"></div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="/assets/vendor/ckfinder/ckfinder.js"></script>
    <script>
        CKFinder.widget( 'finder', {
            height: '800',
            language: 'zh-cn',
        });
    </script>
@endsection
