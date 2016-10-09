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
    Route::group(array('namespace'=>'Admin\System','prefix' => 'system'), function(){
        Route::post('/uploadFile','FileController@uploadFile'); //文件上传 改名
        Route::get('/down_file','FileController@down_file'); //下载文件
    });

    Route::group(['middleware' => 'auth'], function () {

        //海微后台
        Route::group(array('namespace'=>'Admin\Haiwei','prefix' => 'haiwei'), function(){
            Route::get('/', 'IndexController@index');

            /**
             * 新闻管理
             */
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
            Route::patch('/news_category/sort_order', 'News_categoryController@sort_order');
            Route::patch('/news_category/is_something', 'News_CategoryController@is_something');
            Route::resource('news_category', 'News_CategoryController'); //资源路由


            /**
             * 产品管理
             */
            Route::patch('/products/sort_order','ProductController@sort_order'); //排序
            Route::patch('/products/is_show','ProductController@is_show'); //是否显示

            Route::delete('/products/destroy_checked','ProductController@destroy_checked'); //多选删除
            Route::get('/products/trash','ProductController@trash'); //显示回收站

            //回收站删除恢复 最后删除
            Route::get('/products/{product}/restore','ProductController@restore'); //回收站恢复单个
            Route::delete('/products/{product}/force_destroy','ProductController@force_destroy'); //回收站强制删除单个
            Route::post('/products/restore_checked','ProductController@restore_checked'); //回收站恢复多个
            Route::delete('/products/force_destroy_checked', 'ProductController@force_destroy_checked');//回收站删除多个

            Route::resource('/products','ProductController'); //products资源路由

            //产品栏目管理
            Route::patch('/products_category/sort_order', 'Products_categoryController@sort_order');
            Route::patch('/products_category/is_something', 'Products_categoryController@is_something');
            Route::resource('products_category', 'Products_categoryController'); //资源路由


            /**
             * 文件管理
             */
            Route::get('/finder/index', 'FinderController@index');

            /**
             * 服务中心
             */
            //常见故障解决方法
            Route::delete('/methods/destroy_checked', 'MethodController@destroy_checked');
            Route::patch('/methods/sort_order', 'MethodController@sort_order');
            Route::patch('/methods/is_show', 'MethodController@is_show');
            Route::resource('methods', 'MethodController'); //资源路由

            //客户故障问题反馈
            Route::delete('/problems/destroy_checked', 'ProblemController@destroy_checked');
            Route::patch('/problems/sort_order', 'ProblemController@sort_order');
            Route::patch('/problems/is_show', 'ProblemController@is_show');
            Route::resource('problems', 'ProblemController'); //资源路由

            /**
             * 友情链接
             */
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

            Route::post('/upload','FileController@upload'); //图片上传
//            Route::post('/uploadFile','FileController@uploadFile'); //文件上传 改名
            Route::post('/uploadFile_keepName','FileController@uploadFile_keepName'); //文件上传 保留名字
            Route::post('/uploadHtml','FileController@uploadHtml'); //html上传
            Route::post('/upload_icon','FileController@upload_icon'); //上传图标

//            Route::get('/down_file','FileController@down_file'); //下载文件

            Route::get('/','IndexController@index'); //显示系统管理首页

            Route::get('/password','ConfigController@password');  //显示修改密码
            Route::patch('/password/update_password','ConfigController@update_password');  //执行修改密码
            Route::get('/edit','ConfigController@edit');  //显示编辑站点信息
            Route::put('/update/{system}','ConfigController@update');  //执行 修改站点信息
            Route::get('/clear_cache','ConfigController@clear_cache');  //清除所有的缓存

        });
    });


    //海微前台
    Route::group(array('namespace'=>'Home\Haiwei'), function(){
        Route::get('/', 'IndexController@index'); //首页

        Route::get('/news', 'XinwenController@index'); //新闻
        Route::get('/news/{id}', 'XinwenController@show'); //展示新闻详情页面

        Route::get('/products', 'ProductController@index'); //产品
        Route::get('/products/{id}', 'ProductController@show'); //展示产品详情页面

        Route::get('/solutions', 'SolutionController@index'); //解决方案

        Route::get('/services', 'ServiceController@index'); //服务支持
        Route::post('/services/store','ServiceController@store');//客户问题提交

        Route::get('/abouts', 'AboutController@index'); //关于海微

        Route::get('/test', 'IndexController@test');


    });
});

