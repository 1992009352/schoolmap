<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//how    ---------------------------------1,心愿  2，参加  3，捐助 4，喜欢
	if (isset($_POST['o'])) {
		$id=$_GET['id'];
		$name=$_POST['name'];
		$dcb=$_POST['dcb'];
		$con=mysqli_connect('localhost','root','');
		mysqli_select_db($con,'active');
		mysqli_query($con,"insert into a_active(name,dcb) values('".$name."','".$dcb."');");
		$result=mysqli_query($con,"select id from a_active where name='".$name."' and dcb='".$dcb."';");
		$result=mysqli_fetch_array($result);
		mysqli_select_db($con,'user');
		mysqli_query($con,'insert into relation(id,a_id,how) values("'.$id.'",'.$result['id'].',1);');
		mysqli_close($con);
		echo "<script>alert('ok!');window.location.href='activec.php?id=".$_GET['id']."';</script>";
	}
	$id=$_POST['id'];
	echo $id;
	echo "<form action='apply.php?id=".$id."' method='post'><input type='text' name='id' value='".$id."' hidden>活动名称<input type='text' name='name'><br>请尽可能简洁的描述活动和要求<br><textarea name='dcb' id='1' cols='30' rows='10'></textarea><br><input type='submit' value='提交审核' name='o'></form>";
	 ?>
</body>
<script type="text/javascript">
</script>
</html>