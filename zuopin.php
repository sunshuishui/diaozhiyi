<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$sql='select id from zuopin';
$rs=$db->query($sql);
$countdata=$db->num_rows($rs);
$pagesize=8;
$countpage=ceil($countdata/$pagesize);
$page=intval($_GET['page']);
if($page<1){$page=1;}
$thispage=($page-1)*$pagesize;

$sql="select * from zuopin order by id desc limit $thispage,$pagesize";

$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['content']=strip_tags($row['content']);
	$zuopin[]=$row;	
}
$smarty->assign('hovernav','zuopin');
$smarty->assign('countpage',$countpage);
$smarty->assign('page',$page);
$smarty->assign('thispage',$thispage);
$smarty->assign('zuopin',$zuopin);


$smarty->display('zuopin.html');