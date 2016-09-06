<?php

namespace App\Http\Controllers\Admin\System;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\User;

use App\Models\system\System;

use Cache, Auth, Hash;

class ConfigController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        view()->share([
            '_system' => 'system',

        ]);
    }

    //显示修改密码
    public function password()
    {
        return view('admin.system.configs.password')->with(['_password'=>'am-active',]);
    }

    function update_password(Request $request)  //执行修改密码
    {

        $admin = Auth::user();
//       echo $admin.'<br>';exit;
        //验证密码是否正确
        if (!Hash::check($request->old_password, $admin->password)) {
            return back()->with('error', '原始密码错误~');
        }

        //验证 原始密码必须 新密码规则
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $admin = User::find($admin->id);
        $admin->fill(['password' => bcrypt($request->password)])->save();

        return back()->with('success', '修改成功~');
    }


    //显示 编辑站点信息
    function edit()
    {
        $systems=System::find(1);
//        return $systems;
        return view('admin.system.configs.edit')->with('system',$systems)->with(['_edit'=>'am-active',]);
    }

    //执行 修改站点信息
    function update(Request $request,$id)
    {
        $system=System::find($id);
        $system->update($request->all());

        return redirect('/system/edit');
    }


    /**
     * 清除所有的缓存
     * @return mixed
     */
    function clear_cache()
    {
        Cache::flush();
        return back()->with('success', '缓存清除成功~');
    }
}
