<?php
/***************************************
**************提交日报逻辑****************
***************************************/
	require("./db.php");
	include_once("./smarty/libs/Smarty.class.php");
	session_start();
	$smarty = new Smarty();
	//从回话和html接收名字和日期
	$name = $_SESSION["name"];
	$date = $_POST['date'];
	//从数据库取出用户所查日期的数据
	$query = "select * from journal where name = '$name' and date = '$date'";
	$result = @mysql_query($query,$db);
	$rows = mysql_num_rows($result);
	//输出，跳转到输入页面tpl
	if($rows){
		$res = mysql_fetch_object($result);
		$_SESSION['date'] = $date;
		$smarty->assign('problem',$res->problem);
		$smarty->assign('work',$res->work);
		$smarty->assign('conclusion',$res->conclusion);
		$smarty->assign('projet',$res->projet);
		$smarty->assign('commment',$res->comment);
		$smarty->display('view.tpl');
	}
	//无数据,跳转回上页
	else
	{
		echo "该日无日报,两秒后自动跳转回上一页";
		echo "<meta   http-equiv='refresh'content=2;URL='view.html'>";
	}
	
?>