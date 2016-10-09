<?php

namespace App\Http\Controllers\Admin\Haiwei;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Requests;
use App\Models\haiwei\Problem;

class ProblemController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        view()->share([
//            'categories' => Category::get_categories(),
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
                $query->where('name', 'like', $search)
                    ->orWhere('tel','like',$search)
                    ->orWhere('product_name','like',$search);
            }

            if ($request->has('category_id')) {
                $query->where('category_id', $request->category_id);
            }
        };
//        $xinwens = Xinwen::with('category')->where($where)->orderBy('sort_order', 'desc')->orderBy('created_at', 'desc')->paginate(config('haiwei.page_size'));
//        return $xinwens;
//        return view('admin.haiwei.news.index')->with('xinwens', $xinwens)->with(['_newslist'=>'am-active']);
        $problems=Problem::select()->where($where)->orderBy('sort_order', 'desc')->orderBy('created_at', 'desc')->paginate(config('haiwei.page_size'));
        return view('admin.haiwei.problems.index')->with('problems',$problems)->with(['_problems'=>'am-active']);
    }


    function create()
    {
        return view('admin.haiwei.problems.create');
    }

    function store(Request $request)
    {
//        return $request->all();
        $this->validate($request, [
            'name' => 'required|max:255',
            'tel' => 'required|max:255',
        ]);

        Problem::create($request->all());
        return redirect(route('haiwei.problems.index'))->with('success', '新增成功~');
    }


    function edit($id)
    {
        $problem = Problem::find($id);
        return view('admin.haiwei.problems.edit')->with('problem', $problem);
    }

    function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'tel' => 'required|max:255',
        ]);

        $problem = Problem::find($id);
        $problem->update($request->all());
        return redirect(route('haiwei.problems.index'))->with('success', '编辑成功~');
    }

    /**
     * 删除所选
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function destroy($id)
    {
        Problem::destroy($id);
        return back()->with('success', '删除成功~');
    }

    /**
     * 多选删除
     * @param Request $request
     */
    function destroy_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Problem::destroy($checked_id);
    }

    //是否显示
    function is_show(Request $request)
    {
        $attr = $request->attr;
        $problem = Problem::find($request->id);
        $value = $problem->$attr ? false : true;
        $problem->$attr = $value;
        $problem->save();
    }

    //排序
    function sort_order(Request $request)
    {
//        return $request->all();
        $problem = Problem::find($request->id);
        $problem->sort_order = $request->sort_order;
        $problem->save();
    }

}
