<?php
if($act=='all'){
	$listText='关于';	
}elseif($act=='lc'){
	$listText='公司历程';
}elseif($act=='ms'){
	$listText='服务模式';
}elseif($act=='ai'){
	$listText='爱在溢起';
}elseif($act=='ry'){
	$listText='企业荣誉';
}elseif($act=='wh'){
	$listText='公司文化';
}elseif($act=='hezuo'){
	$listText='合作伙伴';
}elseif($act=='yjy'){
	$listText='研究院';
}elseif($act=='peixun'){
	$listText='培训基地';
}elseif($act=='zhuanye'){
	$listText='专业培训';
}elseif($act=='zhuanti'){
	$listText='专题培训';
}elseif($act=='jingyao'){
	$listText='精要培训';
}elseif($act=='gangwei'){
	$listText='岗位培训';
}elseif($act=='about_ziben'){
	$listText='关于资本';
}elseif($act=='core_strength'){
	$listText='核心竞争力';
}elseif($act=='investment_strategy'){
	$listText='投资策略';
}elseif($act=='funds_series'){
	$listText='基金系列';
}elseif($act=='track_record'){
	$listText='过往案例';
}elseif($act=='about_zichan'){
	$listText='关于资产';
}elseif($act=='full_model'){
	$listText='产业链';
}elseif($act=='externally_work_together'){
	$listText='合作伙伴';
}elseif($act=='about_build'){
	$listText='关于建筑';
}elseif($act=='core_advantage'){
	$listText='核心优势';
}elseif($act=='our_college'){
	$listText='学院';
}elseif($act=='work_together'){
	$listText='合作伙伴';
}elseif($act=='vision'){
	$listText='公司愿景';
}elseif($act=='servicearea'){
	$listText='服务领域';
}elseif($act=='qualifications'){
	$listText='公司资质';
}elseif($act=='core_advantage'){
	$listText='核心优势';
}


elseif($act=='disign_concept'){
	$listText='设计理念';
}elseif($act=='design_control'){
	$listText='设计控制';
}elseif($act=='service_scrope'){
	$listText='设计服务';
}elseif($act=='collaborative_platform'){
	$listText='协同平台';
}elseif($act=='support'){
	$listText='支持平台';
}

