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
<title>�Ϻ���֮������-����-������</title>
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


<!--�߽���֮��--->
<div id="zj">
	<div class="zj_list">
		<a href="customer.php?type=1"<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?> class="dangqian"<?php }?>>��������</a><a href="news.php">���Ŷ�̬</a><a href="customer.php?type=2"<?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?> class="dangqian"<?php }?>>Ʒ������</a><a href="customer.php?type=3"<?php if ($_smarty_tpl->tpl_vars['type']->value==3) {?> class="dangqian"<?php }?>>��ϵ����</a>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
<div id="zj_cont">
	<div class="dtxiangxi">
		<p class="dtxiangxi_bt">��֮�ռ��</p>
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
		<p class="dtxiangxi_bt">Ʒ������</p>
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
<!--��ײ��˵�-->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
