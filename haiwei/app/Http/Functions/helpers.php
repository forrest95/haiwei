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

//显示栏目对应文章
function show_articles($category)
{
    
        return '<a class="am-badge am-badge-secondary" href="' . route('haiwei.news.index', ['category_id' => $category->id]) . '">查看栏目文章</a>';

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

