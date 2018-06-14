<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 14:58
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    //设定表名
    protected $table = 'tv';
    //设定主键
    protected $primaryKey = 'id';
    //指定允许批量赋值的字段
    protected $fillable = ['tv_name','img_url','download_url','score','lanaguage_type','area_id','type_id','year_id','director_id','actor_id','desc'];

//    public function area()
//    {
//        return $this->hasMany('app\Area', 'id', 'area_id');
//    }
    public function getAreaAttribute()
    {
        return Area::find($this->area_id)['area_name'];
    }

    public function getTypeAttribute()
    {
        return Type::where('type','=',$this->type_id)->first()['name'];
    }

    public function getYearAttribute()
    {
        return Years::find($this->year_id)['years'];
    }

    public function getDirectorAttribute()
    {
        return Director::find($this->director_id)['name'];
    }

    public function getActorAttribute()
    {
        return Actor::find($this->actor_id)['actor_name'];
    }
    public function getCollectionAttribute()
    {
        return Tv_collection::find($this->desc)['collection_desc'];
    }


}