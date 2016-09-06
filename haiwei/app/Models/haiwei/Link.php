<?php

namespace App\Models\haiwei;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['name', 'url', 'thumb', 'sort_order', 'is_show'];
}
