<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CommonController extends Controller
{

    public function __construct()
    {
        /*$this->middleware('auth');*/


        /*$admin=\Auth::user();
        view()->share('admin',$admin);*/

        $admin = \Auth::user();
        view()->share([
            'admin' => $admin,
            'systems'   => config('haiwei.systems'),
        ]);

    }

}
