<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:50
 */

namespace App\Http\Model;




use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';
    protected $fillable = ['actor_name'];
}