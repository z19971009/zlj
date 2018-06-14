<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:41
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area';
    protected $fillable = ['area_name'];
//    public function tv()
//    {
//        return  $this->belongsTo('App\tv');
//    }
}