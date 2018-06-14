<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/13
 * Time: 10:38
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';

    protected $primaryKey = 'id';

    protected $fillable = ['title','img_url','download_url','score','lanaguage_type','area_id','type_id','year_id','director_id','actor_id','desc',];

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
}