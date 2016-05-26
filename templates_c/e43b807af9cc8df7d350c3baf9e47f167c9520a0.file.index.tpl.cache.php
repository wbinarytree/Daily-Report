<?php /* Smarty version Smarty-3.1.18, created on 2014-04-20 19:33:14
         compiled from "index.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5353f36068f715_33675108',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353f36068f715_33675108')) {function content_5353f36068f715_33675108($_smarty_tpl) {?><<?php ?>?php session_start(); ?<?php ?>> 
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
