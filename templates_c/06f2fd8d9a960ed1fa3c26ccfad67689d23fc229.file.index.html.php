<?php /* Smarty version Smarty-3.1.18, created on 2015-04-21 07:02:47
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:80354cef3ee93ed74-32632831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1427969049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80354cef3ee93ed74-32632831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54cef3eeb08346_89151428',
  'variables' => 
  array (
    'ads' => 0,
    'news' => 0,
    'xiangmu' => 0,
    'peixun' => 0,
    'kecheng' => 0,
    'teacher' => 0,
    'doubt' => 0,
    'store' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cef3eeb08346_89151428')) {function content_54cef3eeb08346_89151428($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\wamp\\www\\diaozhiyi\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\diaozhiyi\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>上海雕之艺纹绣-官网-首页</title>
<meta name="keywords" content="雕之艺纹绣,上海纹绣,纹眉,绣眉,漂唇" />
<meta name="description" content="上海雕之艺纹绣是上海纹绣第一品牌，也是全国最早的纹绣机构之一，拥有国际顶级的纹绣专家，过硬的技术，实惠的价格得到上海纹绣爱好者的一致好评。服务项目有：纹眉、绣眉、漂唇、纹绣培训、纹身等" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--banner-->
<div id="Adv">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ads']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<div class="ImgList" style="background:url('uploads/<?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic'];?>
') center"><a <?php if ($_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['link']) {?>href="<?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['link'];?>
"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
"></a></div>
    <?php endfor; endif; ?>
	<ul class="button">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ads']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<li<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']==0) {?> class="hover"<?php }?>></li>
    <?php endfor; endif; ?>
	</ul>
</div>

<!--新闻资讯-->
<div id="newszixun">
	<div class="zixun_cont">
		<div class="zixun_cont_lb">
			<p class="lb_bt">新闻资讯<span>NEWS</span></p>
			
			<div class="bd_c4top">
				   <div class="bd_lbtn"></div>
				   <div class="bd_chgBox">
						<div class="bd_long">
							 <ul>
                             <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								  		<div class="xw">
											<div class="xw_img"><a href="ninfor.php?id=<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic'];?>
" width="170" height="105" /></a></div>
											<div class="xw_js">
												<p class="st"><a href="ninfor.php?id=<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</a></p>
												<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['content'],125);?>
</p>
											</div>
											<div class="xw_date"><p class="dateone"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['addtime'],'%d');?>
</p><p class="datetwo"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['addtime'],'%Y.%m');?>
</p></div>
										</div>
								  </li>
								  <?php endfor; endif; ?>
								  
							 </ul>
						</div>
				   </div>
				   <div class="bd_rbtn"></div>
	 		 </div>
			<script type="text/javascript" src="js/newsscroll.js" /></script>
		</div>
		<div class="zixun_cont_sj">
			<p class="sj_bt">手机端输入m.diaozhiyi.com访问</p>
			<p class="sj_wx"><span class="sj_wx_img"><img src="img/wx.jpg" /></span><span class="fw">访问手机版</span></p>
		</div>
		<div class="clear"></div>
	</div>
</div>



<!---精品项目-->
<div id="jp">
	<div class="jp_cont">
		<p class="bt"><span class="dabt">精品项目</span><span class="dabt22">Goods project</span></p>
		
		<div class="wc960">
					<div id="wrapBox1" class="wrapBox">			
						<ul id="count1" class="count">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['xiangmu']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<li class="qq">
								<a href="xinfor.php?id=<?php echo $_smarty_tpl->tpl_vars['xiangmu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
" class="img_wrap" title="<?php echo $_smarty_tpl->tpl_vars['xiangmu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
">
									<div class="cplist">
										<div class="cplist_img"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['xiangmu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic'];?>
" width="" height="" /></div>
										<div class="cplist_js">
											<p class="hh"><span class="xbt"><?php echo $_smarty_tpl->tpl_vars['xiangmu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</span><span class="jt"><img src="img/shang.png" /></span><div class="clear"></div></p>
											<p class="xx"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['xiangmu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['content'],45);?>
</p>
										</div>
									</div>
								
								</a>
								
							</li>
                            <?php endfor; endif; ?>
						</ul>				
					</div>
					
					<a id="right1" class="prev icon btn"></a>
					<a id="left1" class="next icon btn"></a>			</div>
			<script type="text/javascript" src="js/scroll.1.3.js"></script>
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

<!---纹绣培训-->
<div id="peixun">
	<div class="px">
		<p class="bt"><span class="dabt">纹绣培训</span><span class="dabt22">Wenxiu training</span></p>
		
		<div class="px_cont">
		
			<div class="px_bt">
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
					<li<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']==0) {?> class="hover"<?php } else { ?> class="px_bt_icon"<?php }?>>
						<p class="px_bt_icon"><?php if ($_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['type']==1) {?>纹绣培训<?php } else { ?>纹眉培训<?php }?></p>
						<div class="px_bt_js"><p class="style1"><?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</p><p>学制：<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['xuezhi'];?>
个月</p></div>
						<div class="clear"></div>
					</li>
                    <?php endfor; endif; ?>
				</ul>
			</div>
			
			<div class="px_nr">
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
				<div class="hide"<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']==0) {?> style="display:block"<?php }?>>
					<div class="hide_img"><a href="pxinfor.php?id=<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic_thumb'];?>
" height="325" /></a></div>
					<div class="hide_js">
						<p class="hide_jsbt"><?php echo $_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</p>
						<p style="margin-bottom:15px;"><span class="style2"><span class="style3">学制</span>：6个月</span><span class="style2"><span class="style3">费用</span>：5900</span></p>
						<div>
							<p class="style5">主要课程：</p>
							<p class="style6">
                            <?php $_smarty_tpl->tpl_vars['kecheng'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['kecheng']), null, 0);?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['hj'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hj']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['name'] = 'hj';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kecheng']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['hj']['total']);
?>
                            <span class="style4"><?php echo $_smarty_tpl->tpl_vars['kecheng']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hj']['index']];?>
</span>
                            <?php endfor; endif; ?>
                            </p>
							<div class="clear"></div>
						</div>
						<p class="style7">详细内容：</p>
						<p class="style8"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['peixun']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['px_content'],50);?>
<a href="#">【更多】</a></p>
						<a href="#" class="ljzixun">
								<p>立即咨询</p>
								<p style="font-size:13px;">consulting</p>
						</a>
					</div>
				</div>
			 <?php endfor; endif; ?>
			</div>
			<div class="clear"></div>
		</div>
		
		
	</div>
</div>


<!--精英团队--->
<div id="tuandui">
	<div class="td">
		<p class="bt"><span class="dabt">精英团队</span><span class="dabt22">Wenxiu masters</span></p>
	</div>
</div>

<div id="tuandui_nr">
	<div class="td_nr">
		<div class="td_nr_list">
			<ul>
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
) no-repeat center center"><img src="img/jybg.png" /></div>
					<div class="jy_js">
						<p class="styleone"><?php echo $_smarty_tpl->tpl_vars['teacher']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['name'];?>
</p><p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['teacher']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['infor'],50);?>
</p>
					</div>
					<div class="zx"><a href="#">立即咨询</a></div>
				</li>
				<?php endfor; endif; ?>
			</ul>
		</div>
	</div>
</div>


<!--常见问题和名师名店--->
<div id="wtmd">
	<div class="wtmd_cont">
	
		<div class="wt">
			<p class="bt" style="width:390px;"><span class="dabt">常见问题</span><span class="dabt22" style="width:150px;">Common problems</span></p>
			<div class="wt_cont">
				<ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['doubt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<li><a href="doubtinfor.php?id=<?php echo $_smarty_tpl->tpl_vars['doubt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['doubt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['doubt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'],18);?>
</a></li>
                <?php endfor; endif; ?>
				</ul>
			</div>
		</div>
		
		<div class="md">
			<p class="bt" style="width:590px;"><span class="dabt">名师名店</span><span class="dabt22" style="width:150px;">Common problems</span></p>
			<div class="md_cont">
				<ul>
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
					<li>
						<div class="md_cont_img"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['store']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['pic1'];?>
" width="150" /></div>
						<p class="md_cont_dd"><?php echo $_smarty_tpl->tpl_vars['store']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</p>
				</li>
               <?php endfor; endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>


<!--最顶部--->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
