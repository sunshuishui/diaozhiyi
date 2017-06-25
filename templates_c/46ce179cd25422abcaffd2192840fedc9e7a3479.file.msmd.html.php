<?php /* Smarty version Smarty-3.1.18, created on 2015-02-02 10:50:54
         compiled from ".\templates\msmd.html" */ ?>
<?php /*%%SmartyHeaderCode:2491254cf3dd94b1ae2-88830861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ce179cd25422abcaffd2192840fedc9e7a3479' => 
    array (
      0 => '.\\templates\\msmd.html',
      1 => 1422874251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2491254cf3dd94b1ae2-88830861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cf3dd95826d4_03037468',
  'variables' => 
  array (
    'type' => 0,
    'teacher' => 0,
    'store' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf3dd95826d4_03037468')) {function content_54cf3dd95826d4_03037468($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\diaozhiyi\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>上海雕之艺纹绣-官网-名师名店</title>
<meta name="keywords" content="雕之艺纹绣,分店查询,名师名店,绣眉,漂唇" />
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


<!--纹绣名师、纹绣名店列表-->
<div id="ms">
	<div class="px_list">
		<ul>
			<li<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?> class="hover3"<?php }?>><a href="?type=1">纹绣名师</a><img src="../img/xiatou.png" /></li>
			<li<?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?> class="hover3"<?php }?>><a href="?type=2">纹绣名店</a><img src="../img/xiatou.png" /></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
<!--纹绣名师-->
<div id="ms_list">
	<div class="ms_list">
	<div class="wc960" style="padding-top:60px; margin-top:0px;">
					<div id="wrapBox1" class="wrapBox" style="height:auto;">			
						<ul id="count1" class="count" style="height:auto;">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['teacher']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div style="background:url(uploads/<?php echo $_smarty_tpl->tpl_vars['teacher']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic'];?>
) no-repeat center center"><img src="../img/jybg.png" /></div>
								<div class="jy_js">
									<p class="styleone"><?php echo $_smarty_tpl->tpl_vars['teacher']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['name'];?>
</p><p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['teacher']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['infor'],100);?>
</p>
								</div>
								<div class="zx"><a href="#">立即咨询</a></div>					
							</li>
                            <?php endfor; endif; ?>
							
						</ul>	
						<div class="clear"></div>			
					</div>
					
					<a id="right1" class="prev icon btn" style="position:absolute; top:0px; right:0px;"></a>
					<a id="left1" class="next icon btn" style="position:absolute; top:0px; right:50px;"></a>			
			</div>
			<script type="text/javascript" src="../js/scroll.1.3.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
				
					$("#count1").dayuwscroll({
						parent_ele:'#wrapBox1',
						list_btn:'#tabT04',
						pre_btn:'#left1',
						next_btn:'#right1',
						path: 'left',
						auto:true,
						time:3000,
						num:4,
						gd_num:4,
						waite_time:1000
					});
				
				});
			</script>
	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>
<div id="ms_list" style="margin-bottom:100px;">
	<div class="ms_list">
	<div class="wc960" style="padding-top:80px; margin-top:0px; padding-left:58px;">
					<div id="wrapBox1" class="wrapBox" style="height:auto;">			
						<ul id="count1" class="count" style="height:auto;">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['store']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<li class="yy" style="width:880px;margin:0px;">
							
								<div class="yy_img"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['store']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic1'];?>
" /></div>
								
								<div class="yy_js">
								
									<p class="js_imgg"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['store']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic2'];?>
"  style="margin-right:5px;" /><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['store']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic3'];?>
" /></p>
									
									<div class="cjwt_list">
										<p class="cjwt_list_bt"><?php echo $_smarty_tpl->tpl_vars['store']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</p>
										<p class="cjwt_list_js"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['store']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['infor'],120);?>
</p>
									</div>
								</div>
							</li>
                            <?php endfor; endif; ?>
							
						</ul>	
						<div class="clear"></div>			
					</div>
					
					<a id="right1" class="prev icon btn" style="position:absolute; top:0px; right:80px;"></a>
					<a id="left1" class="next icon btn" style="position:absolute; top:0px; right:140px;"></a>			
			</div>
			<script type="text/javascript" src="../js/scroll.1.3.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
				
					$("#count1").dayuwscroll({
						parent_ele:'#wrapBox1',
						list_btn:'#tabT04',
						pre_btn:'#left1',
						next_btn:'#right1',
						path: 'left',
						auto:true,
						time:3000,
						num:1,
						gd_num:1,
						waite_time:1000
					});
				
				});
			</script>
	</div>
</div>
<?php }?>
<!--纹绣培训-->
<div id="wxpx">
	
</div>

<!--最顶部--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
