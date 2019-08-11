<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    //
    const SEX_UN = 10;
    const SEX_BOY = 20;
    const SEX_GIRL = 30;

    protected $table = 'teachers';
    protected $fillable = ['name','age','sex'];
    public $timestamps = true;

//    protected function getDateFormat(){
//        return time();
//    }
//
    protected function asDateTime($value)
    {
        return $value;
    }

    public function getSex($ind = null){
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男',
            self::SEX_GIRL => '女',
        ];

        if($ind !== null){
            return array_key_exists($ind,$arr)? $arr[$ind]:$arr[self::SEX_UN];
        }

        return $arr;
    }
}
