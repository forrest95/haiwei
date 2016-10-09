<?php

namespace App\Models\haiwei;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //软删除
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Models\haiwei\ProductsCategory');
    }


    static function get_productsName()
    {
        $products = self::orderBy('category_id')
            ->orderBy('sort_order')
            ->where('is_top',1)
            ->get();
        return tree($products);
    }

    
}
