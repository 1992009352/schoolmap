<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 
	$con=mysql_connect('localhost','root','');
	mysql_select_db('test1',$con);
	mysql_query('insert into test values("我去");');
	$result=mysql_query('select * from test;');
	while ($row=mysql_fetch_array($result)) {
		echo $row['test'];
	}
	 ?>
</body>
</html>