<script language="javascript" type="text/javascript" src="datepicker/WdatePicker.js"></script>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>浏览日报</title>
</head>

<body>
<script >
function index(){
	 window.open("index.html",'_self') 
}

</script>
<p align="center" class="h1"><strong>浏览日报</strong></p>
<form name="form1" method="post" action="view.php">
  <span class="h1">时间
  <label for="date"></label>
  <input name="date" onClick="WdatePicker()" id ="need_time" type="text" />
  </span>

  <input type="submit" name="button" id="button" value="确定">
</form>
<p align="left" class="h1">&nbsp;</p>
<p align="left" class="h1">一、当日工作情况</p>
<p align="left" class="h2">1.1当日工作所遇问题</p>
<div align="left">{$problem}</div>
<p align="left" class="h2">1.2当日工作内容</p>
<div align="left">{$work}</div>
<p align="left" class="h2">1.3当日工作学习小结（心得）</p>
<div align="left">{$conclusion}</div>
<p align="left" class="h1">二、明日工作计划</p>
<div align="left">{$projet}</div>
<p align="left" class="h1">三、评论</p>
<div align="left">{$commment}</div>
<form name="form2" method="post" action="comment.php">
  <p align="left">评论</p>
  <p>
    <label for="textfield"></label>
    <label for="textarea"></label>
    <textarea name="comment" id="textarea" cols="45" rows="5"></textarea>
  </p>
  <p>
    <input type="submit" name="button2" id="button2" value="提交评论">
    <input name="浏览日报" type="reset" value="返回" onClick="index()" />
  </p>
</form>
<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>

</body>
</html>
