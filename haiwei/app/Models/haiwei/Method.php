<?php

namespace App\Models\haiwei;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo('App\Models\haiwei\Product');
    }
}
