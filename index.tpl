<!-- 
***************************************
**************主页面-TPL****************
***************************************
-->
<?php session_start(); ?> 
<html>
<head><title>员工日报系统</title></head>
<body>
<script >
<!-- 跳转至提交日报 -->
function Report(){
	 window.open("report.html",'_self') 
}
<!-- 跳转至浏览日报 -->
function View(){
	 window.open("view.html",'_self') 
     {
     opener.location.href(m);
     }
}

</script>
<p align="center" class="h1"><strong>百库员工日报系统</strong></p>
  <p class=title>欢迎您,{$name}</p>
<p align="center"><span class="title">
    <input name="提交日报" type="button" onClick="Report()" value="提交日报" />
  </span></p>
<p align="center">
  <input name="浏览日报" type="button" onClick="View()" value="浏览日报" />
</p>
   <div align="center">
    <form id="form1" name="form1" method="post" action="logout.php">
      <p>
        <input name="浏览日报2" type="submit"  value="登出" />
      </p>
    </form>
  </div>
       
</body>
</html>