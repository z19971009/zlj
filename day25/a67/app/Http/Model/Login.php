<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/11
 * Time: 17:17
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public function check($data)
    {
        var_dump($data);exit;
        if($data['username']){

        }
    }


}