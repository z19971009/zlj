<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 10:39
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //设定表名
    protected $table = 'type';
    //设定主键
    protected $primaryKey = 'id';
    //指定允许批量赋值的字段
    protected $fillable = ['type','name'];

}