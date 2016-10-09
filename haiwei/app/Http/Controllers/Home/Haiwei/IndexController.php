<?php

namespace App\Http\Controllers\Home\Haiwei;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\haiwei\Product;
use App\Models\haiwei\Xinwen;

class IndexController extends Controller
{

    public function __construct()
    {
//        parent::__construct();
        view()->share([
            '_index' => 'active1'
        ]);
    }

    //显示显示海微官网首页
    public function index()
    {
        $products=Product::where('is_top','1')->orderBy('sort_order','desc')->take(3)->get();
        $products=get_html_id($products);  //get_html_id 求出每个product中html文本的id
        $xinwens=Xinwen::where('is_top','1')->orderBy('sort_order','desc')->take(3)->get();
//        return $products;
        return view('home.haiwei.index')->with('xinwens',$xinwens)->with('products',$products);
    }

    public function test()
    {
        $product=Product::orderBy('sort_order')->first();
//        return $product;
        return view('home.haiwei.product-details')->with('product',$product);
    }
}
