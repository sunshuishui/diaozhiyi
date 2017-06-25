<?php
include '../_include/smarty.php';
include '../_include/db_mysql.class.php';
include '../_include/public.function.class.php';
include 'common.php';

	$sql='select * from teacher order by id desc';
	$rs=$db->query($sql);
	while($row=$db->fetch_array($rs)){
		$teacher[]=$row;
	}
	$smarty->assign('teacher',$teacher);

$smarty->assign('type',$type);
$smarty->assign('hovernav','msmd');
$smarty->display('msmd.html');