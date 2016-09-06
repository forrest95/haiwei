<?php

namespace App\Http\Controllers\Admin\Haiwei;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Requests;

class FinderController extends CommonController
{

    public function __construct()
    {
        parent::__construct();
        view()->share([
            '_system' => 'haiwei',
            '_xCms' => 'am-in',
            '_finder' => 'am-active',
            '_title' => '文件管理-'
        ]);
    }

    function index()
    {
        return view('admin.haiwei.finders.index');
    }
}
