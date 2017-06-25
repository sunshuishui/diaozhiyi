<?php

include './_include/smarty.php';

include './_include/db_mysql.class.php';

include './_include/public.function.class.php';

$info=isMobile();
if($info){
	header('location:/dzywap/');
}

$sql='select * from adsmanager where posation=1 order by sort asc';

$rs=$db->query($sql);

while($row=$db->fetch_array($rs)){

	$ads[]=$row;

}







$sql='select * from article where type=1 order by addtime desc,id desc limit 5';

$rs=$db->query($sql);

while($row=$db->fetch_array($rs)){

	$row['content']=strip_tags($row['content']);

	$news[]=$row;

}



$sql='select id,title from article where type=2 order by addtime desc,id desc limit 5';

$rs=$db->query($sql);

while($row=$db->fetch_array($rs)){

	$doubt[]=$row;

}









$sql='select * from xiangmu order by id desc limit 10';

$rs=$db->query($sql);

while($row=$db->fetch_array($rs)){

	$row['content']=strip_tags($row['content']);

	$xiangmu[]=$row;

}









$sql='select * from peixun order by id desc limit 5';

$rs=$db->query($sql);

while($row=$db->fetch_array($rs)){

	if($row['pic']){

		$pic_thumb=explode('.',$row['pic']);

		$row['pic_thumb']=$pic_thumb[0].'_thumb.'.$pic_thumb[1];

		

	}

	$row['px_content']=strip_tags($row['px_content']);

	$peixun[]=$row;

}







$sql='select * from teacher order by id desc limit 4';

$rs=$db->query($sql);

while($row=$db->fetch_array($rs)){

	$teacher[]=$row;

}









$sql='select * from store order by id desc limit 3';

$rs=$db->query($sql);

while($row=$db->fetch_array($rs)){

	$store[]=$row;

}



$smarty->assign('hovernav','index');

$smarty->assign('store',$store);

$smarty->assign('teacher',$teacher);

$smarty->assign('peixun',$peixun);

$smarty->assign('xiangmu',$xiangmu);

$smarty->assign('news',$news);

$smarty->assign('doubt',$doubt);

$smarty->assign('ads',$ads);

$smarty->display('index.html');