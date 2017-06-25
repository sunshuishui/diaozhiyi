<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 10:49:55
         compiled from ".\templates\zinfor.html" */ ?>
<?php /*%%SmartyHeaderCode:968754cf50d6ab7589-40125334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '127a07146dfd08c825bad51e5cedd20892415475' => 
    array (
      0 => '.\\templates\\zinfor.html',
      1 => 1422874187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968754cf50d6ab7589-40125334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf50d6b58c86_14932504',
  'variables' => 
  array (
    'zinfor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf50d6b58c86_14932504')) {function content_54cf50d6b58c86_14932504($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>上海雕之艺纹绣-官网-<?php echo $_smarty_tpl->tpl_vars['zinfor']->value['title'];?>
</title>
<meta name="keywords" content="雕之艺纹绣,个人案例,纹绣作品,绣眉,漂唇" />
<meta name="description" content="上海雕之艺纹绣是上海纹绣第一品牌，也是全国最早的纹绣机构之一，拥有国际顶级的纹绣专家，过硬的技术，实惠的价格得到上海纹绣爱好者的一致好评。服务项目有：纹眉、绣眉、漂唇、纹绣培训、纹身等" />
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
	<p class="biaoti">首页&nbsp;&nbsp;/&nbsp;&nbsp;作品展示&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['zinfor']->value['title'];?>
</p>
	<div class="wxpx_xiaji">
		<p class="wxpx_xiaji_bt"><?php echo $_smarty_tpl->tpl_vars['zinfor']->value['title'];?>
</p>
		
		
		<div class="wxpx_xiaji_kc22">
			<p><?php echo $_smarty_tpl->tpl_vars['zinfor']->value['content'];?>
</p>
		</div>
	</div>
					

</div>

<!--最顶部--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
