<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$id=$_GET['id'];
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'active');
	$result=mysqli_query($con,"select * from a_active where id=".$id.";");
	while ($row=mysqli_fetch_array($result)) 
	{
		echo "<h4>".$row['name']."</h4>";
		// echo "<h3>开始时间".$row['begin']."</h3>";
		// echo "<h3>结束时间".$row['end']."</h3>";
		echo "<h3>心愿详情：".$row['dcb']."</h3>";
		// echo "<h3>价格:".$row['cost']."</h3>";
	}
	mysqli_close($con);
	 ?>
</body>
</html>