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
<title>特色优势</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?php echo base_url();?>images/mail_leftbg.gif"><img src="<?php echo base_url();?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?php echo base_url();?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">纹绣项目</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?php echo base_url();?>images/mail_rightbg.gif"><img src="<?php echo base_url();?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?php echo base_url();?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	
<?php if($act=='list'){?>
   <table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px">
   <tr bgcolor="#FFFFFF"><td colspan="8" align="right" style="padding-right:30px" height="40"><a href="<?=site_url('xiangmu/add')?>">添加项目</a></td></tr>
    <tr bgcolor="#ffffff" height="40">
    	<td width="100" align="center">ID</td>
        <td width="220" align="center">项目标题</td>
        <td width="120" align="center">编辑</td>
    </tr>
   <?php foreach($datalist as $item):?>
   <tr bgcolor="#ffffff" height="40">
    	<td width="100" align="center"><?=$item['id']?></td>
        <td width="220" align="center"><?=$item['title']?></td>
        <td width="120" align="center"><a href="<?=site_url('xiangmu/edit/'.$item['id'])?>">编辑</a><span style="margin:0 10px">|</span><a href="<?=site_url('xiangmu/del/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
    </tr>
   <?php endforeach;?>
    <tr bgcolor="#FFFFFF"><td colspan="8" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
   </table>
<?php }elseif($act=='add'){?>
	<form method="post" action="<?=site_url('xiangmu/addsave')?>" onsubmit="return checkI();" enctype="multipart/form-data" >
	<table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px" width="580">
        <tr bgcolor="#ffffff" height="50">
            <td align="right">项目标题&nbsp;&nbsp;</td>
            <td width="530">&nbsp;&nbsp;<input type="text" value="" name="title" id="title" /></td>
        </tr>
        
       
        <tr bgcolor="#ffffff" height="50">
            <td align="right">项目图片&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="file"  name="pic"/>390*240</td>
        </tr>
     	<tr bgcolor="#ffffff" height="50">
            <td colspan="2"><textarea style="width:800px; height:420px" name="content" id="content"></textarea></td>
        </tr>
         <tr bgcolor="#ffffff" height="60">
            <td colspan="2" style="padding-left:92px"><input type="submit" class="sub-c" value="提交" /></td>
        </tr>
   </table>
</form>
<?php }elseif($act=='edit'){?>
	<form method="post" action="<?=site_url('xiangmu/editsave')?>" onsubmit="return checkI();" enctype="multipart/form-data">
    <table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px" width="580">
        <tr bgcolor="#ffffff" height="50">
            <td align="right">项目标题&nbsp;&nbsp;</td>
            <td width="530">&nbsp;&nbsp;<input type="text" value="<?=$datainfo['title']?>" name="title" id="title" /><input type="hidden" name="id" value="<?=$datainfo['id']?>" /></td>
        </tr>
       
        <tr bgcolor="#ffffff" height="50">
            <td align="right">项目图片&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="file"  name="pic"/>220*365</td>
        </tr>
     	<tr bgcolor="#ffffff" height="50">
            <td colspan="2"><textarea style="width:800px; height:420px" name="content" id="content"><?=$datainfo['content']?></textarea></td>
        </tr>
         <tr bgcolor="#ffffff" height="60">
            <td colspan="2" style="padding-left:92px"><input type="submit" class="sub-c" value="编辑" /></td>
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