<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 10:45:28
         compiled from ".\templates\customer.html" */ ?>
<?php /*%%SmartyHeaderCode:1897654cf24f17421f2-63796914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7caf9b18147ae904792487ccd172e5ae330c7a9c' => 
    array (
      0 => '.\\templates\\customer.html',
      1 => 1422873924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1897654cf24f17421f2-63796914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf24f17de895_97805283',
  'variables' => 
  array (
    'type' => 0,
    'customer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf24f17de895_97805283')) {function content_54cf24f17de895_97805283($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>上海雕之艺纹绣-走进雕之艺-<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>关于我们<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>品牌理念<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==3) {?>联系我们<?php }?></title>
<meta name="keywords" content="雕之艺纹绣,雕之艺纹绣简介,雕之艺简介,绣眉,漂唇" />
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

<!--关于我们、新闻动态列表-->
<div id="zj">
	<div class="zj_list">
		<a href="?type=1"<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?> class="dangqian"<?php }?>>关于我们</a><a href="news.php">新闻动态</a><a href="?type=2"<?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?> class="dangqian"<?php }?>>品牌理念</a><a href="?type=3"<?php if ($_smarty_tpl->tpl_vars['type']->value==3) {?> class="dangqian"<?php }?>>联系我们</a>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
<!--关于我们-->
<div id="aboutus">
	<p class="biaoti">首页&nbsp;&nbsp;/&nbsp;&nbsp;走进雕之艺/&nbsp;&nbsp;关于我们</p>
	<div class="aboutus_js">
		<div class="aboutus_js_img"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['customer']->value['pic'];?>
" /></div>
		<div class="aboutus_js_nr">
			<p class="teshu">雕之艺简介</p>
			<p><?php echo $_smarty_tpl->tpl_vars['customer']->value['infor'];?>
</p>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>
<div id="aboutus">
	<p class="biaoti">首页&nbsp;&nbsp;/&nbsp;&nbsp;走进雕之艺&nbsp;&nbsp;/&nbsp;&nbsp;品牌理念</p>
	<div class="linian">
		<p class="linian_bt"><span class="linian_rn">让你变得更美</span><span class="linian_pp">品牌理念</span></p>
		
		<div class="linian_js_nr">
			<p><?php echo $_smarty_tpl->tpl_vars['customer']->value['infor'];?>
</p>
		</div>
		
		<div class="linian_js_img"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['customer']->value['pic'];?>
" /></div>
		
		<div class="clear"></div>
	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==3) {?>
<div id="aboutus">
	<p class="biaoti">首页&nbsp;&nbsp;/&nbsp;&nbsp;走进雕之艺&nbsp;&nbsp;/&nbsp;&nbsp;联系我们</p>
	<div class="lianxi">
		<?php echo $_smarty_tpl->tpl_vars['customer']->value['infor'];?>

</div>
<?php }?>
<!--最顶部--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
