<?php
/**
 * Created by PhpStorm.
 * User: zhaolinjie
 * Date: 2018/6/13
 * Time: 10:51
 */

namespace App\Http\Model;



use Illuminate\Database\Eloquent\Model;

class Tv_collection extends Model
{
    protected $table = 'tv_collection';

   //protected $primaryKey='id';
    protected $fillable = ['tv_id','collection_index','collection_desc','download_url'];
//    protected $dateFormat = 'U';
//    const CREATED_AT = 'creation_date';
//    const UPDATED_AT = 'last_update';
}