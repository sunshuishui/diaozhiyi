<?php /* Smarty version Smarty-3.1.18, created on 2015-02-04 02:26:25
         compiled from ".\templates\peixun.html" */ ?>
<?php /*%%SmartyHeaderCode:697954cf35569dc050-21378517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9fbbc1c28f19ae06f69cc3690b3e6473c819a34' => 
    array (
      0 => '.\\templates\\peixun.html',
      1 => 1422947295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '697954cf35569dc050-21378517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf3556aaf384_51002450',
  'variables' => 
  array (
    'peixun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf3556aaf384_51002450')) {function content_54cf3556aaf384_51002450($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\diaozhiyi\\dzywap\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<title>上海雕之艺纹绣-纹绣培训-触屏版</title>
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
	<p class="biaoti" style="margin-bottom:2%;">首页&nbsp;&nbsp;/&nbsp;&nbsp;纹绣培训</p>
</div>

<div id="zj_cont">
	<div class="parttwo">
		<ul>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['peixun']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<a href="pxinfor.php?id=<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
">
					<div class="parttwo_img"><img src="../uploads/<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['logo'];?>
" /></div>
					<div class="parttwo_date"><p>学制：<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['xuezhi'];?>
个月</p><p><span><?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['feiyong'];?>
</span>元</p></div>
					<div class="parttwo_js">
						<p class="bt"><?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</p>
						<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['px_content'],30);?>
</p>
					</div>
					<div class="clear"></div>
				</a>
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
