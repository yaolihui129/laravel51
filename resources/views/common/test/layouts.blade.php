@extends('common.master')

@section('container')
    <div class="row">
        <!-- 左侧菜单区域 -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ url('Test/teacher') }}" class="list-group-item
                {{ Request::getPathInfo() == '/Test/teacher' ? 'active' :'' }}
                "> 老师列表</a>
                <a href="{{ url('Test/teacher/create') }}" class="list-group-item
                {{ Request::getPathInfo() == '/Test/teacher/create' ? 'active' :'' }}
                "> 新增老师</a>
            </div>
        </div>

        <div class="col-md-9">


            @yield('content')
        </div>
    </div>

@stop