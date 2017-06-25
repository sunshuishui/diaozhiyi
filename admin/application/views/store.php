<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script src="<?=base_url()?>kindeditor/kindeditor.js"></script>
<script src="<?=base_url()?>kindeditor/lang/zh_CN.js"></script>
<script src="<?=base_url()?>WdatePicker/WdatePicker.js"></script>
<script>
KindEditor.ready(function(K) {
		/*window.editor = K.create('#content');*/
});
function checkInput(){
	if($("#title").val()==''){
		alert('请填写分店名称！');
		return false;	
	}	
	return true;
}
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
<title>名师名店</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?=base_url()?>images/mail_leftbg.gif"><img src="<?=base_url()?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?=base_url()?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt"><?php echo '名师名店';?></div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?=base_url()?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    <?php if($act=='list'){?>
    <table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="350" align="center">分店名称</td>
            <td width="150" align="center">操作</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=$item['title']?></td>
           <td align="center" height="50"><a href="<?=site_url('store/edit/'.$item['id'])?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('store/del/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
        </tr>
        <?php endforeach;?>
        <tr bgcolor="#FFFFFF"><td colspan="6" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('store/addsave')?>" method="post" onsubmit="return checkInput();" enctype="multipart/form-data">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="90" height="50">分店名称：</td>
            <td><input type="text" id="title" name="title" /></td>
        </tr>
        <tr>
        	<td width="90" height="50">左侧图片：</td>
            <td><input type="file" name="pic1" />270*340</td>
        </tr>
        <tr>
        	<td width="90" height="50">右侧图片1：</td>
            <td><input type="file" name="pic2" />285*180</td>
        </tr>
        <tr>
        	<td width="90" height="50">右侧图片2：</td>
            <td><input type="file" name="pic3" />285*180</td>
        </tr>
        <tr>
        	<td valign="top">店铺简介：</td>
            <td><textarea id="infor" name="infor" style="width:470px; height:98px;"></textarea></td>
        </tr>
       
        <tr>
        	<td valign="top"></td>
        	<td height="80"><input type="submit" value="添加"/> </td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
   <form action="<?=site_url('store/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
   <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="90" height="50">分店名称：</td>
            <td><input type="text" id="title" name="title"  value="<?=$datainfo['title']?>" /><input type="hidden" value="<?=$datainfo['id']?>" id="id" name="id" /></td>
        </tr>
        <tr>
        	<td width="90" height="50">左侧图片：</td>
            <td><input type="file" name="pic1" />270*340</td>
        </tr>
        <tr>
        	<td width="90" height="50">右侧图片1：</td>
            <td><input type="file" name="pic2" />285*180</td>
        </tr>
        <tr>
        	<td width="90" height="50">右侧图片2：</td>
            <td><input type="file" name="pic3" />285*180</td>
        </tr>
        <tr>
        	<td valign="top">店铺简介：</td>
            <td><textarea id="infor" name="infor" style="width:470px; height:98px;"><?=$datainfo['infor']?></textarea></td>
        </tr>
       
        <tr>
        	<td valign="top"></td>
        	<td height="80"><input type="submit" value="编辑"/> </td>
        </tr>
    </table>
    </form>
    <?php }?>
    </td>
    <td background="<?=base_url()?>images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="<?=base_url()?>images/mail_leftbg.gif"><img src="<?=base_url()?>images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="<?=base_url()?>images/buttom_bgs.gif"><img src="<?=base_url()?>images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
</html>