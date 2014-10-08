<?php

require 'init.inc.php';
require 'page.class.php';

$totalNum = 200; //数据总条数
$perpageNum = 10; //每页数据条数
$floPage = 4; //分页偏移量

$p = $_GET['p']?$_GET['p']:1; //当前页码

//在page.class.php中定义__toString方法，把对象$mypage解析成字符串输出
$mypageurl = new MyPageUrl($totalNum,$perpageNum,$floPage,$p);

$smarty->assign("Template_Dir",Template_Dir);
$smarty->assign("pageNow",$p); //传递当前页
$smarty->assign("mypage",$mypageurl);
$smarty->display("demo.html");

