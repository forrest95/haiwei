<?php

namespace App\Http\Controllers\Home\Haiwei;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\haiwei\Problem;

class ServiceController extends Controller
{

    public function __construct()
    {
//        parent::__construct();
        view()->share([
            '_service' => 'active1'
        ]);
    }

    //显示解决方案首页
    public function index()
    {
        return view('home.haiwei.services.service');
    }

    function store(Request $request)
    {
//        return $request->all();
        $this->validate($request, [
            'name' => 'required|max:255',
            'tel' => 'required|max:255',
        ]);

        Problem::create($request->all());
//        return redirect(route('haiwei.problems.index'))->with('success', '新增成功~');
    }


}
