<?php /* Smarty version Smarty-3.1.18, created on 2015-02-03 07:23:26
         compiled from ".\templates\news.html" */ ?>
<?php /*%%SmartyHeaderCode:3091754cf2d305cf360-39438768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca7ca473dcec616ed1db812421624257316f514' => 
    array (
      0 => '.\\templates\\news.html',
      1 => 1422947285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3091754cf2d305cf360-39438768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf2d30645cd1_01582316',
  'variables' => 
  array (
    'type' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf2d30645cd1_01582316')) {function content_54cf2d30645cd1_01582316($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\diaozhiyi\\dzywap\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<title>上海雕之艺纹绣-新闻动态-触屏版</title>
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
	<div id="jiaocheng">
		<ul>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['article']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total']);
?>
			<li>
				<div class="jc_img"><a href="doubtinfor.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
"><img src="../uploads/<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic'];?>
" width="169" height="105" /></a></div>
				<div class="jc_nr">
					<p class="jc_nr_bt"><a href="doubtinfor.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</a></p>
					<p class="jc_nr_xx"><span>日期：<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['addtime'];?>
</span>作者：<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['author'];?>
</p>
					<p class="jc_nr_js"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['content'],40);?>
</p>
				</div>
				<div class="clear"></div>
			</li>
            <?php endfor; endif; ?>
		</ul>
	</div>
	
</div>


<!--最底部菜单-->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
