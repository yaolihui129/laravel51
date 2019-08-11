@extends('common.test.layouts')

@section('content')
    @include('common.test.validator')
    <div class="panel panel-default">
        <div class="panel-heading">修改老师</div>
        <div class="panel-body">
            @include('test.teacher._form')
        </div>
    </div>

@stop