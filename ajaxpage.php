<?php

require 'conn/conn.php';

if(isset($_POST['pageNow']) && !empty($_POST['pageNow'])){

	$pageNow = $_POST['pageNow'];
}

//每页几条数据
if(isset($_POST['perpageNum']) && !empty($_POST['perpageNum'])){

	$perpageNum = $_POST['perpageNum'];
}

//当前页第一条数据
$firstRow = $perpageNum * ($pageNow-1) + 1;

$sql = "select title from ips_archives order by pubdate desc limit ".$firstRow.",".$perpageNum;


$rowsArray = $conne->getRowsArray($sql);

//把二维数组转换成json格式
echo json_encode($rowsArray);



