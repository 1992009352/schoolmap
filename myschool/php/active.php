<!DOCTYPE html>
	<html lang="en">
	<?php 
		session_start();
		if (isset($_GET['sel_stage'])) {
			$sel_stage=$_GET['sel_stage'];
		}
		else
		{
			$sel_stage=0;
		}
		if (isset($_GET['sel_astage'])) {
			$sel_astage=$_GET['sel_astage'];
		}
		else
		{
			$sel_astage=0;
		}
		// echo "<script>alert('".$_SESSION['user']['identify']."');</script>";
	 ?>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<style type="text/css">
	#mark
	{
		float:left;
		display: inline; 
		font-size: 2em;
		font-weight: 800;
		font-style: italic;
		text-shadow: black 2px 5px 9px;
	}
	#triangle-topleft
	{
		position:fixed;
		top:0em;
		left:0em;
		width:5em;
		height:5em;
		background:#396ADB;
		border-bottom-right-radius:80px; 
	}
	.triangle
	{
		position:inherit;
		display:block;
		font-size: 1.2em;
		font-weight:900;
		color: #DCEFEF;
		text-decoration: none;
	}
	#triangle-topright
	{
		position:fixed;
		top:0em;
		right:0em;
		width:5em;
		height:5em;
		background:#396ADB;
		border-bottom-left-radius:80px; 
	}
	#triangle-bottomleft
	{
		position:fixed;
		bottom:0em;
		left:0em;
		width:5em;
		height:5em;
		background:#396ADB;
		border-top-right-radius:80px; 
	}
	#triangle-bottomright
	{
		position:fixed;
		bottom:0em;
		right:0em;
		width:5em;
		height:5em;
		background:#396ADB;
		border-top-left-radius:80px; 
/*		border-bottom: 100px solid #396ADB;
		border-left: 100px solid transparent;*/
	}	
	#background
	{
		position:absolute;
		top:0em;
		left:0em;
		width:100%;
		height:230%;
		background-image: url('background.jpg');
		background-size:cover;
		opacity:1;
/*		animation: background 5s 7;
		-moz-animation:background 5s 7;	
		-webkit-animation:background 5s 7;	
		-o-animation:background 5s 7;	*/
		z-index: -1;
	}
	@keyframes background
	{
		0%   {opacity:0.7;}
		50%  {opacity:0.9;}
		100% {opacity:0.7;}
	}

	@-moz-keyframes myfirst /* Firefox */
	{
		0%   {opacity:0.7;}
		50%  {opacity:0.9;}
		100% {opacity:0.7;}
	}

	@-webkit-keyframes myfirst /* Safari 和 Chrome */
	{
		0%   {opacity:0.7;}
		50%  {opacity:0.9;}
		100% {opacity:0.7;}
	}

	@-o-keyframes myfirst /* Opera */
	{
		0%   {opacity:0.7;}
		50%  {opacity:0.9;}
		100% {opacity:0.7;}
	}
	#header
	{
		
		border-radius: 8px;
		margin-left: 11em;
		/*position:absolute;*/
		width:60em;
		height:2.6em;
		background:#8FA5D3;
		text-align: center;
	}
	#title
	{
		font-size:1.8em;
		font-weight:900;
	}
	#header h2
	{
		display:inline;
	}
	#tm
	{
		font-size: 0.3em;
	}
	#user
	{
		/*display:inline;*/
		position:inherit;
		right:0em;
		bottom:1.5em;
	}
	#active
	{
		width:100%;
		height:42em;
		margin-left: 7%;
	}
	#active_p2
	{
		position:absolute;
		top:46em;
		left:8em;
		width:30%;
		height:50%;
	}
	#contain
	{
	}
	.page 
	{
		background-size: cover;
		 z-index:1;
		 width:17em;
		 height:21em;
   		 display: block;
 		 position: absolute;
		 top:13em;
		 border:0.02em solid #CFEBE4;
		 border-top-right-radius: 3em;
		 border-bottom-left-radius: 2em;
		 border-bottom-right-radius: 2em;
		 border-top-left-radius: 2em;
		 border-right-color:0.2em solid #869591;
	 	 border-bottom-color:0.2em solid #869591;
  		 transform-style: preserve-3d;
  		 -webkit-transform-style: preserve-3d;
  		 transition:1.5s;
	}
	.page figure
	{
		display: block;
		width:17em;
		height:21em;
		position:absolute;
		left:-2.8em;
		top:-1.3em;
		border:0.2em solid #CFEBE4;
		border-top-right-radius: 2em;
		border-bottom-left-radius: 2em;
		border-bottom-right-radius: 2em;
		border-top-left-radius:3em;
		border-right-color:0.2em solid #869591;
		border-bottom-color:0.2em solid #869591;
 		backface-visibility: hidden;
	}
	.pagefront
	{
		/*opacity:0.9;*/
/*		box-shadow:0em 0.3em 0.2em #616161;
		-webkit-box-shadow:0em 0.3em 0.2em #616161;
		-moz-box-shadow:0em 0.3em 0.2em #616161; */
		/*z-index: :1;*/
/*		 box-shadow:0em 0.3em 1.3em #B9AC93;
		-webkit-box-shadow:0em 0.3em 1.3em #B9AC93;
		-moz-box-shadow:0em 0.3em 1.3em #B9AC93; */
/*		 width:20em;
		 height:22em;
		 position:absolute;*/
/*		 transform-style: preserve-3d;
		 top:13em;
		 display:block;*/
		 background-image: url("1.jpg");
		 /*background-size:cover;*/
/*		 backface-visibility: hidden;
		 -webkit-backface-visibility: hidden;*/
/*		 -webkit-transform: perspective(1200px ) rotateY(-89deg ) ;
   		 -moz-transform: perspective(1200px ) rotateY(-89deg ) ;
   		 -o-transform: perspective(1200px ) rotateY(-89deg ) ;
   		 transform: perspective(1200px) rotateY(-89deg ) ;*/

	}
	.pageback
	{
/*		position:absolute;
		width:20em;
		height:22em;*/
		background-color:rgba(207,189,223,0.3);
		transform:rotateY(180deg);
/*		-webkit-backface-visibility:hidden; 
		backface-visibility: hidden;
		transition:1.5s;*/
	}
