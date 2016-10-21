<!DOCTYPE html>
		<html lang="en">
		<?php
		session_start(); 
		if (isset($_SESSION['user'])) 
		{
			$id=$_SESSION['user']['id'];
			$name=$_SESSION['user']['name'];
			//判断学生？
		}
		?>
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
		</head>
		<style type="text/css">
		#active_view
		{
			float: right;
			width: 40%;
			height: 60%;
		}
		#contain
		{
		}
		#background
		{
			position: absolute;
			top:0em;
			left:0em;
			width:100%;
			height:130%;
			background-color:rgb(45,67,54);
			z-index: -2;
		}
		#body
		{
			position:absolute;
			top:0em;
			left:0em;
			width:100%;
			height:130%;
			background-image: url('back5.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			opacity:0.7;
			z-index: -1;
		}
		#title
		{
			width:100%;
			height:8em;
			background-color:rgba(228,228,228,0.2);
		}
		#mark
		{
			float:right;
			width:6.8em;
			height:6.8em;
			background-color: black;
			border-radius: 5em;
			margin-top: 0.6em;
			margin-right: 0.8em;
		}
		#mark span
		{
			position:relative;
			color:white;
			font-weight: 700;
			font-size: 1.6em;
			transition:1.5s;
		}
		#mark div
		{
			position:relative;
			height:0.8em;
			width:0.8em;
			background-color:rgba(240,233,120,0.6);
			border-radius:0.6em;
			transition:1.5s;
		}
		#person_message
		{
			float:left;
			text-align: center;
			width:18em;
			height:38em;
			margin-top: 1.6em;
/*			margin-left: 0.6em;*/
			background-color:rgba(228,228,228,0.2);
		}
		#frame
		{
			float:left;
			width:43em;
			height:38em;
			margin-top: 1.6em;
			margin-left: 2em;
			background:rgba(228,228,228,0.2);
		}
		#relation
		{
			float:left;
			width:18em;
			height:38em;
			margin-top: 1.6em;
			margin-left: 2em;
			background-color:rgba(228,228,228,0.2);
		}
		</style>
		<body>
			<div id='background'></div>
			<div id='body'></div>
			<div id='contain'>
				<div id='title'>
					<div id='app'>
					
					</div>
					<div id='mark' onmouseover='show_logo()' onmouseout='hide_logo()'>
						<div id='logo1'style='left:3em;top:0.2em;'></div>
						<div id='logo2'style='left:0.1em;top:2.3em;'></div>
						<span id='logo' style='left:0.6em;top:0.4em;'>moc.o</span>
						<small style='position:relative;left:1.1em;top:-0.6em;font-size: 0.4em;color:white;'>TM</small>
						<div id='logo3' style='left:5.9em;top:-0.56em;'></div>
						<div id='logo4' style='left:3em;top:1.6em;'></div>
					</div>
				</div>
				<div id='person_message'>	
					<div><a href="">查看参加</a></div>
					<div><a href="">我的贡献</a></div>
					<div><a href="">发布人反馈</a></div>
					<div><a href="">我的历史</a></div>
					<div><a href="">我的课表</a></div>
					<div><a href="">心愿申请</a></div>
				</div>
				<div id='frame'>
					<?php 
					//历史活动，教师反馈（公见），联系人，
					$con=mysqli_connect('localhost','root','');
					if(!$con)
					{
						die('connot connect'.mysqli_error());
					}
					mysqli_select_db($con,'user');
					$result=mysqli_query($con,"select a_id from relation where id='".$id."' and how=2;");
					if(!($row=mysqli_fetch_array($result)))
					{
						echo "<h4>你暂未参加任何活动</h4>";
					}
					else
					{
					//stage: case 1:参加的活动（s/r） 2:捐助的活动(s/r) 3，申请的活动(s/r) 4,创建的活动(r) 
						echo "<ul>";
						mysqli_select_db($con,'active');
						echo "<h4>你已经参加的活动:</h4>";
						do
						{
							$name=mysqli_query($con,"select name from c_active where id='".$row['a_id']."';");
							$nm=mysqli_fetch_array($name);
							echo "<h3><a href='active_dsc.php?id=".$row['a_id']."' target='view_active'>".$nm['name']."</a></h3>";
						}while ($row=mysqli_fetch_array($result));
						echo "</ul>";
					}
					mysqli_close($con);
					echo "<form action='apply.php' method='post'><input type='text' name='id' value=".$id." hidden><input type='submit' name='apply' value='申请心愿活动'></form>";
		   			 ?>

				</div>
				<div id='relation'>
					<span>我的联系人</span>
				</div>

			</div>
		</body>
		<script type="text/javascript">	
			function show_logo()
			{
				document.getElementById('logo1').style.backgroundColor='rgba(255,255,60,1)';
				document.getElementById('logo2').style.backgroundColor='rgba(255,255,60,1)';
				document.getElementById('logo3').style.backgroundColor='rgba(255,255,60,1)';
				document.getElementById('logo4').style.backgroundColor='rgba(255,255,60,1)';
				document.getElementById('logo').style.textShadow='0.2em 0.2em 1em  rgba(233,233,200,0.7)';
			}
			function hide_logo()
			{
				document.getElementById('logo1').style.backgroundColor='rgba(240,233,233,0.7)';
				document.getElementById('logo2').style.backgroundColor='rgba(240,233,233,0.7)';
				document.getElementById('logo3').style.backgroundColor='rgba(240,233,233,0.7)';
				document.getElementById('logo4').style.backgroundColor='rgba(240,233,233,0.7)';
				document.getElementById('logo').style.textShadow='0.1em 0.1em 1em rgba(103,13,100,0.2)';
			}


		</script>
		</html>		