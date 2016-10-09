<?php

namespace App\Http\Controllers\Home\Haiwei;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\haiwei\Xinwen;

class XinwenController extends Controller
{
    public function __construct()
    {
//        parent::__construct();
        view()->share([
            '_news' => 'active1'
        ]);
    }

    //显示新闻页
    public function index()
    {
        $xinweins=Xinwen::where('is_top','1')->orderBy('sort_order','desc')->get();
//        return $xinweins;
        return view('home.haiwei.news.news')->with('xinwens',$xinweins);
    }

    public function show($id)
    {
        $xinwen=Xinwen::find($id);
//        return $xinwen;
        return view('home.haiwei.news.news-details')->with('xinwen',$xinwen);
    }
}
