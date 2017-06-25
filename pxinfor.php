<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$id=rep(intval($_GET['id']));
if($id>1){

	
		$sql='select * from peixun where id='.$id.' limit 1';
		$rs=$db->query($sql);
		$pxinfor=$db->fetch_array($rs);

}
$smarty->assign('hovernav','peixun');
$smarty->assign('pxinfor',$pxinfor);
$smarty->display('pxinfor.html');