<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teacher= new Teachers();
        $teachers = Teachers::paginate(10);
        return view('test.teacher.index',[
            'teachers'=>$teachers,
            'teacher'=>$teacher,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $teacher= new Teachers();
        if($request->isMethod('POST')){

            $this->validate($request,[
                'Teacher.name'=>'required|min:2|max:10',
                'Teacher.age'=>'required|integer',
                'Teacher.sex'=>'required|integer',
            ],[
                'required'=>':attribute 为必填项',
                'min'=>':attribute 长度不能低于 2 位',
                'max'=>':attribute 长度不能超过 10 位',
                'integer'=>':attribute 必须是整数',
            ],[
                'Teacher.name'=>'姓名',
                'Teacher.age'=>'年龄',
                'Teacher.sex'=>'性别',
            ]);


            $data = $request->input('Teacher');
            if(Teachers::create($data)){
                return redirect('Test/teacher')->with('success','添加成功');
            }else{
                return redirect()->back()->with('error','添加失败');
            }
        }


        return view('test.teacher.create',[
            'teacher'=>$teacher,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        //
        $teacher = Teachers::find($id);

        return view('test.teacher.show',[
            'teacher'=>$teacher,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //
        $teacher=Teachers::find($id);

        if($request->isMethod('POST')){
            $this->validate($request,[
                'Teacher.name'=>'required|min:2|max:10',
                'Teacher.age'=>'required|integer',
                'Teacher.sex'=>'required|integer',
            ],[
                'required'=>':attribute 为必填项',
                'min'=>':attribute 长度不能低于 2 位',
                'max'=>':attribute 长度不能超过 10 位',
                'integer'=>':attribute 必须是整数',
            ],[
                'Teacher.name'=>'姓名',
                'Teacher.age'=>'年龄',
                'Teacher.sex'=>'性别',
            ]);

            $data=$request->input('Teacher');
            $teacher->name = $data['name'];
            $teacher->age = $data['age'];
            $teacher->sex = $data['sex'];

            if($teacher->save()){
                return redirect('Test/teacher')->with('success','修改成功-'.$id);
            }
        }


        return view('test.teacher.edit',[
            'teacher'=>$teacher,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|mixed
     */
    public function destroy($id)
    {
        //
        $teacher =Teachers::find($id);
//        dd($teacher);

        if($teacher->delete()){
            return redirect("Test/teacher")->with('success','删除成功-'.$id);
        }else{
            return redirect("Test/teacher")->with('error','删除失败-'.$id);
        }
    }
}
