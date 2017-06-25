<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 11:04:57
         compiled from ".\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1232054cef3eeb6bbd4-48500465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993a4f4a79418d6aa41c40045b97b005c86ba121' => 
    array (
      0 => '.\\templates\\header.html',
      1 => 1422875092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1232054cef3eeb6bbd4-48500465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cef3eeb73540_71558156',
  'variables' => 
  array (
    'domain' => 0,
    'hovernav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cef3eeb73540_71558156')) {function content_54cef3eeb73540_71558156($_smarty_tpl) {?><!--最顶端logo-->
<div id="top">
	<div class="top_cont">
		<span class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
"><img src="img/logo.png" /></a></span><span class="dianhua"><img src="img/dianhua.png" /></span>
	</div>
</div>

<!--导航-->
<div id="navigation">
	<div class="nav">
		<ul>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='index') {?> class="hover2"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">首页</a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='customer'||$_smarty_tpl->tpl_vars['hovernav']->value=='news') {?> class="hover2"<?php }?>><a href="customer.php?type=1">走进雕之艺</a>
				<div class="menu">
					<p><a href="customer.php?type=1">关于我们</a></p>
					<p><a href="news.php">新闻动态</a></p>
					<p><a href="customer.php?type=2">品牌理念</a></p>
					<p><a href="customer.php?type=3">联系我们</a></p>
				</div>
			</li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='peixun') {?> class="hover2"<?php }?>><a href="peixun.php?type=1">纹绣培训</a>
				<div class="menu">
					<p><a href="peixun.php?type=1">纹绣培训</a></p>
					<p><a href="peixun.php?type=2">韩式纹眉培训</a></p>
				</div>
			</li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='product') {?> class="hover2"<?php }?>><a href="product.php">纹绣产品</a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='zuopin') {?> class="hover2"<?php }?>><a href="zuopin.php">作品展示</a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='msmd') {?> class="hover2"<?php }?>><a href="msmd.php">名师名店</a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='doubt') {?> class="hover2"<?php }?>><a href="doubt.php">常见问题</a></li>
			<li><a href="customer.php?type=3">联系我们</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div><?php }} ?>
