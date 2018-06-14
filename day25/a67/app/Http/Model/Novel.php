<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 15:18
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    //设定表名
    protected $table = 'novel';
    //设定主键
    protected $primaryKey = 'id';
    //指定允许批量赋值的字段
    protected $fillable = ['title','score','img_url','download_url','img_url','author_id','status','type_id','desc'];

    public function getStatusTextAttribute(){
        $arr = [1=>'连载',2=>'停更',3=>'完结',4=>'封杀'];
        return $arr[$this->status];
    }
    public function getTypeAttribute()
    {
        return Type::where('type','=',$this->type_id)->first()['name'];
    }

}