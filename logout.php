<?php
/***************************************
****************登**出*******************
***************************************/
	require("./db.php");
	include_once("./smarty/libs/Smarty.class.php");
	//关闭数据库
	mysql_close();
	//销毁回话
	session_destroy();
	//跳回登陆界面
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='contact.html'";
	echo "</script>";
?>
