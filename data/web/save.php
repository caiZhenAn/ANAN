<?php


// 过滤输入
$title = trim(strip_tags($_REQUEST['title']));
$content = trim(strip_tags($_REQUEST['content']));

if(strlen($title)<1 || strlen($content)<1) die('标题和内容都不能为空');

//将内容中的数据序列化成字符串
$data = compact('title','content');

//读取data.php中的数量
$data_array = unserialize(file_get_contents('./data.php'));
// $data_array[]= $data;
// $data_string = serialize($data_array);
// print_r ($data_array);

if(!isset($data_array['maxid'])) $data_array['maxid']=0;
if(!isset($data_array['resumes'])) $data_array['resumes'] = [];

$data_array['maxid']++;
$data_array['resumes'][$data_array['maxid']]=$data;
$data_string = serialize($data_array);

//保存到文件里边
$file = './data.php';//这要求对当前目录有写权限
if(file_put_contents($file,$data_string))
    die('简历已保存,请到<a href="list.php">浏览页面</a>查看');
else
    die("简历保存失败");