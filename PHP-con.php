<?php
$zak='root';
$host = '127.0.0.1';
$dbuser = "$zak";
$pwd = '';
$dbname = 'php10day';
$db = new mysqli($host,$dbuser,$pwd,$dbname);
// var_dump($db);
// echo $db-> connect_errno;
if($db-> connect_errno <> 0){
	echo "<b>连接数据库失败！</b>";
	echo $db-> connect_error;
	exit;
}
$db-> query("SET NAMES UTF8"); //设定数据库数据传输的编码
?>