<?php
include '../_include/smarty.php';
include '../_include/db_mysql.class.php';
include '../_include/public.function.class.php';
include './common.php';

$sql='select * from adsmanager where posation=2 order by sort asc';
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$ads[]=$row;
}


$sql='select * from peixun order by id desc limit 5';
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['px_content']=strip_tags($row['px_content']);
	$peixun[]=$row;
}


$smarty->assign('hovernav','index');
$smarty->assign('peixun',$peixun);
$smarty->display('index.html');