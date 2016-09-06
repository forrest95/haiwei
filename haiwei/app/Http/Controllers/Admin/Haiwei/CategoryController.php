<?php

namespace App\Http\Controllers\Admin\Haiwei;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Models\haiwei\NewsCategory as Category;

class CategoryController extends CommonController
{
    public function __construct()
    {

        parent::__construct();
        view()->share([
            '_system' => 'haiwei',
            'categories' => Category::get_categories(),
            '_news' => 'am-in',
            '_news_category' => 'am-active',
        ]);
    }

    function index()
    {
//        return Category::get_categories();
        return view('admin.haiwei.categories.index');
    }

    public function create()
    {
        return view('admin.haiwei.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:news_categories|max:255',
        ]);
//        return $request->all();
        Category::create($request->all());
		Category::clear();   //对栏目操作后 都要清除下栏目缓存
        return redirect(route('haiwei.category.index'))->with('success', '添加栏目成功');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.haiwei.categories.edit')->with('category', $category);
    }

    function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        
        $category = Category::find($id);
        $category->update($request->all());
        Category::clear();
        return redirect(route('haiwei.category.index'))->with('success', '编辑成功~');
    }

    function is_something(Request $request)
    {
        $attr = $request->attr;
        $category = Category::find($request->id);
        $value = $category->$attr ? false : true;
        $category->$attr = $value;
        $category->save();
        Category::clear(); //清除栏目缓存
    }

    function sort_order(Request $request)
    {
        $category = Category::find($request->id);
        $category->sort_order = $request->sort_order;
        $category->save();
        Category::clear();
    }

    function destroy($id)
    {
        if (!Category::check_children($id)) {
            return back()->with('error', '当前栏目有子栏目，请先将子栏目删除后再尝试删除~');
        }

        if (!Category::check_articles($id)) {
            return back()->with('error', '当前栏目有文章，请先将对应文章删除后再尝试删除~');
        }

        Category::destroy($id);
        Category::clear();
        return back()->with('success', '删除成功');
    }


}
