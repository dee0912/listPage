<?php

require 'init.inc.php';
require 'page.class.php';
require 'conn/conn.php';

$perpageNum = 10; //每页数据条数
$perPage = 4; //前分页偏移量
$floPage = 4; //后分页偏移量
$preFonts = "< Pre"; //"前一页"文字内容
$nextFonts = "Next >"; //"下一页"文字内容
$page_n = 1; //样式2下是否加"前n页"、后n页，0为不加，1为加
$skipStyle = 2; //跳转类型，可选1、2
$pageStyle = 2; //样式类型，可选1、2、3( 样式3只包含"上一页"、"下一页"和页码 )
$page_act = 1; //0:url 和 1:ajax

if($page_act == 1){

	//ajax方式分页时强制使用第二种样式
	$pageStyle = 2;
}


$p = isset($_GET['p'])?$_GET['p']:1; //当前页码

//在page.class.php中定义__toString方法，把对象$mypage解析成字符串输出

//参数分别是:总条数、每页条数、前偏移量、"上一页"文字内容(默认为""时显示"上一页")、后偏移量、"下一页"文字内容(默认为""时显示"下一页")、当前地址栏页码数、手动跳转样式、页码显示样式、样式2是否加前n页后n页、分页方式(url/ajax)

//获得总条数
//输出列表
$sql_all = "select title from ips_archives";

//总条数
$totalNum = $conne->getRowsNum($sql_all);

//实例化
$mypageurl = new MyPageUrl($totalNum,$perpageNum,$perPage,$preFonts,$floPage,$nextFonts,$p,$skipStyle,$pageStyle,$page_n,$page_act);

//每页第一条
$firstRow = $mypageurl->getFirstRow();

//总条数
$totalPage = $mypageurl->getTotalPage();

//输出列表
$sql = "select title from ips_archives order by pubdate desc limit ".$firstRow.",".$perpageNum;

//取出数据(二维数组)
$rowsArray = $conne->getRowsArray($sql);

//显示页码
$pageShow = $mypageurl->preOffset($preFonts).$mypageurl->floOffset($nextFonts).$mypageurl->getOtherInfo();

$smarty->assign("Template_Dir",Template_Dir);
$smarty->assign("page_act",$page_act); //传递分页方式
$smarty->assign("pageNow",$p); //传递当前页
$smarty->assign("perpageNum",$perpageNum); //传递每页几条数据
$smarty->assign("totalPage",$totalPage); //传递总页数
$smarty->assign("rowsArray",$rowsArray);
$smarty->assign("mypage",$mypageurl);
$smarty->display("demo.html");

