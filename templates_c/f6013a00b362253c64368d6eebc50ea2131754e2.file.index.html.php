<?php /* Smarty version Smarty-3.1.18, created on 2014-04-20 17:47:53
         compiled from "index.html" */ ?>
<?php /*%%SmartyHeaderCode:125095353ca56b60490-14439704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6013a00b362253c64368d6eebc50ea2131754e2' => 
    array (
      0 => 'index.html',
      1 => 1398008869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125095353ca56b60490-14439704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5353ca56c269c2_86378050',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353ca56c269c2_86378050')) {function content_5353ca56c269c2_86378050($_smarty_tpl) {?>  <html>
<head><title>index</title></head>
<body>
<div align="left">你好<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
：</div>
<p >&nbsp; </p>
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
  <p class=title>&nbsp;</p>
<p align="center"><span class="title">
    <input name="提交日报" type="button" onclick="Report()" value="提交日报" />
  </span></p>
<p align="center">
  <input name="浏览日报" type="button" onclick="View()" value="浏览日报" />
</p>
  <br>
  <p>&nbsp;</p>
       
</body>
  </html><?php }} ?>
