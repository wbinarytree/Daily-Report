<?php /* Smarty version Smarty-3.1.18, created on 2014-04-21 08:28:10
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117145354ba7ad37c14-99851452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1398043210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117145354ba7ad37c14-99851452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5354ba7adbd179_64503657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354ba7adbd179_64503657')) {function content_5354ba7adbd179_64503657($_smarty_tpl) {?><!-- 
***************************************
**************主页面-TPL****************
***************************************
-->
<<?php ?>?php session_start(); ?<?php ?>> 
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
  <p class=title>欢迎您,<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
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
