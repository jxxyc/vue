//axiosphp.php
<?php
	header("Access-Control-Allow-Origin: *");//这个必写，否则报错
	$mysqli=new mysqli('localhost','root','','testdb');//根据自己的数据库填写
 
	$sql="select * from user";
	$res=$mysqli->query($sql);
 
	$arr=array();
	while ($row=$res->fetch_assoc()) {
		$arr[]=$row;
	}
	$res->free();
	//关闭连接
	$mysqli->close();
	
	echo(json_encode($arr));//这里用echo而不是return
 
?>
