<?php

namespace App\Models\haiwei;

use Illuminate\Database\Eloquent\Model;
use Cache;

class NewsCategory extends Model
{
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany('App\Models\haiwei\NewsCategory', 'parent_id', 'id');
    }

    public function xinwen()
    {
        return $this->hasMany('App\Models\haiwei\Xinwen', 'category_id');
    }

    /**
     * 生成分类数据
     * @return mixed
     */
    static function get_categories()
    {
        $categories = Cache::rememberForever('haiwei_category_categories', function () {
            $categories = self::orderBy('parent_id')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();
            return tree($categories);
        });
        return $categories;
    }

    //清除栏目缓存
    static function clear()
    {
        Cache::forget('haiwei_category_categories');
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
     * 检查该栏目是否有文章
     */
    static function check_articles($id)
    {
        $category = self::with('xinwen')->find($id);
        if ($category->xinwen->isEmpty()) {
            return true;
        }
        return false;
    }
}
