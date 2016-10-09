<?php
/**
 * 截取, 并加上...
 * @param $string
 * @param $size
 * @param bool $dot 是否加上..., 默认true
 * @return string
 */

function sub($string, $size, $dot = true)
{
    $string = strip_tags(trim($string), "<p>");
    if (strlen($string) > $size) {
        $string = mb_substr($string, 0, $size);
        $string .= $dot ? '...' : '';
        return $string;
    }

    return $string;
}


/**
 * 递归生成无限极分类数组
 * @param $data
 * @param int $parent_id
 * @param int $count
 * @return array
 */
function tree(&$data, $parent_id = 0, $count = 1)
{
    static $treeList = [];

    foreach ($data as $key => $value) {
        if ($value['parent_id'] == $parent_id) {
            $value['count'] = $count;
            $treeList [] = $value;
            unset($data[$key]);
            tree($data, $value['id'], $count + 1);
        }
    }
    return $treeList;
}

/**
 * 栏目名前面加上缩进
 * @param $count
 * @return string
 */
function indent_category($count)
{
    $str = '';
    for ($i = 1; $i < $count; $i++) {
        $str .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    }
    return $str;
}

//显示栏目对应新闻
function show_news($category)
{
    
        return '<a class="am-badge am-badge-secondary" href="' . route('haiwei.news.index', ['category_id' => $category->id]) . '">查看栏目新闻</a>';

}

//显示栏目对应产品
function show_products($category)
{

    return '<a class="am-badge am-badge-secondary" href="' . route('haiwei.products.index', ['category_id' => $category->id]) . '">查看栏目产品</a>';

}

//是否...
function is_something($attr, $module)
{
    return $module->$attr ? '<span class="am-icon-check is_something" data-attr="' . $attr . '"></span>' : '<span class="am-icon-close is_something" data-attr="' . $attr . '"></span>';
}


//栏目类型
function type($type)
{
    switch ($type) {
        case 1:
            return '<a class="am-badge am-badge-primary am-radius">封面</a>';
            break;
        case 2:
            return '<a class="am-badge am-badge-success am-radius">列表</a>';
            break;
        default:
            return '<a class="am-badge am-badge-warning am-radius">跳转</a>';
    }
}

function time_format($attr, $datetime)
{
    if ($datetime == "") {
        return "";
    }
    return date($attr, strtotime($datetime));
}


//求出每个product中html文本的id
function get_html_id($arr)
{
    foreach ($arr as $v)
    {
        $a = explode('/', explode('.', $v['product_html'])[0]);
        $v['html_id'] = $a[count($a) - 1];
    }
    return $arr;
}


//文件下载方法
function down_file($file_path){

    //死去活来，演示下载一个图片.
    //如果文件是中文.
    //原因 php文件函数，比较古老，需要对中文转码 gb2312
//    $file_path=iconv("utf-8","gb2312",$file_path);

    //1.打开文件
    if(!file_exists($file_path)){
        echo "文件不存在!";
        return ;
    }
    $fp=fopen($file_path,"r");
    //获取下载文件的大小
    $file_size=filesize($file_path);
    /* if($file_size>30){
         echo "<script language='javascript'>window.alert('过大')</script>";
         return ;
     }*/
    //返回的文件
    header("Content-type: application/octet-stream");
    //按照字节大小返回
    header("Accept-Ranges: bytes");
    //返回文件大小
    header("Accept-Length: $file_size");
    //这里客户端的弹出对话框，对应的文件名

    $path_arr=explode('/',$file_path);  //求basename
    header("Content-Disposition: attachment; filename=".$path_arr[count($path_arr)-1]);
    //向客户端回送数据
    $buffer=1024;
    //为了下载的安全，我们最好做一个文件字节读取计数器
    $file_count=0;
    //这句话用于判断文件是否结束
    while(!feof($fp) && ($file_size-$file_count>0) ){
        $file_data=fread($fp,$buffer);
        //统计读了多少个字节
        $file_count+=$buffer;
        //把部分数据回送给浏览器;
        echo $file_data;
    }
    //关闭文件
    fclose($fp);

}


