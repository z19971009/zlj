<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/10
 * Time: 20:13
 */

namespace App\Http\Model;




use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public $primaryKey = 'id';

}