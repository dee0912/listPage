<?php

require 'libs/Smarty.class.php';
require 'page.class.php';

$totalNum = 20;
$perpageNum = 10;
$floPage = 4;

$mypage = new MyPage($totalNum,$perpageNum,$floPage);

$smarty->assign("mypage",$mypage);
$smarty->display("demo.html");

