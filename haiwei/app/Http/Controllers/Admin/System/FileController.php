<?php

namespace App\Http\Controllers\Admin\System;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Admin\CommonController;

class FileController extends CommonController
{

    //文件上传类  上传图片
    public function upload(Request $request)
    {

        if ($request->hasFile('Filedata') and $request->file('Filedata')->isValid()) {

            $result = array();

            //文件类型
            $allow = array('image/jpeg', 'image/png', 'image/gif','image/x-icon');

            $mine = $request->file('Filedata')->getMimeType();
            if (!in_array($mine, $allow)) {
                $result['status'] = 0;
                $result['info'] = '文件类型错误，只能上传图片';
                return $result;
            }

            //文件大小判断
            $max_size = 1024 * 1024 * 3;
            $size = $request->file('Filedata')->getClientSize();
            if ($size > $max_size) {
                $result['status'] = 0;
                $result['info'] = '文件大小不能超过3M';
                return $result;
            }

            //上传文件夹，如果不存在，建立文件夹
            $date = date("Y_m");
            $path = getcwd() . '/finder/images/' . $date;
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            //生成新文件名
            $extension = $request->file('Filedata')->getClientOriginalExtension();      //取得之前文件的扩展名

            $file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $extension;
            $request->file('Filedata')->move($path, $file_name);

            $filePath=$path.'/'.$file_name;
//            uptoQiniu($filePath);

            //返回新文件名 no七牛 返回本地路径
            $result['status'] = 1;
            $result['info'] = '/finder/images/' . $date . '/' . $file_name;

            //返回文件名  返回七牛路径
           /* $result['status'] = 1;
            $result['info'] = config('fangshop.qiniu') . $file_name;*/

            return $result;
        }
    }

    //上传文件  (改名)
    public function uploadFile(Request $request)
    {

        if ($request->hasFile('Filedata') and $request->file('Filedata')->isValid()) {

            $result = array();

            //文件类型
             /* $allow = array('image/jpeg', 'image/png', 'image/gif','image/x-icon');

              $mine = $request->file('Filedata')->getMimeType();
              if (!in_array($mine, $allow)) {
                  $result['status'] = 0;
                  $result['info'] = '文件类型错误，只能上传图片';
                  return $result;
              }*/

            //文件大小判断
            $max_size = 1024 * 1024 * 3;
            $size = $request->file('Filedata')->getClientSize();

            if ($size > $max_size) {
                $result['status'] = 0;
                $result['info'] = '文件大小不能超过3M';
                return $result;
            }

            //上传文件夹，如果不存在，建立文件夹
            $date = date("Y_m");
            $path = getcwd() . '/finder/files/' . $date;
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            //生成新文件名
            $extension = $request->file('Filedata')->getClientOriginalExtension();      //取得之前文件的扩展名

            $file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $extension;
            $request->file('Filedata')->move($path, $file_name);

            $filePath=$path.'/'.$file_name;
//            uptoQiniu($filePath);

            //返回新文件名 no七牛 返回本地路径
            $result['status'] = 1;
            $result['info'] = '/finder/files/' . $date . '/' . $file_name;

            //返回文件名  返回七牛路径
            /* $result['status'] = 1;
             $result['info'] = config('fangshop.qiniu') . $file_name;*/

            return $result;
        }
    }

