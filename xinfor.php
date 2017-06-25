<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$id=rep(intval($_GET['id']));
if($id>1){

	
		$sql='select * from xiangmu where id='.$id.' limit 1';
		$rs=$db->query($sql);
		$xinfor=$db->fetch_array($rs);

}

$smarty->assign('xinfor',$xinfor);
$smarty->display('xinfor.html');