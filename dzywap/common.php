<?php
$sql='select * from adsmanager where posation=2 order by sort asc';
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$ads[]=$row;
}

$smarty->assign('ads',$ads);