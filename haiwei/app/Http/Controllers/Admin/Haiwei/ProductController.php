<?php

namespace App\Http\Controllers\Admin\Haiwei;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Requests;
use App\Models\haiwei\Product;
use App\Models\haiwei\ProductsCategory as Category;

class ProductController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        view()->share([
            'categories' => Category::get_categories(),
            '_system'=>'haiwei',
            '_products' => 'am-in',
        ]);
    }

    public function index(Request $request)
    {
        //查找
        $where = function ($query) use ($request) {
            if ($request->has('keyword') and $request->keyword != '') {
                $search = "%" . $request->keyword . "%";
                $query->where('title', 'like', $search)->orWhere('name','like',$search);
            }

            if ($request->has('category_id')) {
                $query->where('category_id', $request->category_id);
            }
        };
        $products = Product::with('category')->where($where)->orderBy('sort_order','desc')->orderBy('created_at', 'desc')->paginate(config('haiwei.page_size'));
//        return $products;
        return view('admin.haiwei.products.index')->with('products', $products)->with(['_productslist'=>'am-active']);
    }


    function create()
    {
        return view('admin.haiwei.products.create')->with(['_new_product' => 'am-active']);;
    }

    function store(Request $request)
    {
//        return $request->all();
        $this->validate($request, [
            'title' => 'required|unique:products|max:255',
            'name' => 'required|unique:products|max:255',
        ]);

        Product::create($request->all());
        return redirect(route('haiwei.products.index'))->with('success', '新增成功~');
    }


    function edit($id)
    {
        $product = Product::find($id);
        return view('admin.haiwei.products.edit')->with('product', $product);
    }

    function update(Request $request, $id)
    {
//        return $request->all();
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        $product = Product::find($id);
        $product->update($request->all());
        return redirect(route('haiwei.products.index'))->with('success', '编辑成功~');
    }

    /**
     * 删除所选
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function destroy($id)
    {
        Product::destroy($id);
        return back()->with('success', '被删文章已进入回收站~');
    }

    //回收站强制删除单个
    public function force_destroy($id)
    {
        Product::withTrashed()->where('id', $id)->forceDelete();
        return back()->with('info', '删除成功');
    }

    /**
     * 多选删除
     * @param Request $request
     */
    function destroy_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Product::destroy($checked_id);
    }

    //回收站强制删除多个
    function force_destroy_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Product::withTrashed()->whereIn('id', $checked_id)->forceDelete();
    }

    /*
     * 回收站还原单个产品
     */
    public function restore($id)
    {
        Product::withTrashed()->where('id', $id)->restore();
        return back()->with('success', '还原成功');
    }

    //回收站还原多个
    public function restore_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Product::withTrashed()->whereIn('id', $checked_id)->restore();
        return back()->with('success', '还原成功');

    }

    /**
     * 商品回收站
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function trash()
    {
        $products = Product::with('category')->onlyTrashed()->paginate(config('haiwei.page_size'));
        return view('admin.haiwei.products.trash', ['products' => $products, '_products_trash' => 'am-active', '_products' => '','_trash'=>'am-in']);
    }

    //是否显示
    function is_show(Request $request)
    {
        $attr = $request->attr;
        $product = Product::find($request->id);
        $value = $product->$attr ? false : true;
        $product->$attr = $value;
        $product->save();
    }

    //排序
    function sort_order(Request $request)
    {
//        return $request->all();
        $product = Product::find($request->id);
        $product->sort_order = $request->sort_order;
        $product->save();
    }

}
