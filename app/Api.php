<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    /*
     * 手动关联模型到指定的数据表
     * @var sting
     */
    protected  $table = 'eo_api';
//    指定主键
    protected  $primaryKey = 'apiID';
//    关闭时间戳
    protected  $timestamp = false;
//    软删除
    protected $dates = ['removed'];
}
