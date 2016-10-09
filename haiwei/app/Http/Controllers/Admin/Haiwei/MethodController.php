<?php

namespace App\Http\Controllers\Admin\Haiwei;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Requests;
use App\Models\haiwei\Method;
use App\Models\haiwei\Product;

class MethodController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        view()->share([
            'products' => Product::get_productsName(),
            '_system'=>'haiwei',
            '_services' => 'am-in',
        ]);
    }

    public function index(Request $request)
    {
        //查找
        $where = function ($query) use ($request) {
            if ($request->has('keyword') and $request->keyword != '') {
                $search = "%" . $request->keyword . "%";
                $query->where('desc', 'like', $search);
            }

            if ($request->has('product_id')) {
                $query->where('product_id', $request->product_id);
            }
        };
        $methods = Method::with('product')->where($where)->orderBy('sort_order', 'desc')->paginate(config('haiwei.page_size'));
//        return $methods;
        return view('admin.haiwei.methods.index')->with('methods', $methods)->with(['_methods'=>'am-active']);
    }


    function create()
    {
        return view('admin.haiwei.methods.create');
    }

    function store(Request $request)
    {
        return $request->all();
       /* $this->validate($request, [
            'title' => 'required|max:255',
        ]);*/

        Method::create($request->all());
        return redirect(route('haiwei.methods.index'))->with('success', '新增成功~');
    }


    function edit($id)
    {
        $method = Method::find($id);
        //return $method;
        return view('admin.haiwei.methods.edit')->with('method', $method);
    }

    function update(Request $request, $id)
    {
        /*$this->validate($request, [
            'title' => 'required|max:255',
        ]);*/

        $method = Method::find($id);
        $method->update($request->all());
        return redirect(route('haiwei.methods.index'))->with('success', '编辑成功~');
    }

    /**
     * 删除所选
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function destroy($id)
    {
        Method::destroy($id);
        return back()->with('success', '删除成功~');
    }

    /**
     * 多选删除
     * @param Request $request
     */
    function destroy_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Method::destroy($checked_id);
    }


    //是否显示
    function is_show(Request $request)
    {
        $attr = $request->attr;
        $method = Method::find($request->id);
        $value = $method->$attr ? false : true;
        $method->$attr = $value;
        $method->save();
    }

    //排序
    function sort_order(Request $request)
    {
//        return $request->all();
        $method = Method::find($request->id);
        $method->sort_order = $request->sort_order;
        $method->save();
    }

}
