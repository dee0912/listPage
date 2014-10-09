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
<<<<<<< HEAD

//参数分别是:总条数、每页条数、前偏移量、"上一页"文字内容(默认为""时显示"上一页")、后偏移量、"下一页"文字内容(默认为""时显示"下一页")、当前地址栏页码数、手动跳转样式、页码显示样式
=======
>>>>>>> origin/master
$mypageurl = new MyPageUrl($totalNum,$perpageNum,$perPage,"",$floPage,"",$p,$skipStyle,$pageStyle);

$smarty->assign("Template_Dir",Template_Dir);
$smarty->assign("pageNow",$p); //传递当前页
$smarty->assign("mypage",$mypageurl);
$smarty->display("demo.html");

