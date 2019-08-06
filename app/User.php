<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /*
     * 手动关联模型到指定的数据表
     * @var sting
     */
    protected  $table = 'eo_user';
//    指定主键
    protected  $primaryKey = 'userID';
//    关闭时间戳
    protected  $timestamp = false;
//    软删除
//    protected $dates = ['deleted_at'];



}
