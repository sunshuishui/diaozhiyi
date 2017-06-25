<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 10:48:08
         compiled from ".\templates\pinfor.html" */ ?>
<?php /*%%SmartyHeaderCode:1942154cf4ea8e9f416-05399902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8414a6d9bb0eddccc0a05bd2256bfad191333b77' => 
    array (
      0 => '.\\templates\\pinfor.html',
      1 => 1422874081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942154cf4ea8e9f416-05399902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf4ea900b244_65530433',
  'variables' => 
  array (
    'pinfor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf4ea900b244_65530433')) {function content_54cf4ea900b244_65530433($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>上海雕之艺纹绣-纹绣产品-<?php echo $_smarty_tpl->tpl_vars['pinfor']->value['title'];?>
</title>
<link type="text/css" rel="stylesheet" href="../css/style.css" />
<link type="text/css" rel="stylesheet" href="../css/pages.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
</head>

<body>
<!--最顶端logo-->
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--banner-->
<div id="banner"></div>



<!--纹绣培训下级-->
<div id="aboutus">
	<p class="biaoti">首页&nbsp;&nbsp;/&nbsp;&nbsp;纹绣产品&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['pinfor']->value['title'];?>
</p>
	<div class="wxpx_xiaji">
		<p class="wxpx_xiaji_bt"><?php echo $_smarty_tpl->tpl_vars['pinfor']->value['title'];?>
</p>
		<div class="wxpx_xiaji_kc22">
			<p><?php echo $_smarty_tpl->tpl_vars['pinfor']->value['content'];?>
</p>
		</div>
	</div>
					

</div>

<!--最顶部--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
