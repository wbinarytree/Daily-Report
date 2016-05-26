<?php
/***************************************
**************登陆界面逻辑****************
***************************************/
	require("./db.php");
	include_once("./smarty/libs/Smarty.class.php");
	$smarty = new Smarty();

	//从html接收用户输入的用户名与密码
	$login = $_POST{'login'};
	$password = $_POST{'password'};
	
	//从数据库验证密码	
	$query = "select * from information where login = '$login' and password = '$password'";
	$result = @mysql_query($query,$db);
	$rows = mysql_num_rows($result);
	$res = mysql_fetch_object($result);
	if($rows){
	$smarty->assign("name",$res->name);
	//用户名正确 开启回话
	session_start();
	//将id和Namea存入回话以便后期查找
	$_SESSION['id'] = $res->id;
	$_SESSION["name"] = $res->name;
	//跳转至主页面
	$smarty->display("index.tpl");
	}
	else{
		echo('用户名/密码错误...<br>两秒后自动跳转。');
		echo "<meta   http-equiv='refresh'content=2;URL='contact.html'>";
	}
?>

