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
<?php if ($_valid && !is_callable('content_54cef3eeb73540_71558156')) {function content_54cef3eeb73540_71558156($_smarty_tpl) {?><!--���logo-->
<div id="top">
	<div class="top_cont">
		<span class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
"><img src="img/logo.png" /></a></span><span class="dianhua"><img src="img/dianhua.png" /></span>
	</div>
</div>

<!--����-->
<div id="navigation">
	<div class="nav">
		<ul>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='index') {?> class="hover2"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">��ҳ</a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='customer'||$_smarty_tpl->tpl_vars['hovernav']->value=='news') {?> class="hover2"<?php }?>><a href="customer.php?type=1">�߽���֮��</a>
				<div class="menu">
					<p><a href="customer.php?type=1">��������</a></p>
					<p><a href="news.php">���Ŷ�̬</a></p>
					<p><a href="customer.php?type=2">Ʒ������</a></p>
					<p><a href="customer.php?type=3">��ϵ����</a></p>
				</div>
			</li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='peixun') {?> class="hover2"<?php }?>><a href="peixun.php?type=1">������ѵ</a>
				<div class="menu">
					<p><a href="peixun.php?type=1">������ѵ</a></p>
					<p><a href="peixun.php?type=2">��ʽ��ü��ѵ</a></p>
				</div>
			</li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='product') {?> class="hover2"<?php }?>><a href="product.php">�����Ʒ</a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='zuopin') {?> class="hover2"<?php }?>><a href="zuopin.php">��Ʒչʾ</a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='msmd') {?> class="hover2"<?php }?>><a href="msmd.php">��ʦ����</a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['hovernav']->value=='doubt') {?> class="hover2"<?php }?>><a href="doubt.php">��������</a></li>
			<li><a href="customer.php?type=3">��ϵ����</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div><?php }} ?>
