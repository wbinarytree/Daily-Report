<?php
/***************************************
****************评论界面*****************
***************************************/
	require("./db.php");
	include_once("./smarty/libs/Smarty.class.php");
	session_start();
	$smarty = new Smarty();
	//从回话中取出当前用户的名字和用户选择查看的时间
	$name = $_SESSION["name"];
	$date = $_SESSION['date'];
	//从html接受评论内容
	$new_comment = $_POST['comment'];
	//更新数据库
	$query = "select * from journal where name = '$name' and date = '$date'";
	$result = @mysql_query($query,$db);
	$rows = mysql_num_rows($result);
	if($rows){
		$res = mysql_fetch_object($result);
		$comment = $res->comment . '\n' . $new_comment;
		$id = $res->id;
		$query = "update journal SET comment = '$comment' where id = '$id'";
		if(@mysql_query($query,$db)){
			echo "更新成功,评论成功";
			echo "<meta   http-equiv='refresh'content=2;URL='view.html'>";
		}
	}
?>