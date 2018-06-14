<?php
/**
 * Created by PhpStorm.
 * User: 15523
 * Date: 2018/6/13
 * Time: 16:29
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $table='authors';

    protected $fillable = ['author_name'];
}