<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
 ?>
<head>
	<meta charset="UTF-8">
	<title>sign </title>
</head>
<style type="text/css">
	#background
	{
	position: absolute;	
	background: -webkit-linear-gradient(#ace, #f96);
	background: -o-linear-gradient(#ace, #f96);
	background: linear-gradient(#ace, #f96);
	width: 100%;
	height:200%;
	text-align: center;
	opacity: 0.9;
	}
	#contain
	{
		position: absolute;
		height: 40%;
		width: 100%;
	}
	#title
	{
		color:#151923;
		box-shadow: #7E91BF 4px 5px 6px 7px;
		font-size: 50px;
		text-shadow: 15px 15px 8px #123122;
		text-indent: 40px;
		font-weight: 800;
		text-align:center;
		opacity: 0.7;
		margin: 80px auto;	
		width: 50%;
		height: 30%;
		border-radius: 10px;	
     	background: -webkit-linear-gradient(#8FEAF8, #8FF8C2);
	    background: -o-linear-gradient(#8FEAF8,  #8FF8C2);
	    background: linear-gradient(#8FEAF8,  #8FF8C2);
	}
	#big-font
	{
		font-size: bold;
		font-style: oblique;
		font-weight: 300;
		text-shadow:5px  #6495ED;
		font-family:Arial,Verdana,Sans-serif;
	}
	#input
	{
		font-family: serif;
		text-shadow:#332C2C 2px 1px 10px; 
		font-weight:700;	
		box-shadow: #DBDBDB 3px 5px 6px 7px;
		overflow: auto;
		opacity: 0.7;
		border-radius: 15px;
		background-color:#F9BAD5;
		margin:-15px auto;
		width: 50%;
		height: 40%;
		padding: 36px;
		border-radius: 9px;
	}
	#input input
	{
		font-size: 18px;
		border-radius: 5px;
	}
	#input input:hover
	{
		border-spacing: 2px;
		border-color: #DE92F2;
		border-radius: 2px;
		box-shadow: #CFCDCD 2px 2px 2px 2px;
	}
	#apply
	{
		position: absolute;
		font-size: 20px;
		font-weight: 600;
		color:black;
		text-decoration:blink;	
		border-radius: 15px;
		background-color:#ff00ff;
		margin-top: 70px;
		margin-left: 11%;
		padding: 30px;
		opacity: 0.7;
	}
	#apply_button
	{
		width:400px;
		height:200px;
		margin:auto;
		opacity:0.5;
	}
	#apply_button:hover
	{
		opacity:0.9;
	}
	#table
	{
		padding: 20px;	
		width: 55%;
		background-color: #888543;
		border:#555555 solid medium;
		border-top-width: 50px;
		border-top-right-radius: 80px;
		border-top-left-radius: 80px;   
		margin: auto;
		opacity: 0;
		transition: opacity 1.5s;
		-moz-transition:opacity 1.5s,-moz-transform 1.5s;
		-webkit-transition:opacity 1.5s,-webkit-transform 1.5s;
		-o-transition:opacity 1.5s,-o-transform 1.5s;
	}
	#table table
	{
		 border-spacing: 90px 40px;
	}
	#table input
	{
		width: 280px;
	}
/*	#shade
	{
		width: 200px;
		height: 400px;
		position: absolute;
		background-color: white;
	}*/
</style>

<?php 
$error='*';
if (isset($_POST['load']))
{
	if(empty($_POST['user'])||empty($_POST['pass']))
	{
		$error='*请输入!';
	}
	else 
	{
		$id=$_POST['user'];
		$sel=$_POST['sel'];
		$sel_r=$_POST['select'];
		$password=$_POST['pass'];
		//echo "<script>alert('".$sel_r.$sel."');</script>";
		$con=mysqli_connect('localhost','root','');
		if (!$con) 
		{
			die('can not connect sql'.mysqli_error());
		}
		mysqli_select_db($con,'user');
		if ($sel=='student') 
		{
			//echo "<script>alert('查询学生');</script>";
			// $result=mysqli_query($con,"select count(name) as num from student where id='".$id."';");
			// $row=mysqli_fetch_array($result);
			// if ($row["num"]==0) {
			// 	$error="*无此id";
			// }
			$result=mysqli_query($con,"select name,password from student where id='".$id."';");
		}
		else
		{
			//echo "<script>alert('查询发布者');</script>";
			$result=mysqli_query($con,"select name,password from ".$sel_r." where id='".$id."';");
		}
		//echo "<script>alert('查询完毕');</script>";
		$row=mysqli_fetch_array($result);
		if(empty($row['name']))
		{
			$error='*请检查用户或密码';
		}
		else
		{
			//echo "<script>alert('有结果')</script>	";
		 		//echo "<script>alert('我进来了');</script>";
				if($row['password']==$password)
				{
					//session_start();
					$_SESSION["user"]=array('id'=> $id,'name'=> $row['name'],'identify'=>$sel_r);
					//setcookie('usercookie','$')
					if ($sel=='student') {
						echo "<script>alert('欢迎你 学生');window.location.href='activec.php?id=".$id."';</script>";
					}
					else
					{
						echo "<script>alert('欢迎你 发布者');window.location.href='release.php?id=".$id."&sel=".$sel_r."';</script>";
					}
					
				}
				else
				{
					$error='*请检查用户或密码';
				}
		}
		mysqli_close($con);
	}
	if (isset($_POST['apply'])) {
		echo "<script>alert('huanying');</script>";
	}
}
?>

<body>
	<div id="background"></div>
	<div id="contain">
			<div id="title">hello</div>
			<div id="input">
				<form   method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<input  type="radio"name="sel"value="student"onclick="student()"checked='checked'>
				我是学生
				<input type="radio"name="sel"value="release"onclick="release()">
				我是发布者
				<select name='select'id='sel_r'hidden>
					<option value='teacher'>我是教师</option>
					<option value='mass_org'>我是社团负责人</option>
					<option value='sch_dp'>学校部门</option>
				</select>
				<br/>
				<br/>
				<font id='sel_p'>学号</font>
				<input type="text" name="user" value="01">
				<font>密码</font>
				<input type="password" name="pass" value="123456">
				<input type="submit" style="margin-left: 8px;"value="确定" name='load'>
				<?php echo "<br><br><span>".$error."</span>"; ?>
				</form>
			</div>
			<div id='apply_button'><a href="#ap"id='apply' onclick="apply()">申请注册</a></div>
			<div id='table'name='ap'>
				<form method='post' action='sel_sign.php'>
				<table>
					<tr>
						<td>填写学号-----></td>
						<td><input type='text'name='id'></td>
					</tr>
					<tr>
						<td>填写密码-----></td>
						<td><input type='password'name='pwd'></td>
					</tr>
					<tr>
						<td>确认验证码-----></td>
						<td><input type='text'name='cert'></td>
					</tr>
					<tr>
						<td>----填写个人介绍----</td>
						<td><img src="" alt=""></td>
					</tr>
				</table>
				<textarea name='dcb'style="margin-left:150px;"rows='5'cols='40'></textarea>
				<input type='submit'value='确定'style='margin:3% 35%;'name='apply'>
				</form>
			</div>
	</div>
</body>
<script type="text/javascript">
	function student(id)
	{
		document.getElementById('title').innerHTML="你好,学生";
		document.getElementById('sel_p').innerHTML='学号';
		document.getElementById('sel_r').hidden=1;
	}	
	function release(id)
	{
		document.getElementById('sel_p').innerHTML='工号';
		document.getElementById('title').innerHTML='你好，发布者';
		document.getElementById('sel_r').hidden=0;
	}
	function apply()
	{
		document.getElementById('table').style="opacity:1;transform:translate(0,-50px);-ms-transform:translate(0,-50px);-moz-transform:translate(0,-50px);-webkit-transform:translate(0,-50px);-o-transform:translate(0,-50px);"
	}
</script>
<?php 

 ?>
</html>