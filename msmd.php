<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$type=rep($_GET['type']);
if($type<1){$type=1;}

if($type==1){
	$sql='select * from teacher order by id desc';
	$rs=$db->query($sql);
	while($row=$db->fetch_array($rs)){
		$teacher[]=$row;
	}
	$smarty->assign('teacher',$teacher);
}elseif($type==2){
	$sql='select * from store order by id desc';
	$rs=$db->query($sql);
	while($row=$db->fetch_array($rs)){
		$store[]=$row;
	}
	$smarty->assign('store',$store);	
}
$smarty->assign('type',$type);
$smarty->assign('hovernav','msmd');
$smarty->display('msmd.html');