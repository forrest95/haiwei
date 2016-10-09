<?php

namespace App\Http\Controllers\Home\Haiwei;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\haiwei\Product;

class AboutController extends Controller
{

    public function __construct()
    {
//        parent::__construct();
        view()->share([
            '_about' => 'active1'
        ]);
    }

    //显示显示海微官网首页
    public function index()
    {
        return view('home.haiwei.abouts.about');
    }


}
