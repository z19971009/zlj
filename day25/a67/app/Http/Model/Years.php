<?php
/**
 * Created by PhpStorm.
 * User: 15523
 * Date: 2018/6/13
 * Time: 14:56
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
    protected $table='years';

    protected $fillable = ['years'];
}