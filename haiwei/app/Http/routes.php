<?php

//欢迎界面
Route::get('/admin', function () {
    return redirect('/haiwei');
});

Route::group(['middleware' => 'web'], function () {

    //Auth 管理员登录
    Route::group(array('prefix' => 'admin'), function(){
        Route::auth();
    });

    //后端
    Route::group(['middleware' => 'auth'], function () {

        //海微后台
        Route::group(array('namespace'=>'Admin\Haiwei','prefix' => 'haiwei'), function(){
            Route::get('/', 'IndexController@index');

            //新闻管理
            Route::patch('/news/sort_order','NewController@sort_order'); //排序
            Route::patch('/news/is_show','NewController@is_show'); //是否显示

            Route::delete('/news/destroy_checked','NewController@destroy_checked'); //多选删除
            Route::get('/news/trash','NewController@trash'); //显示回收站

            //回收站删除恢复 最后删除
            Route::get('/news/{new}/restore','NewController@restore'); //回收站恢复单个
            Route::delete('/news/{new}/force_destroy','NewController@force_destroy'); //回收站强制删除单个
            Route::post('/news/restore_checked','NewController@restore_checked'); //回收站恢复多个
            Route::delete('/news/force_destroy_checked', 'NewController@force_destroy_checked');//回收站删除多个

            Route::resource('/news','NewController'); //news资源路由

            //新闻栏目管理
            Route::patch('/category/sort_order', 'CategoryController@sort_order');
            Route::patch('/category/is_something', 'CategoryController@is_something');

            Route::resource('category', 'CategoryController'); //资源路由



            //附件管理
            Route::get('/finder/index', 'FinderController@index');


            //友情链接
            Route::group(['prefix' => 'link'], function () {
                Route::get('search', 'LinkController@search');
                Route::delete('destroy_checked', 'LinkController@destroy_checked');
                Route::patch('sort_order', 'LinkController@sort_order');
                Route::patch('is_something', 'LinkController@is_something');
            });
            Route::resource('link', 'LinkController');
        });



        //system管理
        Route::group(array('namespace'=>'Admin\System','prefix' => 'system'), function(){

            Route::post('/upload','FileController@upload'); //文件上传
            Route::post('/upload_icon','FileController@upload_icon'); //上传图标

            Route::get('/','IndexController@index'); //显示系统管理首页

            Route::get('/password','ConfigController@password');  //显示修改密码
            Route::patch('/password/update_password','ConfigController@update_password');  //执行修改密码
            Route::get('/edit','ConfigController@edit');  //显示编辑站点信息
            Route::put('/update/{system}','ConfigController@update');  //执行 修改站点信息
            Route::get('/clear_cache','ConfigController@clear_cache');  //清除所有的缓存

        });
    });
});

