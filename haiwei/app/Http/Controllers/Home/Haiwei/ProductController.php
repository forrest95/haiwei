<?php

namespace App\Http\Controllers\Home\Haiwei;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\haiwei\Product;

class ProductController extends Controller
{

    public function __construct()
    {
//        parent::__construct();
        view()->share([
            '_product' => 'active1'
        ]);
    }

    //显示产品首页
    public function index()
    {
        $products1=Product::where('is_top','1')->where('category_id',1)->orderBy('sort_order','desc')->get(); //category_id=1 车载导航
        $products2=Product::where('is_top','1')->where('category_id',2)->orderBy('sort_order','desc')->get(); //category_id=2 车载附件
        $products3=Product::where('is_top','1')->where('category_id',3)->orderBy('sort_order','desc')->get(); //category_id=3 智能仪表

        $products1= get_html_id($products1); //get_html_id 求出每个product中html文本的id
        $products2= get_html_id($products2);
        $products3= get_html_id($products3);
//        return $products3;
        return view('home.haiwei.products.product')->with('products1',$products1)->with('products2',$products2)->with('products3',$products3);
    }


    //显示产品详情页
    public function show($id)
    {
        $ids="%".$id."%";
        $product=Product::where('product_html','like',$ids)->first();

//        view()->share('product',$product);
//        return $product;
        return view("home.haiwei.products.$id")->with('product',$product);
    }


}
