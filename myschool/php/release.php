<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
 ?>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	#a{

	}
</style>
<?php 

 ?>
<body>
	<ul>
		<li>
			<?php 
			
			if (empty($_SESSION['user']['id'])) {
				echo "你还没登陆<a href='sel_sign'>登陆</a>";
			}
			else
			{
				$id=$_SESSION['user']['id'];
				echo "欢迎你，".$_SESSION['user']['name']."";
			}
			$con=mysqli_connect('localhost','root','');
			mysqli_select_db($con,'active');
			$result=mysqli_query($con,"select * from c_active where respon_id='".$_SESSION['user']['id']."'and responser='".$_SESSION['user']['identify']."';");
			if(!($row=mysqli_fetch_array($result)))
			{
				echo "<h4>你暂未创建任何活动</h4>";
			}
			else
			{
			//stage: case 1:参加的活动（s/r） 2:捐助的活动(s/r) 3，申请的活动(s/r) 
				echo "<ul>";
				echo "<h4>你已经创建的活动:</h4>";
				do
				{
					// echo "<script>alert('".$row['id']."');</script>";
					echo "<h3><a href='active_dsc.php?id=".$row['id']."' target='view_active'>".$row['name']."</a></h3>";
				}while ($row=mysqli_fetch_array($result));
				echo "</ul>";
			}

			mysqli_close($con);
			?>
		</li>
		<li>已结束</li>
		<?php 
		echo "
		<li><a href='release_accept.php?id=".$id."&sel_r=".$_SESSION['user']['identify']."'>承接活动</a></li>
		<li><a href='release_r.php?id=".$id."&sel_r=".$_SESSION['user']['identify']."'>发布活动</a></li>
		<li>评价</li>";
		 ?>
		
	</ul>
</body>
<script type="text/javascript">
	
</script>
</html>