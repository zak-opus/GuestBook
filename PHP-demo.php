<?php
include('./class/PHP10-input.php');
include('PHP10-con.php');
$content=$_POST['content'];
$user=$_POST['user'];

//定义类input的实例化对象
$input=new input();

//调用函数，检查内容是否为空
$is =$input->post($content);
if($is == false){
	die("留言内容不能为空");
}
$is =$input-> post($user);
if($is == false){
	die("留言人不能为空");
}

//数据提交入库
$time= time();
$sql = "INSERT INTO msg(content,user,intime) values ('{$content}','{$user}','{$time}')";
$is = $db-> query($sql);
if($is == true){
	echo "提交成功啦！";
}
else{
	echo "提交失败了呀！";
}

header('Location: '.$uri.'/PHP10-index.php')
?>