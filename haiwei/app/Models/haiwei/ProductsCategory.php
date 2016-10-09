<?php

namespace App\Models\haiwei;

use Illuminate\Database\Eloquent\Model;
use Cache;

class ProductsCategory extends Model
{
    //
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany('App\Models\haiwei\ProductsCategory', 'parent_id', 'id');
    }

    public function product()
    {
        return $this->hasMany('App\Models\haiwei\Product', 'category_id');
    }

    /**
     * 生成分类数据
     * @return mixed
     */
    static function get_categories()
    {
        $categories = Cache::rememberForever('haiwei_products_categories', function () {
            $categories = self::orderBy('parent_id')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();
            return tree($categories);
        });
        return $categories;
    }

    //清除产品栏目缓存
    static function clear()
    {
        Cache::forget('haiwei_products_categories');
    }


    /**
     * 检查该栏目是否有子栏目
     */
    static function check_children($id)
    {
        $category = self::with('children')->find($id);
        if ($category->children->isEmpty()) {
            return true;
        }
        return false;
    }

    /**
     * 检查该栏目是否有产品
     */
    static function check_products($id)
    {
        $category = self::with('product')->find($id);
        if ($category->product->isEmpty()) {
            return true;
        }
        return false;
    }
}
