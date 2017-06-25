<?php
include '../_include/smarty.php';
include '../_include/db_mysql.class.php';
include '../_include/public.function.class.php';
include './common.php';

$id=rep(intval($_GET['id']));
if($id>1){

	
		$sql='select * from zuopin where id='.$id.' limit 1';
		$rs=$db->query($sql);
		$zinfor=$db->fetch_array($rs);

}
$smarty->assign('hovernav','zuopin');
$smarty->assign('zinfor',$zinfor);
$smarty->display('zinfor.html');