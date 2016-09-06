<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>管理员登录 | 海微科技</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="/AmazeUI/assets/i/favicon.png">
    <link rel="stylesheet" href="/AmazeUI/assets/css/amazeui.min.css"/>
    <style>
        .header {
            text-align: center;
        }
        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }
        .header p {
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="am-g">
        <h1>海微科技后台管理系统</h1>
        <p>海微 background management system</p>
    </div>

</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <h3>管理员登录</h3>
        <hr>
        <form method="post" role="form" class="am-form"  method="POST" action="{{ url('/admin/login') }}">
            {{ csrf_field() }}


            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">用户名:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <br>
            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">邮箱:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <br>--}}
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">密码:</label>
                <input type="password" name="password" id="password" value="">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <br>
            <label for="remember-me">
                <input id="remember-me" type="checkbox">
                记住密码
            </label>
            <br />
            <div class="am-cf">
                <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
                <a href="{{url('/admin/password/reset')}}" class="am-btn am-btn-default am-btn-sm am-fr">忘记密码 ^_^? </a>
            </div>
        </form>
        <hr/>
        <hr>
        <p>© 海微科技版权所有</p>
    </div>
</div>
</body>
</html>
