<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?php echo base_url();?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script src="<?=base_url()?>kindeditor/kindeditor.js"></script>
<script src="<?=base_url()?>WdatePicker/WdatePicker.js"></script>
<script src="<?=base_url()?>kindeditor/lang/zh_CN.js"></script>
<script>
KindEditor.ready(function(K) {
		window.editor = K.create('#content');
});

</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
	font-size:12px;
}
-->
</style>
<title>师资力量</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?php echo base_url();?>images/mail_leftbg.gif"><img src="<?php echo base_url();?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?php echo base_url();?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">师资力量</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?php echo base_url();?>images/mail_rightbg.gif"><img src="<?php echo base_url();?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?php echo base_url();?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	
<?php if($act=='list'){?>
   <table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px">
    <tr bgcolor="#ffffff" height="40">
    	<td width="100" align="center">ID</td>
        <td width="220" align="center">教师姓名</td>
        <td width="220" align="center">教师职位</td>
        <td width="120" align="center">编辑</td>
    </tr>
   <?php foreach($datalist as $item):?>
   <tr bgcolor="#ffffff" height="40">
    	<td width="100" align="center"><?=$item['id']?></td>
        <td width="220" align="center"><?=$item['name']?></td>
        <td width="220" align="center"><?=$item['zhiwei']?></td>
        <td width="120" align="center"><a href="<?=site_url('teacher/edit/'.$item['id'])?>">编辑</a><span style="margin:0 10px">|</span><a href="<?=site_url('teacher/del/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
    </tr>
   <?php endforeach;?>
   <tr bgcolor="#FFFFFF"><td colspan="4" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
   </table>
<?php }elseif($act=='add'){?>
	<form method="post" action="<?=site_url('teacher/addsave')?>" onsubmit="return checkI();" enctype="multipart/form-data" >
	<table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px" width="980">
        <tr bgcolor="#ffffff" height="50">
            <td align="right" width="90">教师姓名&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="text" value="" name="name" id="name" /></td>
        </tr>
        <tr bgcolor="#ffffff" height="50">
            <td align="right">教师职位&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="text" value="" name="zhiwei" id="zhiwei" /></td>
        </tr>
         <tr bgcolor="#ffffff" height="50">
            <td align="right">个人图片&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="file"  name="pic"/>187*187</td>
        </tr>
        <tr bgcolor="#ffffff" height="50">
            <td align="right">个人简介&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<textarea name="infor" style="width:700px; height:70px"></textarea></td>
        </tr>
         <tr bgcolor="#ffffff" height="60">
            <td colspan="2" style="padding-left:92px"><input type="submit" class="sub-c" value="提交" /></td>
        </tr>
   </table>
</form>
<?php }elseif($act=='edit'){?>
<form method="post" action="<?=site_url('teacher/editsave')?>" onsubmit="return checkI();" enctype="multipart/form-data">
    <table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px" width="980">
        <tr bgcolor="#ffffff" height="50">
            <td align="right" width="90">教师姓名&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="text" value="<?=$datainfo['name']?>" name="name" id="name" /><input type="hidden" name="id" value="<?=$datainfo['id']?>" /></td>
        </tr>
        <tr bgcolor="#ffffff" height="50">
            <td align="right">教师职位&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="text" value="<?=$datainfo['zhiwei']?>" name="zhiwei" id="zhiwei" /></td>
        </tr>
         <tr bgcolor="#ffffff" height="50">
            <td align="right">个人图片&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="file"  name="pic"/>187*187</td>
        </tr>
        <tr bgcolor="#ffffff" height="50">
            <td align="right">个人简介&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<textarea name="infor" style="width:700px; height:70px"><?=$datainfo['infor']?></textarea></td>
        </tr>
         <tr bgcolor="#ffffff" height="60">
            <td colspan="2" style="padding-left:92px"><input type="submit" class="sub-c" value="提交" /></td>
        </tr>
   </table>
</form>
<?php }?>
    </td>
    <td background="<?php echo base_url();?>images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="<?php echo base_url();?>images/mail_leftbg.gif"><img src="<?php echo base_url();?>images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="<?php echo base_url();?>images/buttom_bgs.gif"><img src="<?php echo base_url();?>images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="<?php echo base_url();?>images/mail_rightbg.gif"><img src="<?php echo base_url();?>images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
</html>