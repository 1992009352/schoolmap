<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'user');
$result=mysqli_query($con,'select * from student');
while ($row=mysqli_fetch_array($result)) {
	echo $row['name'];
}
mysqli_close($con);
 ?>
</body>
</html>
