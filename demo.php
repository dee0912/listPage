<?php

require 'init.inc.php';
require 'page.class.php';

$totalNum = 809; //数据总条数
$perpageNum = 10; //每页数据条数
$perPage = 4; //前分页偏移量
$floPage = 4; //后分页偏移量
$skipStyle = 2; //跳转类型
$pageStyle = 3; //样式类型

$p = isset($_GET['p'])?$_GET['p']:1; //当前页码

//在page.class.php中定义__toString方法，把对象$mypage解析成字符串输出
$mypageurl = new MyPageUrl($totalNum,$perpageNum,$perPage,"",$floPage,"",$p,$skipStyle,$pageStyle);

$smarty->assign("Template_Dir",Template_Dir);
$smarty->assign("pageNow",$p); //传递当前页
$smarty->assign("mypage",$mypageurl);
$smarty->display("demo.html");

