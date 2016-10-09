<?php

namespace App\Http\Controllers\Admin\Haiwei;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Requests;
use App\Models\haiwei\Xinwen;
use App\Models\haiwei\NewsCategory as Category;

class NewController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        view()->share([
            'categories' => Category::get_categories(),
            '_system'=>'haiwei',
            '_news' => 'am-in',
//            '_article' => 'am-active',
        ]);
    }

    public function index(Request $request)
    {
        //查找
        $where = function ($query) use ($request) {
            if ($request->has('keyword') and $request->keyword != '') {
                $search = "%" . $request->keyword . "%";
                $query->where('title', 'like', $search);
            }

            if ($request->has('category_id')) {
                $query->where('category_id', $request->category_id);
            }
        };
        $xinwens = Xinwen::with('category')->where($where)->orderBy('sort_order', 'desc')->orderBy('created_at', 'desc')->paginate(config('haiwei.page_size'));
//        return $xinwens;
        return view('admin.haiwei.news.index')->with('xinwens', $xinwens)->with(['_newslist'=>'am-active']);
    }


    function create()
    {
        return view('admin.haiwei.news.create')->with(['_new_article' => 'am-active']);;
    }

    function store(Request $request)
    {
//        return $request->all();
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        Xinwen::create($request->all());
        return redirect(route('haiwei.news.index'))->with('success', '新增成功~');
    }


    function edit($id)
    {
        $xinwen = Xinwen::find($id);
//return $xinwen;
        return view('admin.haiwei.news.edit')->with('xinwen', $xinwen);
    }

    function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        $xinwen = Xinwen::find($id);
        $xinwen->update($request->all());
        return redirect(route('haiwei.news.index'))->with('success', '编辑成功~');
    }

    /**
     * 删除所选
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function destroy($id)
    {
        Xinwen::destroy($id);
        return back()->with('success', '被删文章已进入回收站~');
    }

    //回收站强制删除单个
    public function force_destroy($id)
    {
        Xinwen::withTrashed()->where('id', $id)->forceDelete();
        return back()->with('info', '删除成功');
    }

    /**
     * 多选删除
     * @param Request $request
     */
    function destroy_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Xinwen::destroy($checked_id);
    }


    function force_destroy_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Xinwen::withTrashed()->whereIn('id', $checked_id)->forceDelete();
    }

    /*
     * 回收站还原单个新闻
     */
    public function restore($id)
    {
        Xinwen::withTrashed()->where('id', $id)->restore();
        return back()->with('success', '还原成功');
    }

    //回收站还原多个
    public function restore_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Xinwen::withTrashed()->whereIn('id', $checked_id)->restore();
        return back()->with('success', '还原成功');

    }

    /**
     * 新闻回收站
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function trash()
    {
        $xinwens = Xinwen::with('category')->onlyTrashed()->paginate(config('haiwei.page_size'));
        return view('admin.haiwei.news.trash', ['xinwens' => $xinwens, '_news_trash' => 'am-active', '_news' => '','_trash'=>'am-in']);
    }

    //是否显示
    function is_show(Request $request)
    {
        $attr = $request->attr;
        $xinwen = Xinwen::find($request->id);
        $value = $xinwen->$attr ? false : true;
        $xinwen->$attr = $value;
        $xinwen->save();
    }

    //排序
    function sort_order(Request $request)
    {
//        return $request->all();
        $xinwen = Xinwen::find($request->id);
        $xinwen->sort_order = $request->sort_order;
        $xinwen->save();
    }

}
