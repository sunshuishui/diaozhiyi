<?php
include '../_include/smarty.php';
include '../_include/db_mysql.class.php';
include '../_include/public.function.class.php';
include 'common.php';
$type=rep($_GET['type']);
if($type<1){$type=1;}

$idarr=array(1=>'aboutus',2=>'linian',3=>'contrust');
if($idarr[$type]){
	$sql='select * from customer where id="'.$idarr[$type].'" limit 1';
	$rs=$db->query($sql);
	$customer=$db->fetch_array($rs);
}

$smarty->assign('hovernav','customer');
$smarty->assign('type',$type);
$smarty->assign('customer',$customer);
$smarty->display('customer.html');