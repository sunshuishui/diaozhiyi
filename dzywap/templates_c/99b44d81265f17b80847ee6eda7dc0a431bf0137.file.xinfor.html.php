<?php /* Smarty version Smarty-3.1.18, created on 2015-02-04 02:25:53
         compiled from ".\templates\xinfor.html" */ ?>
<?php /*%%SmartyHeaderCode:2934654cf47f5234686-39061913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b44d81265f17b80847ee6eda7dc0a431bf0137' => 
    array (
      0 => '.\\templates\\xinfor.html',
      1 => 1422947355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2934654cf47f5234686-39061913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf47f52d6638_27921411',
  'variables' => 
  array (
    'zinfor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf47f52d6638_27921411')) {function content_54cf47f52d6638_27921411($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<title>�Ϻ���֮������-<?php echo $_smarty_tpl->tpl_vars['zinfor']->value['title'];?>
-������</title>
<meta name="keywords" content="��֮������,�Ϻ�����,��ü,��ü,Ư��" />
<meta name="description" content="�Ϻ���֮���������Ϻ������һƷ�ƣ�Ҳ��ȫ��������������֮һ��ӵ�й��ʶ���������ר�ң���Ӳ�ļ�����ʵ�ݵļ۸�õ��Ϻ����尮���ߵ�һ�º�����������Ŀ�У���ü����ü��Ư����������ѵ�������" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/pages.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/koala.min.1.5.js"></script>
</head>

<body>

<!--���-->
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--С����--->
<div id="xiaonav">
	<p class="biaoti">��ҳ&nbsp;&nbsp;/&nbsp;&nbsp;������Ŀ</p>
</div>

<div id="zj_cont">
	
	<div class="dtxiangxi22">
		<p class="dtxiangxi_bt22" style="padding-top:5px;"><?php echo $_smarty_tpl->tpl_vars['zinfor']->value['title'];?>
</p>
		<p class="dtxiangxi_date22"></p>
		<div class="dtxiangxi_nr22">
			<?php echo $_smarty_tpl->tpl_vars['zinfor']->value['content'];?>

		</div>
	</div>
	
</div>


<!--��ײ��˵�-->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
