<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
// echo "<script>alert('heelo');</script>";
 ?>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	#contain
	{
		overflow:hidden;
		width: 100%;
		height:200%;
	}
	#mark_and_recommend
	{
		width:100%;
		height:11em;
/*		background-color:black;*/
/*		border:0.2em solid rgba(238,238,238,0.6);
		border:0.5 solid black;
		border-top-right-radius:0.6em;
		border-bottom-right-radius: 0.6em;*/
		transform:translate(-76.2em,0em);
		transition:2s;
	}
	#mark
	{
		float:right;
		text-align: center;
		width:6.6em;
		height:7em;
		border:0.2em solid rgba(238,238,238,0.6);
		border-top-right-radius:0.6em;
		border-bottom-right-radius: 0.6em;
		box-shadow: -0.7em 0.1em 1em white;
	}
	#mark span
	{
		color:white;
/*		display:inline;*/
		font-size: 1.8em;
		font-weight: 800;
		font-style: italic;
		text-shadow: black 2px 5px 9px;
	}
	#mark small
	{
		font-size: 0.5em
	}
	#recommend
	{
		float:left;
		width:76em;
		height:11em;
		background-color: black;
	}
	#recommend_c
	{
		float:left;
		height:100%;
		width:36em;
		background-color: red;
	}
	#recommend_a
	{
		float:right;
		height:100%;
		width:36em;
		background-color:blue;
	}
	#img
	{
		z-index: -2;
		position: absolute;
		top:0em;
		left:0em;
		width:100%;
		height:200%;
		background-image: url('../pic/3.jpg');
		background-size: cover;
		background-repeat: no-repeat;

	}
	#background
	{
		z-index: -1;
		position: absolute;
		top:0em;
		left:0em;
		width: 100%;
		height:200%;
		background-image: url('../pic/back13.jpg');
		opacity: 0.9;
		background-size: cover;
		background-repeat: no-repeat;
	}
	#active
	{
		margin-top:1em;
		float:left;
		width:22em;
		height:48em;
		overflow:auto;
		/*border:1em solid black;*/
		/*background-color: black;*/
		background-image: url('../pic/back12.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		text-align: center;
	}
	#active img
	{
		margin-top:4em;
		width:20em;
		height:20em;
	}
	#trans_left
	{
		margin-top:10em;
		float:left;
		width:10em;
		height:15em;
		background: -moz-linear-gradient(left,  rgba(12,32,12,0.1) 0%, rgba(223,223,233,0.3) 100%); /*// 适合 FF3.6+ */
		background: -webkit- gradient(linear, left top, left bottom, color-stop(0%,#bccfe3), color- stop(100%,#d2dded)); /*适合 Chrome,Safari4+ */
		background: -webkit-linear-gradient(left,  black 0%, #d2dded 100%);  /*适合Chrome10+,Safari5.1+*/
		background: -o-linear-gradient(left,  black 0%, #d2dded 100%);  /*适合Opera 11.10+*/
		background: -ms-linear-gradient(left,  black 0%, #d2dded 100%); /*适合IE10+ */
		background: linear-gradient(left,  black 0%, #d2dded 100%);  /*   适合W3C*/
		 transform-style: preserve-3d;
  		 -webkit-transform-style: preserve-3d;
  		 -webkit-transform: skewY(-30deg) translate(0em,7.8em) ;
   		 -moz-transform:skewY(-30deg) translate(0em,7.8em)  ;
   		 -o-transform:skewY(-30deg) translate(0em,7.8em)   ;
   		 transform:skewY(-30deg) translate(0em,7.8em) ;
	}
	#trans_left2
	{
		margin-top:7.5em;
		float:left;
		width:2em;
		height:15em;
		background:white;
		-webkit-transform: translate(0em,8em);
   		-moz-transform: translate(0em,8em);
   		-o-transform: translate(0em,8em);
   		transform: translate(0em,5em);
	}
	#trans_right
	{
		margin-top:16em;
		float:left;
		width:11em;
		height:15em;
		background: -moz-linear-gradient(left,  rgba(12,32,12,0.1) 0%, rgba(223,223,233,0.3) 100%); 
		background: -webkit- gradient(linear, left top, left bottom, color-stop(0%,#bccfe3), color- stop(100%,#d2dded)); 
		background: -webkit-linear-gradient(left, rgba(12,32,12,0.1) 0%, rgba(223,223,233,0.1) 100%);  
		background: -o-linear-gradient(left,  rgba(12,32,12,0.1) 0%, rgba(223,223,233,0.1) 100%);  
		background: -ms-linear-gradient(left, rgba(12,32,12,0.1) 0%, rgba(223,223,233,0.1) 100%); 
		background: linear-gradient(left,  rgba(12,32,12,0.1) 0%, rgba(223,223,233,0.1) 100%);  
		 -webkit-transform: skewY(30deg) translate(0em,2em) ;
   		 -moz-transform:skewY(30deg) translate(0em,2em)  ;
   		 -o-transform:skewY(30deg) translate(0em,2em)   ;
   		 transform:skewY(30deg) translate(0em,2em) ;
   		 /*box-shadow: 0em 2em 3em 0em black; */

	}
	#trans_right2
	{
		margin-top:12.3em;
		float:left;
		width:11em;
		height:15em;
		background:white;
	}
	#student
	{
		text-align: center;
		margin-top: 8em;
		width:15em;
		height:36em;
		float:left;
		box-shadow:0.5em 0.5em 1em 0.6em rgba(44,44,44,0.7); 
		-webkit-box-shadow:0.5em 0.5em 1em 0.6em rgba(44,44,44,0.7);
		/*border:0.5em solid rgba(13);*/
	}
	#student img
	{
		display: block;
		width:9em;
		height:8em;
		margin:0em auto;
		box-shadow: 0.1em 0.1em 2em 0.1em rgba(211,211,144,0.7);
		-webkit-box-shadow:-0.5em 0.5em 1em 0.6em rgba(211,211,144,0.7);
	}
	#responser
	{
		text-align: center;
		margin-left: 4em;
		margin-top: 6em;
		width:16em;
		height:38em;
 		float:left;
 		box-shadow:-0.5em 0.5em 1em 0.6em rgba(44,44,44,0.7); 
		-webkit-box-shadow:-0.5em 0.5em 1em 0.6em rgba(44,44,44,0.7);
	}
	#responser img
	{
		width:10em;
		height:8em;
		box-shadow: 0.1em 0.1em 2em 0.1em rgba(211,211,144,0.7);
		-webkit-box-shadow:-0.5em 0.5em 1em 0.6em rgba(211,211,144,0.7);
	}
	#concert
	{
		float:left;
		width:80%;
		height:16em;
		margin-left: 7em;
		margin-top: 2em;
		/*background-color: black;*/
		overflow:scroll;
		text-align: center;
	}
</style>
<body>
	<div id='img'></div>
	<div id='background'></div>
	<div id='contain'>
		<div id='mark_and_recommend'>
		<div id='recommend'>
				<div id='recommend_c'>
					
				</div>
				
				<div id='recommend_a'>
				</div>
			</div>
			<div id='mark' onclick='recommend()'><span>moc.o</span><small>TM</small>
				<br><br>
				<small style='font-size: 0.8em;font-weight: 600;'>welcome</small><br>
				<?php 
					echo "<script>alert(????????????????????);</script>";
					if ((isset($_SESSION['user']))&&$_SESSION['user']['identify']=='student') 
					{
						echo "<small style='font-size: 0.8em;font-weight: 600;'>你好,<a href='person.php'>".$_SESSION['user']['name']."</a></small>";
					}
					else if ((isset($_SESSION['user']))&&$_SESSION['user']['identify']!='student')
					{
						echo "<small style='font-size: 0.8em;font-weight: 600;'>你好,<a href='release.php'>".$_SESSION['user']['name']."</a></small>";
					}
					else
					{
						echo "<small style='font-size: 0.8em;font-weight: 600;'><a href='sel_sign.php' style='text-decoration:none;'>登陆</a></small>";
					}
				 ?>
			</div>
		</div>
		<div id='responser'>
			<img src="../pic/responser.jpg">
			<?php 
				$error='';
				$id=$_GET['id'];
				$con=mysqli_connect('localhost','root','');
				mysqli_select_db($con,'active');
				$result=mysqli_query($con,"select * from c_active where id=".$id.";");
				$row=mysqli_fetch_array($result);
				$responser=$row['responser'];
				$respon_id=$row['respon_id'];
				mysqli_select_db($con,'user');
				$result=mysqli_query($con,"select *  from ".$responser." where id='".$respon_id."';");
				$row=mysqli_fetch_array($result);
				echo "<figure><p>负责人介绍：</p>";
				echo "<p>".$row['name']."</p>";
				echo "<p>".$row['dcb']."</p>";
				echo "<p></p></figure>";
			 ?>
		</div>
		<div id='trans_left'></div>
		<div id='active'>
		<?php 
			mysqli_select_db($con,'active');
			$result=mysqli_query($con,"select * from c_active where id=".$id.";");
			while ($row=mysqli_fetch_array($result)) 
			{
				echo "<img src=".$row['img']." title='welcome'>";
				echo "<h4>活动名称：".$row['name']."</h4>";
				echo "<h3>开始时间：".$row['begin']."</h3>";
				echo "<h3>结束时间：".$row['end']."</h3>";
				echo "<h3>具体安排：".$row['dcb']."</h3>";
				echo "<h3>价格:".$row['cost']."</h3>";
				if ($row['stage']=='1')
				{
					echo "<p>当前状态为：正在审核</p>";
				}
				elseif ($row['stage']=='2') 
				{
					echo "<p>当前状态为：已发布</p>";
					if (isset($_SESSION['user'])) 
					{
						echo "<form action='activec.php?id=".$_SESSION['user']['id']."' method='post' ><input type='text' value=".$row['id']." name='ca_id'hidden><input type='text' value=".$row['name']." name='ca_name'hidden><input type='text' value=".$row['cost']." name='ca_money'hidden><input type='submit' value='申请参加' name='ca' onmousedown='check_a(".$row['id'].");'><span>".$error."</span></form>";
					}
					else
					{
						echo "参加请<a href='sel_sign.php'>登录</a> 。";
					}
					}
				elseif ($row['stage']=='3') 
				{
					echo "<p>当前状态为：正在进行/已结束</p>";
				}
			}
			echo "<small>Tips:参加的时候别忘记同意协议哦.</small>";
		?>
		</div>
		<div id='trans_right'></div>
		<div id='student'>
			<img src="../pic/team.jpg">
			<?php 
				mysqli_select_db($con,'user');
				$result=mysqli_query($con,"select count(id) as num from relation where a_id=".$id." and how=2;");
				if(!($row=mysqli_fetch_array($result)))
				{
					echo "<br>";
					echo "<span>欢迎你的参加</span>";
				}
				do
				{
					if ($row['num']==0) {
						echo "<br><span>欢迎你的参加</span>";
					}
					else
					{
						echo "<p>已有".$row['num']."童鞋报名参加，欢迎你</p>";
					}
				}while($row=mysqli_fetch_array($result));
				echo "<small style='display:block;'>tips:参加后可以看到有哪些小伙伴哦</samll>";
				
			 ?>
		</div>
		<div id='concert'>
			<?php 
				mysqli_select_db($con,'active');
				$result=mysqli_query($con,"select agreement from c_active where id=".$id.";");
				$row=mysqli_fetch_array($result);
				echo "<figure><p>协议方案</p><span>".$row['agreement']."</span></figure>";
				echo "同意？<input type='checkbox' id='agreement'>";
			 mysqli_close($con);
			 ?>
		</div>
	</div>

</body>
<script type="text/javascript">
	var d=1;
	function recommend()
	{

		if (d==1) 
		{
			d--;
			document.getElementById('mark_and_recommend').style.transform="translate(0em,0em)";
				
		}
		else
		{
			d++;
			document.getElementById('mark_and_recommend').style.transform="translate(-76.2em,0em)";
		}
	}
	function check_a(id)
	{
		var sel=document.getElementById('agreement').checked;
		if(!sel)
		{
			alert('参加前先仔细阅读发布协议哦');
			window.location.href='active_dsc.php?id='+id+'';
		}
	}
</script>
</html>
