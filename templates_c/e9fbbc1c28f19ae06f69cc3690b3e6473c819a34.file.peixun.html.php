<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 10:46:49
         compiled from ".\templates\peixun.html" */ ?>
<?php /*%%SmartyHeaderCode:697954cf35569dc050-21378517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9fbbc1c28f19ae06f69cc3690b3e6473c819a34' => 
    array (
      0 => '.\\templates\\peixun.html',
      1 => 1422874006,
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
    'type' => 0,
    'peixun' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf3556aaf384_51002450')) {function content_54cf3556aaf384_51002450($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\diaozhiyi\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�Ϻ���֮������-������ѵ-��ü��ѵ</title>
<meta name="keywords" content="��֮��������ѵ,��֮����ü��ѵ,,��ü,Ư��" />
<meta name="description" content="�Ϻ���֮���������Ϻ������һƷ�ƣ�Ҳ��ȫ��������������֮һ��ӵ�й��ʶ���������ר�ң���Ӳ�ļ�����ʵ�ݵļ۸�õ��Ϻ����尮���ߵ�һ�º�����������Ŀ�У���ü����ü��Ư����������ѵ�������" />
<link type="text/css" rel="stylesheet" href="../css/style.css" />
<link type="text/css" rel="stylesheet" href="../css/pages.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
</head>

<body>
<!--���logo-->
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--banner-->
<div id="banner"></div>

<!--������ѵ����ʽ��ü��ѵ�б�-->
<div id="px">
	<div class="px_list">
		<ul>
			<li<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?> class="hover3"<?php }?>><a href="?type=1">������ѵ</a><img src="../img/xiatou.png" /></li>
			<li<?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?> class="hover3"<?php }?>><a href="?type=2">��ʽ��ü��ѵ</a><img src="../img/xiatou.png" /></li>
		</ul>
		<div class="clear"></div>
	</div>
	
	<div class="pxck">
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
				<div class="pxck_img"><a href="pxinfor.php?id=<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['logo'];?>
" width="230" /></a></div>
				<div class="pxck_km">
					<p class="km_bt"><a href="pxinfor.php?id=<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</a></p>
					<p class="km_xz">ѧ�ƣ�<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['xuezhi'];?>
����</p>
					<p class="km_jg"><span><?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['feiyong'];?>
</span>Ԫ</p>
					<p class="km_bm">�������ߣ�021-53061027</p>
				</div>
				<div class="pxck_ck">
					<p class="ck_bt">��Ҫ�γ�</p>
					<p class="ck_nr"><?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['kecheng'];?>
</p>
				</div>
				<div class="pxck_ys">
					<p class="ys_bt">�γ�����</p>
					<p class="ys_nr"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['ys_content'],100);?>
</p>
				</div>
			</li>
		<?php endfor; endif; ?>	
		</ul>
	
	</div>
	
</div>

<!--������ѵ-->
<div id="wxpx">
	
</div>

<!--���--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
