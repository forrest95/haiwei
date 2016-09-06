<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    //黑名单
   protected $guarded = ['updated_at','created_at'];
}
