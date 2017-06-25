<?php /* Smarty version Smarty-3.1.18, created on 2015-02-04 02:22:54
         compiled from ".\templates\doubtinfor.html" */ ?>
<?php /*%%SmartyHeaderCode:664854cf472d110369-25046348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24115e4d05d184bfda1242b299ed4913aff99b8e' => 
    array (
      0 => '.\\templates\\doubtinfor.html',
      1 => 1423016573,
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
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf472d1f2b49_73971801')) {function content_54cf472d1f2b49_73971801($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<title><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['title'];?>
-上海雕之艺纹绣-触屏版</title>
<meta name="keywords" content="雕之艺纹绣,上海纹绣,纹眉,绣眉,漂唇" />
<meta name="description" content="上海雕之艺纹绣是上海纹绣第一品牌，也是全国最早的纹绣机构之一，拥有国际顶级的纹绣专家，过硬的技术，实惠的价格得到上海纹绣爱好者的一致好评。服务项目有：纹眉、绣眉、漂唇、纹绣培训、纹身等" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/pages.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/koala.min.1.5.js"></script>
</head>

<body>

<!--最顶部-->
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<!--走进雕之艺--->
<div id="zj">
	<div class="zj_list">
		<a href="customer.php?type=1"<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?> class="dangqian"<?php }?>>关于我们</a><a href="news.php" class="dangqian">新闻动态</a><a href="customer.php?type=2"<?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?> class="dangqian"<?php }?>>品牌理念</a><a href="customer.php?type=3"<?php if ($_smarty_tpl->tpl_vars['type']->value==3) {?> class="dangqian"<?php }?>>联系我们</a>
	</div>
</div>

<div id="zj_cont">
	
	<div class="dtxiangxi22">
		<p class="dtxiangxi_bt22"><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['title'];?>
</p>
		<p class="dtxiangxi_date22"><span>作者：<?php echo $_smarty_tpl->tpl_vars['ninfor']->value['author'];?>
</span><span>日期  ：<?php echo $_smarty_tpl->tpl_vars['ninfor']->value['addtime'];?>
</span></p>
		<div class="dtxiangxi_nr22">
			<?php echo $_smarty_tpl->tpl_vars['ninfor']->value['content'];?>

		</div>
	</div>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html>
<?php }} ?>
