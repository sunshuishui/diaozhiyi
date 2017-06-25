<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 10:57:37
         compiled from ".\templates\pxinfor.html" */ ?>
<?php /*%%SmartyHeaderCode:2215954cf48c19e6a00-74687069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e917fd517e1298553a36bfe3bc4be3647d0c532' => 
    array (
      0 => '.\\templates\\pxinfor.html',
      1 => 1422874655,
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
<title><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['title'];?>
-上海雕之艺-纹绣培训</title>
<meta name="keywords" content="雕之艺纹绣,上海纹绣,纹眉,绣眉,漂唇" />
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
	<p class="biaoti">首页&nbsp;&nbsp;/&nbsp;&nbsp;纹绣培训/&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['title'];?>
</p>
	<div class="wxpx_xiaji">
		<p class="wxpx_xiaji_bt"><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['title'];?>
</p>
		<p class="wxpx_xiaji_img"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['pic'];?>
" /></p>
		<div class="wxpx_xiaji_js">
			<ul>
				<li><p>培训周期</p><p class="style9"><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['xuezhi'];?>
个月</p></li>
				<li><p>培训费用</p><p class="style9"><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['feiyong'];?>
元</p></li>
				<li style="border:none; font-size:24px; color:#745d4e; width:200px; padding-top:10px;"><p>咨询热线</p><p>021—53061027</p></li>
			</ul>
			<div class="clear"></div>
		</div>
		
		<div class="wxpx_xiaji_kc">
        <p class="bt">培训课程</p>
			<?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['px_content'];?>

		</div>
		
		<div class="wxpx_xiaji_kc">
			<p class="bt">我们的优势</p>
			<p><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['ys_content'];?>
</p>
		</div>
        <div class="wxpx_xiaji_kc">
			<p class="bt">详情内容</p>
			<p><?php echo $_smarty_tpl->tpl_vars['pxinfor']->value['content'];?>
</p>
		</div>
	</div>
</div>

<!--最顶部--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html>
<?php }} ?>