    //上传文件 （不改名） (后期做)
    public function uploadFile_keepName(Request $request)
    {

        if ($request->hasFile('Filedata') and $request->file('Filedata')->isValid()) {

            $result = array();
            //文件类型
            /*  $allow = array('image/jpeg', 'image/png', 'image/gif','image/x-icon');

              $mine = $request->file('Filedata')->getMimeType();
              if (!in_array($mine, $allow)) {
                  $result['status'] = 0;
                  $result['info'] = '文件类型错误，只能上传图片';
                  return $result;
              }*/

            //文件大小判断
            $max_size = 1024 * 1024 * 3;
            $size = $request->file('Filedata')->getClientSize();
            if ($size > $max_size) {
                $result['status'] = 0;
                $result['info'] = '文件大小不能超过3M';
                return $result;
            }

            //上传文件夹，如果不存在，建立文件夹
            $date = date("Y_m");
            $path = getcwd() . '/finder/files/' . $date;
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            $file_name=$request->file('Filedata')->getClientOriginalName();  //获得原文件名
//            $request->file('Filedata')->move($path, iconv('utf-8', 'gbk', $file_name));  //windows
            $request->file('Filedata')->move($path, $file_name);  //linux

            $filePath=$path.'/'.$file_name;

            //返回新文件名 no七牛 返回本地路径
            $result['status'] = 1;
            $result['info'] = '/finder/files/' . $date . '/' . $file_name;

            //返回文件名  返回七牛路径
            /* $result['status'] = 1;
             $result['info'] = config('fangshop.qiniu') . $file_name;*/

            return $result;
        }
    }

    //上传html 目录 扩展名特殊处理
    public function uploadHtml(Request $request)
    {

        if ($request->hasFile('Filedata') and $request->file('Filedata')->isValid()) {

            $result = array();

            //文件类型
            /*  $allow = array('image/jpeg', 'image/png', 'image/gif','image/x-icon');

              $mine = $request->file('Filedata')->getMimeType();
              if (!in_array($mine, $allow)) {
                  $result['status'] = 0;
                  $result['info'] = '文件类型错误，只能上传图片';
                  return $result;
              }*/

            //文件大小判断
            $max_size = 1024 * 1024 * 5;
            $size = $request->file('Filedata')->getClientSize();
            if ($size > $max_size) {
                $result['status'] = 0;
                $result['info'] = '文件大小不能超过5M';
                return $result;
            }

            //上传文件夹，如果不存在，建立文件夹
          /*  $date = date("Y_m");
            $path = getcwd() . '/finder/files/' . $date;
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }*/
            $path=getcwd().'/../resources/views/home/haiwei/products';
            //生成新文件名
            $extension = 'blade.php';      //设置新扩展名

            $file_name = date("Ymd") . '_' . rand(1, 99) . '.' . $extension;
            $request->file('Filedata')->move($path, $file_name);

            $filePath=$path.'/'.$file_name;
//            uptoQiniu($filePath);

            //返回新文件名 no七牛 返回本地路径
            $result['status'] = 1;
            $result['info'] = '/resources/views/home/haiwei/products/' . $file_name;

            //返回文件名  返回七牛路径
            /* $result['status'] = 1;
             $result['info'] = config('fangshop.qiniu') . $file_name;*/

            return $result;
        }
    }

    //网站ico图标专用
    public function upload_icon(Request $request)
    {
        if ($request->hasFile('Filedata') and $request->file('Filedata')->isValid()) {

            $result = array();

            //取得之前文件的扩展名
            $extension = $request->file('Filedata')->getClientOriginalExtension();
            if ($extension != 'ico') {
                $result['status'] = 0;
                $result['info'] = '文件类型错误，只能上传ico格式的图片';
                return $result;
            }


            //文件大小判断
            $max_size = 1024 * 1024;
            $size = $request->file('Filedata')->getClientSize();
            if ($size > $max_size) {
                $result['status'] = 0;
                $result['info'] = '文件大小不能超过1M';
                return $result;
            }

            //上传文件夹，如果不存在，建立文件夹
            $path = getcwd();

            $file_name = "favicon.ico";
            $request->file('Filedata')->move($path, $file_name);
        }
    }

    //下载文件
    public function down_file(Request $request)
    {
//        $url=urldecode($request->url);
//        $this->path=urlencode($this->path);
        //down_file方法中 已经将utf-8格式路径转为gbk了，所以这里不需要转换
        if($request->url==''){
            return '文件不存在！';
        }
        $path=getcwd().$request->url;
//        $path=urlencode($path);
//        return basename($path);
//        return $path;
         down_file($path);
//         response()->download($path);
    }
}
