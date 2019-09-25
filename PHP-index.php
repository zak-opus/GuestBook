<!-- 显示留言结果 -->
<?php
include('PHP10-con.php');
$sql="SELECT * FROM msg ORDER BY id DESC";
$mysqli_result = $db-> query($sql);
if($mysqli_result == false){
	echo "SQL语句错误";
	exit;
}
$rows = [];
while($row = $mysqli_result-> fetch_array( MYSQLI_ASSOC )){
	$rows[] = $row;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>留言板</title>
	<style>
		.wrap{
			width: 600px;
			margin: 0 auto;
			/*background: #bbb;*/
		}
		.add{overflow: hidden;}
		.add .content{
			width: 598px;
			margin: 0;
			padding: 0;
		}
		.add .user{
			float: left;
			margin-top: 2px; 
		}
		.add .btn{
			float: right;
			margin-top: 2px;
		}
		.msg{
			margin: 20px 0;
			padding:5px;
			background: #ccc;
		}
		.msg .info{overflow: hidden;}
		.msg .user{
			float: left;
			color: blue;
		}
		.msg .time{
			float: right;
			color: #aaa;
		}
		.msg .content{width: 100%;}
	</style>

</head>
<body>
	<div class="wrap">
		<!-- 发表留言 -->
		<div class="add">
			<form action="PHP10-demo.php" method="post">
			<textarea name="content" class="content" cols="23" rows="5"></textarea>
			<input class="user" type="text" name="user" autocomplete="on"/>
			<input class="btn" type="submit" value="发表留言"/>
			</form>
		</div>
		<!-- 查看留言 -->
		<?php
		foreach ($rows as $row) {
		?>
		<div class="msg">
			<div class="info">
				<span class="user"><?php echo $row['user'];?></span>
				<span class="time"><?php echo date("Y-m-d H:i:s",$row['intime']);?></span>
			</div>
			<div class="content">
				<?php echo $row['content'];?>
			</div>
		</div>
		<?php
		}	
		?>
	</div>
</body>
</html>