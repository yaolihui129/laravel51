@extends('common.test.layouts')

@section('title')
11112
@stop

@section('content')
    <!-- 内容区域 -->
    @include('common.test.message')
    <div class="panel panel-default">
        <div class="panel-heading">老师列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>添加时间</th>
                    <th width="120">操作</th>
                </tr>
            </thead>

            <tbody>
                @foreach($teachers as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$teacher->getSex($item->sex)}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="{{ url('Test/teacher/'.$item->id) }}">详情</a>
                            <a href="{{ url('Test/teacher/'.$item->id.'/edit') }}">修改</a>
                            <a href="{{ url('Test/teacher/'.$item->id).'/del' }}"
                            onclick="if(confirm('确定要删除吗？')== false) return false;">删除</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- 分页 -->
    <div>
        <div class="pull-right">
            {!! $teachers->render() !!}
        </div>
    </div>


@stop