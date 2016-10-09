<?php

namespace App\Http\Controllers\Home\Haiwei;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\haiwei\Product;

class SolutionController extends Controller
{

    public function __construct()
    {
//        parent::__construct();
        view()->share([
            '_solution' => 'active1'
        ]);
    }

    //显示解决方案首页
    public function index()
    {
        return view('home.haiwei.solutions.solution');
    }


}
