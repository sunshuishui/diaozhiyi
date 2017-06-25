<?php
include '../_include/smarty.php';
include '../_include/db_mysql.class.php';
include '../_include/public.function.class.php';
include 'common.php';


$sql="select * from peixun order by id desc";
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['px_content']=strip_tags($row['px_content']);
	$peixun[]=$row;
}


$smarty->assign('hovernav','peixun');
$smarty->assign('type',$type);
$smarty->assign('peixun',$peixun);
$smarty->display('peixun.html');