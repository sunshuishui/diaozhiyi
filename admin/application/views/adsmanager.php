<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?php echo base_url();?>images/skin.css" rel="stylesheet" type="text/css" />
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

<title>������</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?php echo base_url();?>images/mail_leftbg.gif"><img src="<?php echo base_url();?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?php echo base_url();?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">������</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?php echo base_url();?>images/mail_rightbg.gif"><img src="<?php echo base_url();?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?php echo base_url();?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
     <?php if($act=='list'){?>
    	<table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
        <tr bgcolor="#FFFFFF"><td colspan="6" align="right" style="padding-right:30px" height="40"><a href="<?=site_url('ads/add')?>">��ӹ��</a></td></tr>
        	<tr bgcolor="#FFFFFF">
            	<td width="80" align="center" height="40">���</td>
                <td width="300" align="center">������</td>
                <td width="250" align="center">���ӵ�ַ</td>
                <td width="250" align="center">���λ��</td>
                <td width="100" align="center">����</td>
                <td width="150" align="center">����</td>
            </tr>
            <?php $i=0;foreach($adslist as $item):
			$i++;
			?>
           <tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor='#EFEFEF'" onmouseout="this.style.backgroundColor='#ffffff'">
            	<td width="80" align="center" height="50"><?=$i?></td>
                <td width="300" align="center"><?=$item['title']?></td>
                <td width="250" align="center"><?=$item['link']?></td>
                <td width="250" align="center"><?=$adsposation[$item['posation']]?></td>
                <td width="100" align="center"><?=$item['sort']?></td>
                <td width="150" align="center"><a href="<?=site_url('ads/edit/'.$item['id'])?>">�༭</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('ads/deleteads/'.$item['id'])?>" onclick="return confirm('ȷ��Ҫɾ����')">ɾ��</a></td>
            </tr>
            <?php endforeach;?>
        </table>
        <?php }elseif($act=='add'){?>
         <form action="<?=site_url('ads/addads')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    	<table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="80" height="50">�����⣺</td>
            <td><input type="text" style="width:240px" id="title" name="title" /></td>
        </tr>
        <tr>
        	<td width="80" height="50">���ӵ�ַ��</td>
            <td><input type="text" style="width:240px" id="link" name="link" /></td>
        </tr>
        <tr>
        	<td width="80" height="50">���λ�ã�</td>
            <td>
            <select name="posation" id="posation">
            <?php foreach($adsposation as $key=>$adsposation_):?>
            <option value="<?=$key?>"><?=$adsposation_?></option>
            <?php endforeach;?>
       		</select>
            </td>
        </tr>
       
        <tr>
        	<td height="70">���ͼƬ��</td>
            <td><input type="file" name="pic" /></td>
        </tr>
        <tr>
        	<td>չʾ����</td>
            <td><input type="text" style="width:70px" id="sort" name="sort" value="10" /></td>
        </tr>
        <tr>
        	<td valign="top"></td>
        	<td height="80"><input type="submit" value="��ӹ��"/> </td>
        </tr>
        </table>
        </form>
        <?php }elseif($act=='edit'){?>
         <form action="<?=site_url('ads/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    	<table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td width="80" height="50">�����⣺</td>
                <td><input type="text" style="width:240px" id="title" name="title" value="<?=$datainfo['title']?>" /><input type="hidden" value="<?=$datainfo['id']?>" id="id" name="id" /></td>
            </tr>
            <tr>
                <td width="80" height="50">���ӵ�ַ��</td>
                <td><input type="text" style="width:240px" id="link" name="link" value="<?=$datainfo['link']?>" /></td>
            </tr>
            <tr>
                <td width="80" height="50">���λ�ã�</td>
                <td>
                <select name="posation" id="posation">
                <?php foreach($adsposation as $key=>$adsposation_):?>
                <option value="<?=$key?>"<?php if($key==$datainfo['posation']){echo ' selected="selected"';}?>><?=$adsposation_?></option>
                <?php endforeach;?>
                </select>
                </td>
            </tr>
        <tr>
        	<td height="70">���ͼƬ��</td>
            <td><input type="file" name="pic" /></td>
        </tr>
        <tr>
        	<td>չʾ����</td>
            <td><input type="text" style="width:70px" id="sort" name="sort" value="<?=$datainfo['sort']?>" /></td>
        </tr>
        <tr>
        	<td valign="top"></td>
        	<td height="80"><input type="submit" value="�༭���"/> </td>
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