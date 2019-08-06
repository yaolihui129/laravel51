<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SqlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ////      普通条件查找，使用?占位符来代表参数绑定
//        $users = DB::select('select * from eo_user where userID = ?', [1]);
//        return view('user.index', ['users' => $users]);
//        dd($users);
//        foreach ($users as $user) {
//            echo $user->userName;
//        }

////      使用命名绑定来执行查询
//        $results = DB::select('select * from eo_user where userID = :userID', ['userID' => 1]);
////      运行插入语句
//        $bool=DB::insert('insert into eo_user (userID, userName) values (?, ?)', [5, 'Dayle111111']);

////      update方法用于更新数据库中已存在的记录，该方法返回受更新语句影响的行数
//        $affected = DB::update('update eo_user set userName = "tyqwe" where userID = ?', [5]);

////        delete方法用于删除数据库中已存在的记录，和update一样，该语句返回被删除的行数：
//        $deleted = DB::delete('delete from eo_user where userID = ? ',[2]);

////      查询构造器
////      从一张表中取出所有行
//        $users = DB::table('eo_user')->get();
//        foreach ($users as $user) {
//            echo $user->userName;
//        }

//        从一张表中获取一行/一列(有问题没实现)
//        $users = DB::table('eo_user')->where('userName','yaolh')->first();
//        $user = DB::table('eo_user')->where('userName','yaolh')->first();

////        想要获取包含单个列值的数组，可以使用lists方法，在本例中，我们获取所有title的数组：
//        $titles = DB::table('eo_user')->lists('userName','userID');

////      需要处理成千上百条数据库记录，可以考虑使用chunk方法，该方法一次获取结果集的一小块
//        DB::table('eo_user')->chunk(100, function($users) {
//            foreach ($users as $user) {
//                echo $user->userName;
//                return false;
//            }
//        });
////        队列构建器还提供了很多聚合方法，比如count, max, min, avg, 和 sum，你可以在构造查询之后调用这些方法：
//        $users = DB::table('eo_user')->count();
//        $maxId = DB::table('eo_user')->max('userID');

////        并不总是想要获取数据表的所有列，使用select方法
//        $users = DB::table('eo_user')->select('userName as name', 'userID as id')->get();
////        distinct方法允许你强制查询返回不重复的结果集：
//        $users = DB::table('eo_user')->distinct()->get();

////        已经有了一个查询构建器实例并且希望添加一个查询列到已存在的select子句，可以使用addSelect方法
//        $query = DB::table('eo_user')->select('userName');
//        $users = $query->addSelect('userID')->get();
//        在查询中使用原生表达式，这些表达式将会以字符串的形式注入到查询中
        $users = DB::table('eo_user')
            ->select(DB::raw('count(*) as user_count, userID'))
            ->where('userID', '<>', 1)
            ->groupBy('userID')
            ->get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
