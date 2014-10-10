<?php

require 'conn/conn.php';

if(isset($_POST['pageNow']) && !empty($_POST['pageNow'])){

	$pageNow = $_PSOT['pageNow'];
}

//每页几条数据
if(isset($_POST['perpageNum']) && !empty($_POST['perpageNum'])){

	$perpageNum = $_PSOT['perpageNum'];
}

//当前页第一条数据
$firstRow = $perpageNum * ($pageNow-1) + 1;

$sql = "select title from ips_archives order by pubdate desc limit ".$firstRow.",".$perpageNum;
file_put_contents("f:/mylog.log",$sql."\r\n".FILE_APPEND);
$rowsArray = $conne->getRowsArray($sql);



