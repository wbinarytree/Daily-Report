<?php /*%%SmartyHeaderCode:53665353eb9b07c6a9-09382697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6013a00b362253c64368d6eebc50ea2131754e2' => 
    array (
      0 => 'index.html',
      1 => 1398009803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53665353eb9b07c6a9-09382697',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5353efd244bb47_70083700',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353efd244bb47_70083700')) {function content_5353efd244bb47_70083700($_smarty_tpl) {?><?php echo '<?php'; ?>
 session_start(); <?php echo '?>'; ?>
 
<html>
<head><title>index</title></head>
<body>

<?php echo '<?php'; ?>

if(isset($_SESSION["name"])&&!empty($_SESSION["name"]))
      echo "欢迎您,".$_SESSION["name"];
else
     echo "您还没有登录，请先登录";
<?php echo '?>'; ?>

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
