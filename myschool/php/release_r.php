<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style text="css.text">
	#a_active
	{
		float:right;
		height:600px;
		width:500px;

	}
</style>
<?php 

 ?>
<body style='text-align: center;'>
	<?php 
	$error='*';
	if(isset($_POST['create']))
	{
		$name=$_POST['name'];
		$cost=$_POST['cost'];
		$begin=$_POST['begin'];
		$end=$_POST['end'];
		$min_num=$_POST['min_num'];
		$max_num=$_POST['max_num'];
		$p_id=$_POST['id'];
		$sel_r=$_POST['sel_r'];
		$dcb=$_POST['dcb'];
		$con=mysqli_connect('localhost','root','');
		mysqli_select_db($con,'active');
		mysqli_query($con,'update a_active set stage=stage+1 where id='.$_POST['a_id'].';');
		$result=mysqli_query($con,'insert into c_active(name,begin,end,dcb,respon_id,cost,min_num,max_num,responser) 
														values("'.$name.'","'.$begin.'","'.$end.'","'.$dcb.'","'.$p_id.'",'.$cost.','.$min_num.','.$max_num.',"'.$sel_r.'");');
		if ($result) {
			echo "<script>alert('申请成功,等待审核');window.location.href='release.php?id=".$p_id."&sel=".$sel_r."'</script>";
		}
		else
		{
			echo "<script>alert('申请失败，请咨询管理员');</script>";
		}
		mysqli_close($con);
	}

	if (isset($_POST['accept'])) {
		$p_id=$_POST['p_id'];
		$a_id=$_POST['a_id'];
		$sel_r=$_POST['sel_r'];
		$con=mysqli_connect('localhost','root','');
		mysqli_select_db($con,'active');
		$result=mysqli_query($con,'select * from a_active where id='.$a_id.';');
		$result=mysqli_fetch_array($result);
		echo "<iframe src='active_adsc.php?id=".$a_id."' id='a_active'></iframe>";
		echo "<form action='release_r.php' method='post'>活动名称：".$result['name']."<input type='text' name='name' value='".$result['name']."' hidden><span>".$error."</span>";
		echo "<br>输入该活动个人花费：<input type='text' name='cost'><span>".$error."</span>";
		echo "<br>输入活动开始时间：<input type='text' name='begin'><span>".$error."</span>";
		echo "<br>输入活动结束时间：<input type='text' name='end'><span>".$error."</span>";
		echo "<br>输入活动成立的最少人数：<input type='text' name='min_num'><span>".$error."</span>";
		echo "<br>输入活动最大容纳人数：<input type='text' name='max_num'><span>".$error."</span>";	
		echo "<input type='text'value='".$p_id."' name='id'hidden>";
		echo "<input type='text' value='".$sel_r."' name='sel_r'hidden>";
		echo "<input type='text'value='".$a_id."' name='a_id'hidden>";
		echo "<br>输入活动详细安排<br>";
		echo "<textarea name='dcb' id='1' cols='30'rows='10' >".$result['dcb']."</textarea><span>".$error."</span>";
		echo "<br><input type='submit' value='确认提交' name='create'>";	
		echo "</form>";
		mysqli_close($con);
	}
	else
	{
		echo "<form action='release_r.php' method='post'>
		<p>输入活动名称：<input type='text' name='name'><span></span></p>
		<p>输入该活动个人花费：<input type='text' name='cost'><span></span></p>
		<p>输入活动开始时间：<input type='text' name='begin'><span></span></p>
		<p>输入活动结束时间：<input type='text' name='end'><span></span></p>
		<p>输入活动成立的最少人数：<input type='text' name='min_num'><span></span></p>
		<p>输入活动最大容纳人数：<input type='text' name='max_num'><span></span></p>
		<input type='text'value='".$_GET['id']."' name='id'hidden>
		<input type='text' value='".$_GET['sel_r']."' name='sel_r'hidden>
		输入活动详细安排：
		<p><textarea name='dcb' id='' cols='30' rows='10'></textarea></p>
		<p><input type='submit' value='确认提交' name='create'></p>
		</form>";
	}

	 ?>

</body>
</html>