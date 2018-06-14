<?php
/**
 * Created by PhpStorm.
 * User: 15523
 * Date: 2018/6/13
 * Time: 17:18
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';

    protected $fillable = ['user_id','comment_id','comment_type','repay_id','score','content'];

    public function getStatusTextAttribute(){
        $arr = [1=>'电影评论',2=>'电视评论'];
        return $arr[$this->status];
    }
}