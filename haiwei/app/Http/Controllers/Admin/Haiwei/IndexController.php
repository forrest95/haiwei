<?php

namespace App\Http\Controllers\Admin\Haiwei;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;

class IndexController extends CommonController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        parent::__construct();
        view()->share([
            '_system' => 'haiwei',
            '_index' => 'am-active',
        ]);
    }

    public function index()
    {
       
        return view('admin.haiwei.index');
    }

    
}
