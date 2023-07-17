<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <script src="/js/app.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/app.css?<?php echo date("mj", time())?>">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <boby>
        <div class="toolbar_section">
            <span class="toolbar_title">@yield('title')</span>
            <span class="toolbar_title2">小魚</span>
            
        </div>

        <div class="container">
            <div class="col-sm-1 form background_white">
                <ul class="nav nav-pills nav-stacked">
                    <!-- 首頁 -->
                    <li 
                    @if($name == "home")
                        class="active"
                    @endif
                    >
                        <a href="/">首頁</a>
                    </li>
                    <!-- 註冊 -->
                    <li 
                    @if($name == "sign_up")
                        class="active"
                    @endif
                    >
                        <a href="/user/auth/sign-up">註冊</a>
                    </li>
                    <!-- 登入 -->
                    <li 
                    @if($name == "sign_in")
                        class="active"
                    @endif
                    >
                        <a href="/user/auth/sign-in">登入</a>
                    </li>
                    <!-- 登出 -->
                    <li>
                        <a href="/user/auth/sign-out">登出</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-11 background_white2">
                @yield('content')
            </div>
        </div>
    </body>
</html>