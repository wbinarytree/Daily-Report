<?php /*%%SmartyHeaderCode:192645353f36064a380-06733357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1398015187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192645353f36064a380-06733357',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53546ce50673d8_98211869',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53546ce50673d8_98211869')) {function content_53546ce50673d8_98211869($_smarty_tpl) {?><?php echo '<?php'; ?>
 session_start(); <?php echo '?>'; ?>
 
<html>
<head><title>index</title></head>
<body>
<script >
function Report(){
	 window.open("report.html",'_self') 
}
function View(){
	 window.open("view.html",'_self') 
     {
     opener.location.href(m);
     }
}

</script>
  <p class=title>欢迎您,Thomas</p>
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
</html><?php }} ?>
