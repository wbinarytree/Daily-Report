<?php
/***************************************
**************提交日报逻辑****************
***************************************/
	session_start();
	require("./db.php");
	include_once("./smarty/libs/Smarty.class.php");
	//从html接收日报数据
	$problem = $_POST{'text_problem'};
	$work = $_POST{'text_work'};
	$conclusion = $_POST{'text_conclu'};
	$projet = $_POST{'text_projet'};
	$date = $_POST{'date'};
	$name = $_SESSION["name"];
	//插入数据库
	$query = "INSERT INTO journal (problem,work,conclusion,projet,date,name)VALUES ('$problem','$work','$conclusion','$projet','$date','$name')";
	$result = @mysql_query($query,$db);
	//判断是否提那家成功
	if($result){
		echo "添加成功，2秒后自动跳转";
		
		echo "<meta   http-equiv='refresh'content=2;URL='index.html'>";
	}
	
	else
		echo "添加失败，请重试";
?>