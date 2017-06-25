<?php /* Smarty version Smarty-3.1.18, created on 2015-02-03 07:41:05
         compiled from ".\templates\customer.html" */ ?>
<?php /*%%SmartyHeaderCode:1897654cf24f17421f2-63796914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7caf9b18147ae904792487ccd172e5ae330c7a9c' => 
    array (
      0 => '.\\templates\\customer.html',
      1 => 1422949263,
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
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<title>上海雕之艺纹绣-官网-触屏版</title>
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
		<a href="customer.php?type=1"<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?> class="dangqian"<?php }?>>关于我们</a><a href="news.php">新闻动态</a><a href="customer.php?type=2"<?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?> class="dangqian"<?php }?>>品牌理念</a><a href="customer.php?type=3"<?php if ($_smarty_tpl->tpl_vars['type']->value==3) {?> class="dangqian"<?php }?>>联系我们</a>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
<div id="zj_cont">
	<div class="dtxiangxi">
		<p class="dtxiangxi_bt">雕之艺简介</p>
		<p class="dtxiangxi_img"><img src="../uploads/<?php echo $_smarty_tpl->tpl_vars['customer']->value['pic'];?>
" /></p>
		<div class="dtxiangxi_nr">
			<?php echo $_smarty_tpl->tpl_vars['customer']->value['infor'];?>

			
		</div>
	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>
<div id="zj_cont">
	<div class="dtxiangxi">
		<p class="dtxiangxi_bt">品牌理念</p>
		<p class="dtxiangxi_img"><img src="../uploads/<?php echo $_smarty_tpl->tpl_vars['customer']->value['pic'];?>
" /></p>
		<div class="dtxiangxi_nr">
			<?php echo $_smarty_tpl->tpl_vars['customer']->value['infor'];?>

		</div>
	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==3) {?>

<script>
	$(function(){
		$('.lianxi table:eq(0)').css({"display":"none"});	
		$td1=$('.lianxi table:eq(0) tr:eq(1) td:eq(0)').html();
		$td2=$('.lianxi table:eq(0) tr:eq(1) td:eq(1)').html();
		$('.lianxi table:eq(1) tr:eq(0) td:eq(0)').html($td1);
		$('.lianxi table:eq(1) tr:eq(2) td:eq(0)').html($td2);
	})
</script>

<div id="zj_cont">
	<div class="lianxi">
		<?php echo $_smarty_tpl->tpl_vars['customer']->value['infor'];?>

        <table width="100%">
        	<tr>
            	<td bgcolor="#FFFFFF" style="padding-left:10px; padding-bottom:15px;"></td>
            </tr>
            <tr><td height="10"></td></tr>
            <tr>
            	<td bgcolor="#FFFFFF" style="padding-left:10px; padding-bottom:15px;"></td>
            </tr>
        </table>
	</div>
</div>
<?php }?>
<!--最底部菜单-->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
