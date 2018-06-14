<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:49
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'director';
    protected $fillable = ['name'];
}