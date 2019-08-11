<!DOCTYPE html >
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatiable" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>UpCAT@yield('title')</title>
        <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
        @section('style')

        @show

    </head>

    <body>
        <!-- 头部 -->
        @section('header')
        <div class="jumbotron">
            <div class="container">
                <h2>轻松学会 Laravel 表单</h2>
                <p> - 玩转 Laravel 表单</p>
            </div>
        </div>
        @show

        <!-- 中间内容区域 -->
        <div class="container">

            @section('container')

            @show
        </div>

        @section('footer')
            <div class="jumbotron" style="margin: 0">
                <div class="container">
                    <span>@2019</span>
                </div>
            </div>
        @show

        <!-- jQuery 文件 -->
        <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
        <!-- jQuery 文件 -->
        <script  href="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>

        @section('javascript')

        @show
    </body>
</html>
