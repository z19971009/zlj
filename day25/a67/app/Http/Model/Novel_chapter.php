<?php
/**
 * Created by PhpStorm.
 * User: 15523
 * Date: 2018/6/13
 * Time: 16:52
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Novel_chapter extends Model
{
    protected $table='novel_chapter';

    protected $fillable = ['novel_id','chapter_num','charpter_title','novel_content'];
}