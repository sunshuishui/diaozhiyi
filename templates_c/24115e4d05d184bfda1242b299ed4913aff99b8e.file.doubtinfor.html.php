<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 10:52:40
         compiled from ".\templates\doubtinfor.html" */ ?>
<?php /*%%SmartyHeaderCode:664854cf472d110369-25046348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24115e4d05d184bfda1242b299ed4913aff99b8e' => 
    array (
      0 => '.\\templates\\doubtinfor.html',
      1 => 1422874355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '664854cf472d110369-25046348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf472d1f2b49_73971801',
  'variables' => 
  array (
    'ninfor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf472d1f2b49_73971801')) {function content_54cf472d1f2b49_73971801($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['title'];?>
-上海雕之艺纹绣-纹绣常见问题</title>
<meta name="keywords" content="雕之艺纹绣,纹绣问题,纹绣常见问题,绣眉,漂唇" />
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


<!--新闻动态-->
<div id="aboutus">
	<p class="biaoti">首页&nbsp;&nbsp;/&nbsp;&nbsp;常见问题</p>
	<div class="dtxiangxi">
		<p class="dtxiangxi_bt"><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['title'];?>
</p>
		<p class="dtxiangxi_date"><span>作者：<?php if ($_smarty_tpl->tpl_vars['ninfor']->value['author']) {?><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['author'];?>
<?php } else { ?>雕之艺<?php }?></span><span>日期  ：<?php echo $_smarty_tpl->tpl_vars['ninfor']->value['addtime'];?>
</span></p>
		
		<div class="dtxiangxi_nr">
			<p><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['content'];?>
</p>
			
		</div>
	</div>
	
</div>

<!--最顶部--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
