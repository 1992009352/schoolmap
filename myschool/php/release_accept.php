<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	
</style>
<body>
	<?php 
	$p_id=$_GET['id'];
	$sel_r=$_GET['sel_r'];
	echo "<h3>以下是你可以承办的心愿活动:</h3>";
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'active');
	$result=mysqli_query($con,'select * from a_active where stage=2;');
	while ($row=mysqli_fetch_array($result)) {
		echo "<a href='active_adsc.php?id=".$row['id']."'>".$row['name']."</a>";
		echo "<form action='release_r.php' method='post'><input type='text' value=".$row['id']." name='a_id'hidden><input type='text' value=".$p_id." name='p_id'hidden><input type='text' value=".$sel_r." name='sel_r'hidden><input type='submit' value='我要承接' name='accept'></form>";
	}
	mysqli_close($con);
	 ?>
</body>
</html>