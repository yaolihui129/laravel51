<form class="form-horizontal" method="post" action="">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-5">
            <input type="text" name="Teacher[name]" placeholder="请输入老师姓名"
                   value="{{old('Teacher')['name']?old('Teacher')['name']:$teacher->name}} "
                   class="form-control" id="name" >
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Teacher.name') }} </p>
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">年龄</label>
        <div class="col-sm-5">
            <input type="text" name="Teacher[age]"
                   value="{{ old('Teacher')['age']?old('Teacher')['age']:$teacher->age }}"
                   class="form-control" id="age" placeholder="请输入老师年龄">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Teacher.age') }}  </p>
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">性别</label>
        <div class="col-sm-5">
            @foreach($teacher->getSex() as $ind=>$val)
                <label class="radio-inline">
                    <input type="radio"  name="Teacher[sex]"
                           {{ isset($teacher->sex) && $teacher->sex == $ind?'checked':'' }}
                           value="{{ $ind }}">{{$val}}
                </label>
            @endforeach

        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Teacher.sex') }}  </p>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>

</form>