<?php
/***************************************
**************数据库连接文件**************
***************************************/
	//连接数据库
	$db = @mysql_connect("localhost","wyd_database","930621");
	//检测是否连接数据库
	if(mysqli_connect_errno()){
		echo "Not In Service; Please Try Again Later";
	}
	//设置字符集
	mysql_query("set names 'utf8'",$db); 
	//选择数据库
	@mysql_selectdb("emplois",$db);

?>