elseif($act=='idea_goal'){
	$listText='理念与目标';
}elseif($act=='training_system'){
	$listText='培训体系';
}elseif($act=='promotion'){
	$listText='晋升体系';
}elseif($act=='organization'){
	$listText='组织与实施';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script src="<?=base_url()?>kindeditor/kindeditor.js"></script>
<script src="<?=base_url()?>kindeditor/lang/zh_CN.js"></script>
<script>
KindEditor.ready(function(K) {
		window.editor = K.create('#company_profile');
		window.editor = K.create('#our_mission');
		window.editor = K.create('#company_scale');
		window.editor = K.create('#company_history');
		window.editor = K.create('#service_model');
		window.editor = K.create('#love');
		window.editor = K.create('#corporate_culture');
		window.editor = K.create('#partner');
		window.editor = K.create('#research_institute');
		window.editor = K.create('#training_base');
		window.editor = K.create('#zhuanti');
		window.editor = K.create('#zhuanye');
		window.editor = K.create('#gangwei');
		window.editor = K.create('#jingyao');
		window.editor = K.create('#about_ziben');
		window.editor = K.create('#core_strength');
		window.editor = K.create('#investment_strategy');
		window.editor = K.create('#funds_series');
		window.editor = K.create('#track_record');
		
		window.editor = K.create('#externally_work_together');
		window.editor = K.create('#full_model');
		window.editor = K.create('#about_zichan');
		
		window.editor = K.create('#about_build');
		window.editor = K.create('#core_advantage');
		window.editor = K.create('#our_college');
		window.editor = K.create('#work_together');
		window.editor = K.create('#vision');
		window.editor = K.create('#servicearea');
		window.editor = K.create('#qualifications');
		
		window.editor = K.create('#disign_concept');
		window.editor = K.create('#design_control');
		window.editor = K.create('#service_scrope');
		window.editor = K.create('#collaborative_platform');
		window.editor = K.create('#support');
		
		window.editor = K.create('#idea_goal');
		window.editor = K.create('#training_system');
		window.editor = K.create('#promotion');
		window.editor = K.create('#organization');
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
<title>广告管理</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?=base_url()?>images/mail_leftbg.gif"><img src="<?=base_url()?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?=base_url()?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt"><?=$listText?></div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?=base_url()?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    <?php if($act=='all'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;">企业介绍：<textarea id="company_profile" name="company_profile" style="width:735px; height:340px;"><?=$datainfo['company_profile']?></textarea></td>
            </tr>
            
            <tr>
                <td align="left" style="padding-top:25px">我们的使命：<textarea id="our_mission" name="our_mission" style="width:735px; height:340px;"><?=$datainfo['our_mission']?></textarea></td>
            </tr>
            <tr>
                <td align="left" style="padding-top:25px">公司规模：<textarea id="company_scale" name="company_scale" style="width:735px; height:340px;"><?=$datainfo['company_scale']?></textarea></td>
            </tr>
            <tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="company_profile,our_mission,company_scale" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='lc'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="company_history" name="company_history" style="width:735px; height:540px;"><?=$datainfo['company_history']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="company_history" /></td>
            </tr>
        </table>
    </form>
     <?php }elseif($act=='ms'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="service_model" name="service_model" style="width:735px; height:540px;"><?=$datainfo['service_model']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="service_model" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='ai'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="love" name="love" style="width:735px; height:540px;"><?=$datainfo['love']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="love" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='wh'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    		<tr><td><a href="<?=site_url('wenhua/wlist')?>">团队活动</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=site_url('environment/index')?>">工作环境</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="corporate_culture" name="corporate_culture" style="width:735px; height:540px;"><?=$datainfo['corporate_culture']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="corporate_culture" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='hezuo'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="partner" name="partner" style="width:735px; height:540px;"><?=$datainfo['partner']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="partner" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='yjy'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="research_institute" name="research_institute" style="width:735px; height:540px;"><?=$datainfo['research_institute']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="research_institute" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='peixun'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    		<tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">专题培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">专业培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">岗位培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">精要培训</a>|&nbsp;<a href="<?=site_url('photo/index')?>">学员掠影</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="training_base" name="training_base" style="width:735px; height:540px;"><?=$datainfo['training_base']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="training_base" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='zhuanti'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    		<tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">专题培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">专业培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">岗位培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">精要培训</a>|&nbsp;<a href="<?=site_url('photo/index')?>">学员掠影</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="zhuanti" name="zhuanti" style="width:735px; height:540px;"><?=$datainfo['zhuanti']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="zhuanti" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='zhuanye'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">专题培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">专业培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">岗位培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">精要培训</a>|&nbsp;<a href="<?=site_url('photo/index')?>">学员掠影</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="zhuanye" name="zhuanye" style="width:735px; height:540px;"><?=$datainfo['zhuanye']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="zhuanye" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='gangwei'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
           <tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">专题培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">专业培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">岗位培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">精要培训</a>|&nbsp;<a href="<?=site_url('photo/index')?>">学员掠影</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="gangwei" name="gangwei" style="width:735px; height:540px;"><?=$datainfo['gangwei']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="gangwei" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='jingyao'){?>
    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr><td height="40"><a href="<?=site_url('about/editlist/zhuanti')?>">专题培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/zhuanye')?>">专业培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/gangwei')?>">岗位培训</a>&nbsp;|&nbsp;<a href="<?=site_url('about/editlist/jingyao')?>">精要培训</a>|&nbsp;<a href="<?=site_url('photo/index')?>">学员掠影</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="jingyao" name="jingyao" style="width:735px; height:540px;"><?=$datainfo['jingyao']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="jingyao" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='about_ziben' or $act=='core_strength' or $act=='investment_strategy' or $act=='funds_series' or $act=='track_record' or $act=='externally_work_together' or $act=='full_model' or $act=='about_zichan'){?>
    <form action="<?=site_url('about/editjectsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="<?=$act?>" name="<?=$act?>" style="width:735px; height:540px;"><?=$datainfo[$act]?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="<?=$act?>" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='about_build' or $act=='vision' or $act=='servicearea' or $act=='qualifications'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr><td height="40"><a href="<?=site_url('about/buildlist/vision')?>">公司愿景</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/servicearea')?>">服务领域</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/qualifications')?>">资质</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="<?=$act?>" name="<?=$act?>" style="width:735px; height:540px;"><?=$datainfo[$act]?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="<?=$act?>" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='core_advantage'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    <tr><td height="40"><a href="<?=site_url('about/buildlist/disign_concept')?>">设计理念</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/design_control')?>">设计控制</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/service_scrope')?>">设计服务</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/collaborative_platform')?>">协同平台</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/support')?>">支持平台</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="core_advantage" name="core_advantage" style="width:735px; height:540px;"><?=$datainfo['core_advantage']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="core_advantage" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='disign_concept' or $act=='design_control' or $act=='service_scrope' or $act=='collaborative_platform' or $act=='support'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    <tr><td height="40"><a href="<?=site_url('about/buildlist/disign_concept')?>">设计理念</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/design_control')?>">设计控制</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/service_scrope')?>">设计服务</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/collaborative_platform')?>">协同平台</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/support')?>">支持平台</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="<?=$act?>" name="<?=$act?>" style="width:735px; height:540px;"><?=$datainfo[$act]?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="<?=$act?>" /></td>
            </tr>
        </table>
    </form>
     <?php }elseif($act=='idea_goal' or $act=='training_system' or $act=='promotion' or $act=='organization' or $act=='our_college'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    <tr><td height="40"><a href="<?=site_url('about/buildlist/idea_goal')?>">理念与目标</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/training_system')?>">培训体系</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/promotion')?>">晋升体系</a>&nbsp;|&nbsp;<a href="<?=site_url('about/buildlist/organization')?>">组织与实施</a>&nbsp;|&nbsp;<a href="<?=site_url('train/tlist')?>">培训掠影</a></td></tr>
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="<?=$act?>" name="<?=$act?>" style="width:735px; height:540px;"><?=$datainfo[$act]?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="<?=$act?>" /></td>
            </tr>
        </table>
    </form>
    <?php }elseif($act=='work_together'){?>
    <form action="<?=site_url('about/editbuildsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
            <tr>
                <td align="left" style="padding-top:25px;"><textarea id="work_together" name="work_together" style="width:735px; height:540px;"><?=$datainfo['work_together']?></textarea></td>
            </tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="work_together" /></td>
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