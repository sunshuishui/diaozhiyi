<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$sql='select id from article where type=2';
$rs=$db->query($sql);
$countdata=$db->num_rows($rs);
$pagesize=10;
$countpage=ceil($countdata/$pagesize);
$page=intval($_GET['page']);
if($page<1){$page=1;}
$thispage=($page-1)*$pagesize;

$sql="select * from article where type=2 order by addtime desc,id desc limit $thispage,$pagesize";

$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['content']=strip_tags($row['content']);
	$article[]=$row;	
}
$smarty->assign('hovernav','doubt');
$smarty->assign('countpage',$countpage);
$smarty->assign('page',$page);
$smarty->assign('thispage',$thispage);
$smarty->assign('article',$article);


$smarty->display('doubt.html');