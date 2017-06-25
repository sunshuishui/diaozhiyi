<?php
if($act=='aboutus'){
	$listtext='关于我们';	
}elseif($act=='contrust'){
	$listtext='联系我们';		
}elseif($act=='linian'){
	$listtext='品牌理念';		
}
?>
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
		window.editor = K.create('#infor');
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
<title><?=$listtext?></title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?php echo base_url();?>images/mail_leftbg.gif"><img src="<?php echo base_url();?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?php echo base_url();?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt"><?=$listtext?></div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?php echo base_url();?>images/mail_rightbg.gif"><img src="<?php echo base_url();?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?php echo base_url();?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">   	
<?php if($act=='aboutus'){?>
  <form method="post" action="<?=site_url('customer/editsave/aboutus')?>" enctype="multipart/form-data" >
	<table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px" width="980">
      	<tr bgcolor="#ffffff" height="50">
            <td align="right">图片&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<input type="file"  name="pic"/></td>
        </tr>
        <tr bgcolor="#ffffff" height="50">
            <td align="right">关于我们&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;<textarea name="infor" style="width:435px; height:400px"><?=$datainfo['infor']?></textarea></td>
        </tr>
         <tr bgcolor="#ffffff" height="60">
            <td colspan="2" style="padding-left:92px"><input type="submit" class="sub-c" value="提交" /></td>
        </tr>
   </table>
</form>
<?php }elseif($act=='contrust'){?>
	 <form method="post" action="<?=site_url('customer/editsave/contrust')?>" enctype="multipart/form-data" >
	<table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px" width="880">
      	<tr bgcolor="#ffffff" height="50">
            <td align="left">&nbsp;&nbsp;联系我们</td>
        </tr>
        <tr bgcolor="#ffffff" height="50">
           
            <td>&nbsp;&nbsp;<textarea name="infor" style="width:810px; height:400px"><?=$datainfo['infor']?></textarea></td>
        </tr>
         <tr bgcolor="#ffffff" height="60">
            <td colspan="2" style="padding-left:92px"><input type="submit" class="sub-c" value="提交" /></td>
        </tr>
   </table>
</form>
<?php }elseif($act=='linian'){?>
 <form method="post" action="<?=site_url('customer/editsave/linian')?>"  enctype="multipart/form-data" >
        <table cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin-top:15px" width="980">
            <tr bgcolor="#ffffff" height="50">
                <td align="right">图片&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<input type="file"  name="pic"/></td>
            </tr>
            <tr bgcolor="#ffffff" height="50">
                <td align="right">品牌理念&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<textarea name="infor" style="width:435px; height:400px"><?=$datainfo['infor']?></textarea></td>
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