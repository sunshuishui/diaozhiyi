<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$type=rep($_GET['type']);
if($type<1){$type=1;}

$sql="select * from peixun where type=$type order by id desc";
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['ys_content']=strip_tags($row['ys_content']);
	$peixun[]=$row;
}


$smarty->assign('hovernav','peixun');
$smarty->assign('type',$type);
$smarty->assign('peixun',$peixun);
$smarty->display('peixun.html');