<?php
include '../_include/smarty.php';
include '../_include/db_mysql.class.php';
include '../_include/public.function.class.php';
include './common.php';

/*$sql='select id from product';
$rs=$db->query($sql);
$countdata=$db->num_rows($rs);
$pagesize=8;
$countpage=ceil($countdata/$pagesize);
$page=intval($_GET['page']);
if($page<1){$page=1;}
$thispage=($page-1)*$pagesize;

$sql="select * from product order by id desc limit $thispage,$pagesize";*/
$sql="select * from product order by id desc";
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	
	$product[]=$row;	
}
$smarty->assign('hovernav','product');
$smarty->assign('countpage',$countpage);
$smarty->assign('page',$page);
$smarty->assign('thispage',$thispage);
$smarty->assign('product',$product);


$smarty->display('product.html');