<?php

namespace App\Http\Controllers\Admin\Haiwei;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;

use App\Http\Requests;
use App\Models\haiwei\Link;

class LinkController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        view()->share([
            '_system' => 'haiwei',
//            '_xCms' => 'am-in',
            '_link' => 'am-active',
        ]);
    }

    function index(Request $request)
    {
        //查找
        $where = function ($query) use ($request) {
            if ($request->has('keyword') and $request->keyword != '') {
                $search = "%" . $request->keyword . "%";
                $query->where('name', 'like', $search);
            }
        };
        $links = Link::where($where)->orderBy('sort_order')->paginate(config('haiwei.page_size'));
        return view('admin.haiwei.links.index')->with('links', $links);
    }

    function create()
    {
        return view('admin.haiwei.links.create');
    }

    function store(Request $request)
    {
        Link::create($request->all());
        return redirect(route('haiwei.link.index'))->with('success', '新增成功~');
    }


    function edit($id)
    {
        $link = Link::find($id);
        return view('admin.haiwei.links.edit')->with('link', $link);
    }

    function update(Request $request, $id)
    {
        $link = Link::find($id);
        $link->update($request->all());
        return redirect(route('haiwei.link.index'))->with('success', '编辑成功~');
    }


    function destroy($id)
    {
        Link::destroy($id);
        return back()->with('success', '删除成功');
    }

    function destroy_checked(Request $request)
    {
        $checked_id = $request->input("checked_id");
        Link::destroy($checked_id);
    }

    function sort_order(Request $request)
    {
        $link = Link::find($request->id);
        $link->sort_order = $request->sort_order;
        $link->save();
    }

    function is_something(Request $request)
    {
        $attr = $request->attr;
        $link = Link::find($request->id);
        $value = $link->$attr ? false : true;
        $link->$attr = $value;
        $link->save();
    }

}
