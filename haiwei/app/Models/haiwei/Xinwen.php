<?php

namespace App\Models\haiwei;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Xinwen extends Model
{
    //软删除
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];
    protected $table = 'news';


    public function category()
    {
        return $this->belongsTo('App\Models\haiwei\NewsCategory');
    }
}
