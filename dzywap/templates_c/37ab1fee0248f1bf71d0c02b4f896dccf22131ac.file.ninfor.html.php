<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 10:54:51
         compiled from ".\templates\ninfor.html" */ ?>
<?php /*%%SmartyHeaderCode:2992454cf46286d3189-40565829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ab1fee0248f1bf71d0c02b4f896dccf22131ac' => 
    array (
      0 => '.\\templates\\ninfor.html',
      1 => 1422874488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2992454cf46286d3189-40565829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf46287ae078_42444234',
  'variables' => 
  array (
    'ninfor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf46287ae078_42444234')) {function content_54cf46287ae078_42444234($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['title'];?>
-�Ϻ���֮���������</title>
<meta name="keywords" content="��֮������,�Ϻ�����,��ü,��ü,Ư��" />
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

<!--�������ǡ����Ŷ�̬�б�-->
<div id="zj">
	<div class="zj_list">
		<a href="customer.php?type=1">��������</a><a href="news.php" class="dangqian">���Ŷ�̬</a><a href="customer.php?type=2">Ʒ������</a><a href="customer.php?type=3">��ϵ����</a>
	</div>
</div>

<!--���Ŷ�̬-->
<div id="aboutus">
	<p class="biaoti">��ҳ&nbsp;&nbsp;/&nbsp;&nbsp;�߽���֮��&nbsp;&nbsp;/&nbsp;&nbsp;���Ŷ�̬</p>
	<div class="dtxiangxi">
		<p class="dtxiangxi_bt"><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['title'];?>
</p>
		<p class="dtxiangxi_date"><span>���ߣ�<?php if ($_smarty_tpl->tpl_vars['ninfor']->value['author']) {?><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['author'];?>
<?php } else { ?>��֮��<?php }?></span><span>����  ��<?php echo $_smarty_tpl->tpl_vars['ninfor']->value['addtime'];?>
</span></p>
		
		<div class="dtxiangxi_nr">
			<p><?php echo $_smarty_tpl->tpl_vars['ninfor']->value['content'];?>
</p>
			
		</div>
	</div>
	
</div>

<!--���--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
