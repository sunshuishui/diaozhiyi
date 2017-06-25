<?php /* Smarty version Smarty-3.1.18, created on 2015-02-03 07:41:41
         compiled from ".\templates\pxinfor.html" */ ?>
<?php /*%%SmartyHeaderCode:2215954cf48c19e6a00-74687069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e917fd517e1298553a36bfe3bc4be3647d0c532' => 
    array (
      0 => '.\\templates\\pxinfor.html',
      1 => 1422947336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2215954cf48c19e6a00-74687069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf48c1a4c4f4_92924986',
  'variables' => 
  array (
    'pxinfor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf48c1a4c4f4_92924986')) {function content_54cf48c1a4c4f4_92924986($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<title><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['title'];?>
-上海雕之艺纹绣-纹绣项目-触屏版</title>
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


<!--小导航--->
<div id="xiaonav">
	<p class="biaoti" style="padding-left:0%;margin-bottom:2%;">首页&nbsp;&nbsp;/&nbsp;&nbsp;纹绣项目</p>
</div>

<div id="zj_cont">
	
	<div class="wxpx_xiaji">
		<p class="wxpx_xiaji_bt"><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['title'];?>
</p>
		<p class="wxpx_xiaji_img"><img src="../uploads/<?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['pic_thumb'];?>
" /></p>
		<div class="wxpx_xiaji_js">
			<ul>
				<li><p>培训周期</p><p class="style9"><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['xuezhi'];?>
个月</p></li>
				<li><p>培训费用</p><p class="style9"><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['feiyong'];?>
元</p></li>
				<li style="border:none; font-size:14px; color:#745d4e;padding-top:10px; text-align:left;"><p>咨询热线</p><p>021&mdash;53061027</p></li>
			</ul>
			<div class="clear"></div>
		</div>
		
		<div class="wxpx_xiaji_kc">
			<p class="bt">培训课程</p>
			<?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['px_content'];?>

		</div>
		
		<div class="wxpx_xiaji_kc">
			<p class="bt">我们的优势</p>
			<?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['ys_content'];?>

		</div>
	</div>
	
</div>


<!--最底部菜单-->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