/*	.page:hover
	{	 
		box-shadow:0em 0.8em 1.3em #6B506E;
		-webkit-box-shadow:0em 0.8em 1.3em #6B506E;
		-moz-box-shadow:0em 0.8em 1.3em #6B506E; 
	}*/
	.page p
	{
		text-shadow: 0.1em 0.1em 0.5em #999395;
		font-size: 1.1em;
		font-weight: 700;
		text-align: center;
		text-decoration:none;
	}
	.page a
	{
		color:#0B3634;
		font-style: italic;
		font-size: 1.9em;
		text-decoration: none;
	}
	.page a:hover
	{
		color:#157974;
		text-shadow: 0.1em 0.1em 0.6em #D7DF67;
	}
	.page a:visited
	{
		
	}
	.page a:active
	{
		border:0.1em inset #6514AE;
	}
	#c_active_pages
	{
		width:80%;
		height:7%;
		margin-top: 32.7em;
	}
	#c_active_pages  a
	{
		font-size: 1em;
		font-weight: 600;
		font-style: italic;
		color:#383C39;
		text-shadow: 0.2em 0.1em 0.3em #434844;
		margin-left:1em; 
		padding:0.3em;
		background-color:#97DBA7; 
		border:0.4em solid #8DAEAC;
		text-decoration: none;
		
	}
	</style>
	<?php 
	$page=0;
	$rec=180;
	$error='';
	$more='';
		if (isset($_POST['ca'])) 
		{
			if (empty($_SESSION['user']['id'])) 
			{
				echo "<script>window.location.href='sel_sign.php'</script>";
			}
			else
			{
				echo "<script>alert('你将参加活动:".$_POST['ca_name']."并且支付".$_POST['ca_money']."元。')</script>";
				if ($_POST['ca_money']==0)
				{
					$ca_id=$_POST['ca_id'];
					$con=mysqli_connect('localhost','root','');
					mysqli_select_db($con,'user');	
					$res=mysqli_query($con,"select * from relation where id='".$_SESSION['user']['id']."' and a_id=".$ca_id." and how=2;");
					if(!($row=mysqli_fetch_array($res)))
					{
						try
						{
						mysqli_query($con,"insert into relation(id,a_id,how,cost) values('".$_SESSION['user']['id']."',".$ca_id.",2,".$_POST['ca_money'].")");
						}
						//对how的规定：1，参加已经创办的活动
						catch (Exception $e)
						{
						throw $e;
						echo "<script>alert('操作失败，请联系维护人员');</script>";
						}
					}
					else
					{
						echo "<script>alert('你已参加');</script>";
						$error='*不要重复申请,已参加';
					}
					mysqli_close($con);//添加容错处理
				}
				else
				{
				//链接支付系统
				//再往relation中添加用户和活动信息。
				}

			}
		}
		if(isset($_POST['aa'])) 
		{
			if (empty($_SESSION['user']['id'])) 
			{
				echo "<script>window.location.href='sel_sign.php'</script>";
			}
			else
			{

				//链接支付系统
				//再往relation中添加用户和活动信息。
				echo "<script>alert('你将支持活动:".$_POST['aa_name']."将转到众筹支付');</script>";
				$aa_id=$_POST['aa_id'];
				$con=mysqli_connect('localhost','root','');
				mysqli_select_db($con,'active');	
				try {
					// mysql_query("insert(id,a_id,how,cost)values('".$_SESSION['user']['id']."',".$ca_id.",1,".$_POST['ca_money'].")");
				} catch (Exception $e) {
					throw $e;
					echo "<script>alert('操作失败，请联系维护人员');</script>";
				}
				mysqli_close($con);//添加容错处理
			}

		}
		if (isset($_POST['iwant']))
		{
			if (empty($_SESSION['user']['id'])) {
				$u='none';
			}
			else
			{
				$u=$_SESSION['user']['id'];
			}
			$aa_id=$_POST['aa_id'];
			$con=mysqli_connect('localhost','root','');
			mysqli_select_db($con,'user');
			$result=mysqli_query($con,"select a_id from relation where id='".$u."' and how=4;");
			if (!($row=mysqli_fetch_array($result)))
			{
				mysqli_select_db($con,'active');	
				try {
					mysqli_query($con,"update a_active set iwant=iwant+1 where id='".$aa_id."';");
					mysqli_select_db($con,'user');
					mysqli_query($con,"insert into relation(id,a_id,how) values('".$u."',".$aa_id.",4);");
					} 
				catch (Exception $e) 
				{
					throw $e;
					echo "<script>alert('操作失败，请联系维护人员');</script>";
				}	
			}
			else
			{
				$more='*请登录支持或者你已经点击喜欢';
			}
			mysqli_close($con);
		}
 ?>
	<body>
	<div id='background'></div>
	<div id='contain'>
		<div id='triangle-topleft'><a href="active.php?sel_stage=2" class='triangle' style='top:1em;'>可参加</a></div>
		<div id='header'>
			<div id='mark'>moc.o <span id='tm'>TM</span></div>
			<h2 id='title'>校园活动中心</h2>
		</div>
		<div id='triangle-topright'><a href="active.php?sel_stage=3" class='triangle' style='top:1em;right:0.2em;'>看往期</a></div>
		<div id='news'></div>
		<div id='active'>
			<?php
			$sel_page=1;
			if (isset($_GET['sel_page'])) {
				$sel_page=$_GET['sel_page'];
			}
			$each_page=5;
			$i=0;
			$pages=0;
			// session_start();
			// if (isset($_SESSION['user'])) {
			// 	echo $_SESSION["user"]['id'].'欢迎';
			// }
			echo "<br/>";
			$con=mysqli_connect('localhost','root','');
			if(!$con)
			{
				die('can not connect'.mysqli_error());
			}
			mysqli_select_db($con,'active');

			echo "<h1>已发布的活动：</h1>";
			if ($sel_stage==0) 
			{
				$sum=mysqli_query($con,'select count(id) as num from c_active');
				$sum=mysqli_fetch_array($sum);
				$active_num=$sum['num'];
				if ($active_num%$each_page==0) 
				{
					$pages=(int)($active_num/$each_page);
				}
				else
				{
					$pages=(int)($active_num/$each_page)+1;
				}
				//echo "<script>alert('".$each_page."+".$active_num."');</script>";
				$result=mysqli_query($con,"select * from c_active where stage!=4 and stage!=1 order by stage desc;");
			}
			else
			{
				$sum=mysqli_query($con,"select count(id) as num from c_active where stage!=4 and stage=".$sel_stage.";");
				$sum=mysqli_fetch_array($sum);
				$active_num=$sum['num'];
				$pages=(int)($active_num/$each_page)+1;
				//echo "<script>alert('".$pages."+".$active_num."');</script>";
				echo "<span ><a style='display:inline;text-decoration:none;' href='active.php?sel_stage=0'>查看全部</a></span>";
				$result=mysqli_query($con,"select * from c_active where stage!=4 and stage=".$sel_stage." order by stage desc;");
			}
			//echo "<script>alert(".$pages.");</script>";
			if (!($row=mysqli_fetch_array($result))) {
				echo "<span>暂时没有此类活动</span>";
			}
			else 
			{
				$flag=1;
				do
				{
					$i++;
					if ($i<=($sel_page-1)*$each_page) {
						continue;
					}
					$gif='pic/play.gif';
					echo "<script>var str='".$gif."';</script>";
					echo "<div class='page' onclick='page(this,str)' style='margin-left:".($page)."em;transform:perspective(800px ) rotateY(".($rec-180)."deg );'>";
					echo "<figure class='pagefront'></figure>";
					echo "<figure class='pageback'>";
					$page+=1;
					$rec+=8.6;
					// echo "<script>alert('".$row['stage']."');</script>";
					// $row=mysqli_fetch_array($result);
					// echo "<script>alert('".$row['stage']."');</script>";
					//设置茅
					// if ($row['stage']=='3'&&$flag==1) 
					// {
					// 	echo "<a name='end'></a>";
					// 	$flag++;	
					// }
					// if ($row['stage']=='2'&&$flag==2) {
					// 	echo "<a name='pub'></a>";
					// 	$flag++;
					// }
					// if($row['stage']=='1'&&$flag==3)
					// {
					// 	echo "<a name='exam'></a>";
					// 	$flag++;
					// }
					echo "<p> <a href='active_dsc.php?id=".$row['id']."' target='view_frame'> ".$row['name']."</a></p>";
					echo "<p>开始时间:".$row['begin']."</p>";
					echo "<p>结束时间:".$row['end']."</p>";
					echo "<p>发布人：(".$row['responser'].")</p>";
					if ($row['stage']=='1')
					{
						echo "<p>当前状态为：正在审核</p>";
					}
					elseif ($row['stage']=='2') 
					{
						echo "<p>当前状态为：已发布</p>";
						echo "<form action='active.php?id=".$_SESSION['user']['id']."' method='post' ><input type='text' value=".$row['id']." name='ca_id'hidden><input type='text' value=".$row['name']." name='ca_name'hidden><input type='text' value=".$row['cost']." name='ca_money'hidden><input type='submit' value='申请参加' name='ca'><span>".$error."</span></form>";
					}
					elseif ($row['stage']=='3') 
					{
						echo "<p>当前状态为：正在进行/已结束</p>";
					}
					echo "<br>----------------------------------<br></figure></div>";
				}while(($row=mysqli_fetch_array($result))&&$i<($sel_page*$each_page)); //安排框架指向其他url6
				echo "<div id='c_active_pages'>";
				for ($i=0; $i<$pages; $i++) { 
					echo "<a href='active.php?sel_stage=".$sel_stage."&sel_page=".($i+1)."'>".($i+1)."</a>";
				}
				echo "</div>";
			}
				$page=0;$rec=0;
			if ($sel_astage==0) {
				$result=mysqli_query($con,"select * from a_active where stage!=1;");
			}
			else
			{
				$result=mysqli_query($con,"select * from a_active where stage=2;");
			}
			?></div><?php
			echo "<br/><div id='active_p2'><h1>申请的心愿活动：</h1>";
			if($sel_astage==2)echo "<span><a href='active.php'style='text-decoration:none;'>查看全部</a></span>";
			if (!($row=mysqli_fetch_array($result))) {
				echo "<span>暂时没有此类活动</span>";
			}
			else
			{
				do
				 {
					echo "<div class='page'  style='margin-left:".($page)."em;transform:perspective(800px ) rotateY(".$rec."deg );' onclick='page(this)' onmouseover='page_scan(this)' onmouseout='this.style.zIndex=1;'><h2><a href='active_adsc.php?id=".$row['id']."'> ".$row['name']."</a></h2>";
					$page+=1;
					$rec+=8.6;
					echo "<h3>简介:".$row['dcb']."</h3>";
					echo "<h3>申请人:</h3>";
					if ($row['stage']=='1')
					{
						echo "<h4>当前状态为：正在审核</h4>";
					}
					elseif ($row['stage']=='2') 
					{
						echo "<h4>当前状态为：寻求发布人发布</h4>";
						echo "<h4>有".$row['iwant']."个人感兴趣</h4>";
						if (isset($_GET['sel']))
						{
							echo '进入个人中心可承办心愿';
						}
						else
						{
							echo "<form action='active.php?id=".$_SESSION['user']['id']."'method='post'><input type='text' value=".$row['id']." name='aa_id'hidden><input type='text' value=".$row['name']." name='aa_name'hidden><input type='submit' value='贡献酬金' name='aa'><input type='submit' name='iwant' style='margin-left:5px;' value='我喜欢'><span>".$more."</span></form>";
						}
					}
					elseif ($row['stage']=='3') 
					{
						echo "<h4>当前状态为：审核发布中</h4>";
					}
					elseif ($row['stage']=='4') {
						echo "<h4>当前状态为：已发布</h4>";
					}
					echo "<br>----------------------------------<br></div>";
				}while ($row=mysqli_fetch_array($result));
			}
			mysqli_close($con);
			echo "</div>";
			?>
		<div id='published'>
			
		</div>
		<div id='triangle-bottomleft'><a class='triangle' style='bottom:1em;' href='active.php?sel_astage=2'>可支持</a></div>
		<div id='triangle-bottomright'>
			<div id='user'>			
				<?php 
				if (empty($_SESSION['user']['id'])) 
				{
					echo "欢迎，请<a href='sel_sign.php'>登录</a>";
				}
				else echo "<a  href='person.php?id=".$_SESSION['user']['id']."'>".$_SESSION['user']['id']."</a>欢迎你";
			 	?>
			</div>
		</div>
	</div>	
	</body>
	<script type="text/javascript">
	var i=2;
	function hello()
	{
		//document.getElementById('background').style.height=document.getElementById('body').style.height;
		 // document.getElementById('body').style.height
	}
	function page(e,b)
	{ 
		// ;
		 var data=e.style.transform;
		 var zdata=e.style.zIndex;
		if((data!='translate(21em) rotateY(170deg) scale(1.06)')&&zdata=='')
		{
			i+=1;
			e.style.zIndex=i;
			e.style.transform=' translate(21em) rotateY(170deg) scale(1.06)';
			e.style.backgroundImage="url("+b+")";
			// var t=setTimeout(function(){time(e,data);},6000)
		    // setTimeout("e.style.transform="zdata";",4000);
		}
		else if((data!='translate(21em) rotateY(170deg) scale(1.06)')&&zdata!='')
		{
			e.style.transform=' translate(21em) rotateY(170deg) scale(1.06)';
			e.style.backgroundImage="url("+b+")";
		}
		else
		{
			// i-=1;
			// e.style.zIndex=i;
			e.style.transform='translate(47em) rotateY(180deg)';
			e.style.backgroundImage="url('2.jpg')";
			// e.style.backgroundColor='#CFBDDF';
		};
	}
	function time(e,data)
	{
		e.style.zIndex=1;
		e.style.transform=data;
	}
	function page_scan(e)
	{
		e.style.zIndex=2;
	}
	</script>
	</html>	