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
	#body
	{
		position:absolute;
		width:100%;
		height:300%;
		top:0;
		left:0;
		background-image: url('../pic/back1.jpg');
		background-size:cover;
		background-repeat: no-repeat;
		opacity:0.3;
		z-index:-1;
	}
	#body:after
	{

	}
	#background
	{
		position:absolute;
		top:0em;
		left:0em;
		width:100%;
		height:300%;
		background-image: url('../pic/1.jpg');
		background-size:cover;
		opacity:1;
/*		animation: background 5s 7;
		-moz-animation:background 5s 7;	
		-webkit-animation:background 5s 7;	
		-o-animation:background 5s 7;	*/
		z-index: -2;
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
		height:4em;
		background:#8FA5D3;
		text-align: center;
	}
	#title
	{
		font-size:2.5em;
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
		margin-top: 2em;
		width:65em;
		height:58em;
		margin-left:9%;
		background-image: url('../pic/back6.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		border:1em solid black;
	}
	#active_p2
	{
		clear:both;
		margin-top: 2em;
		margin-left: 4em;
		width:73em;
		height:45em;
		background-image: url('../pic/back1.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		border:1em solid black;
	}
	#p1
	{
		text-align: right;
		overflow:hidden;
	}
	#p1 span
	{
		font-size: 1.1em;
		font-weight:700;
		color:white;
		background-image: url('../pic/back7.jpg');
		background-repeat: no-repeat;
		background-size:cover;
		border-radius: 0.2em;
		box-shadow: 4.7em 3em 2em 4em black,1em 0.4em 1em 1em rgb(70,70,70);
		margin-left: 15em;
		padding:0.05em;
	}
	#p2
	{
		text-align: left;
		overflow:hidden;
	}
	#p2 span
	{
		padding:0.2em;
		padding-right: 0.4em;
		font-size: 1.1em;
		font-weight:700;
		font-style:oblique;
		border-radius: 0.3em;
		color:rgba(240,240,250,0.9);
		background-image: url('../pic/background.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		box-shadow: 1em -0.7em 1em 0.5em rgba(200,210,20,0.6),-1em 0.2em 1em 0.5em rgba(200,210,20,0.6);
	}
	.page 
	{

		 float:left;
		 background-size: cover;
		 z-index:1;
		 width:13em;
		 height:13.9em;
   		 overflow: hidden;
   		 margin-left: 2.5em;
   		 margin-top: 1.6em;
		 border:0.02em solid #CFEBE4;
		 border-top-right-radius: 3em;
		 border-bottom-left-radius: 2em;
		 border-bottom-right-radius: 2em;
		 border-top-left-radius: 2em;
		 border-right-color:0.2em solid #869591;
	 	 border-bottom-color:0.2em solid #869591;
	 	 box-shadow:0em 0.8em 1.3em #6B506E;
		-webkit-box-shadow:0em 0.8em 1.3em #6B506E;
		-moz-box-shadow:0em 0.8em 1.3em #6B506E; 
  		 transform-style: preserve-3d;
  		 -webkit-transform-style: preserve-3d;
  		 transition:1.5s;
	}

/*	#active .page 
	{
		 position:absolute;
		 top:8em;
		 background-size: cover;
		 z-index:1;
		 width:13em;
		 height:13em;
   		 overflow: hidden;
   		 margin-left: 5em;
   		 margin-top: 1.8em;
		 border:0.02em solid #CFEBE4;
		 border-top-right-radius: 3em;
		 border-bottom-left-radius: 2em;
		 border-bottom-right-radius: 2em;
		 border-top-left-radius: 2em;
		 border-right-color:0.2em solid #869591;
	 	 border-bottom-color:0.2em solid #869591;
	 	 box-shadow:0em 0.8em 1.3em #6B506E;
		-webkit-box-shadow:0em 0.8em 1.3em #6B506E;
		-moz-box-shadow:0em 0.8em 1.3em #6B506E; 
  		 transform-style: preserve-3d;
  		 -webkit-transform-style: preserve-3d;
  		 transition:1.5s;
	}*/

	#active_p2 .page
	{

		 float:left;
		 background-color: rgba(110,210,210,0.1);
		 z-index:1;
		 width:13em;
		 height:14em;
   		 overflow: hidden;
   		 margin-left: 3.2em;
   		 margin-top: 1.7em;
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
	#active_p2 small
	{
		position:relative;
		top:-2em;
		left:7em;
		font-size: 0.6em;
	}
	#advocate
	{
		font-size: 
	}
	.page figure
	{
		background-image: url('../pic/back3.jpg');
		opacity:0.5;
	}

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
		/* background-image: url("1.jpg");*/
		 /*background-size:cover;*/
/*		 backface-visibility: hidden;
		 -webkit-backface-visibility: hidden;*/
/*		 -webkit-transform: perspective(1200px ) rotateY(-89deg ) ;
   		 -moz-transform: perspective(1200px ) rotateY(-89deg ) ;
   		 -o-transform: perspective(1200px ) rotateY(-89deg ) ;
   		 transform: perspective(1200px) rotateY(-89deg ) ;*/


	#active .page:hover
	{	 
		box-shadow:0em 0.8em 1.3em rgba(10,223,233,0.9);
		-webkit-box-shadow:0em 0.8em 1.3em rgba(10,223,233,0.9);
		-moz-box-shadow:0em 0.8em 1.3em rgba(10,223,233,0.9); 
	}
	#active_p2 .page:hover
	{	 
		box-shadow:0em 0.8em 1.3em rgba(220,210,23,0.7);
		-webkit-box-shadow:0em 0.8em 1.3em rgba(220,210,23,0.7);
		-moz-box-shadow:0em 0.8em 1.3em rgba(220,210,23,0.7); 
	}
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
		font-size: 1.3em;
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
		position:absolute;
		top:48em;
		width:3em;
		right:8em;
		height:30em;
	}
	#c_active_pages  a
	{
		font-size:1.2em;
		font-weight: 600;
		font-style: italic;
		color:rgba(230,230,230,0.9);
		text-shadow: 0.2em 0.1em 0.3em #434844;
		margin-left:1em; 
		padding:0.3em;
		background-color:rgba(218,158,20,0.5); 
		border:0.4em solid #8DAEAC;
		border-left-color:rgba(0,0,0,0.5);
		border-right-color:rgba(0,0,0,0.2);
		border-bottom-right-radius: 0.5em;
		border-top-right-radius: 0.5em;
		text-decoration: none;
	}
	#c_active_auto_back
	{
		background-color: rgba(0,233,245,0.5);
		color:white;
		border-top-left-radius: 0.6em;
		border-bottom-left-radius: 0.6em;
		font-weight: 600;
		border:0.5em solid rgba(16,18,23,0.2);
		position:absolute;
		top:7em;
		left:3em;
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
	<div id='body'></div>
	<div id='background'></div>
	<div id='contain'>
		<div id='triangle-topleft'><a href="activec.php?sel_stage=2" class='triangle' style='top:1em;'>可参加</a></div>
		<div id='header'>
			<div id='mark'>moc.o <span id='tm'>TM</span></div>
			<h2 id='title'>校园活动中心</h2>
		</div>
		<div id='triangle-topright'><a href="activec.php?sel_stage=3 " class='triangle' style='top:1em;right:0.2em;'>看往期</a></div>
		<div id='active'>
			<?php
			$sel_page=1;
			if (isset($_GET['sel_page'])) {
				$sel_page=$_GET['sel_page'];
			}
			$each_page=12;
			$i=0;
			// $position_part=0;
			// $position_row=0;
			$pages=0;
			// session_start();
			// if (isset($_SESSION['user'])) {
			// 	echo $_SESSION["user"]['id'].'欢迎';
			// }
			$con=mysqli_connect('localhost','root','');
			if(!$con)
			{
				die('can not connect'.mysqli_error());
			}
			mysqli_select_db($con,'active');
			echo "<h1 id='p1'><span>已发布的活动</span></h1>";
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
				// echo "<script>alert('".$each_page."+".$active_num."');</script>";
				$result=mysqli_query($con,"select * from c_active where stage!=4 and stage!=1 order by stage desc;");
			}
			else
			{
				$sum=mysqli_query($con,"select count(id) as num from c_active where stage!=4 and stage=".$sel_stage.";");
				$sum=mysqli_fetch_array($sum);
				$active_num=$sum['num'];
				$pages=(int)($active_num/$each_page)+1;
				//echo "<script>alert('".$pages."+".$active_num."');</script>";
				echo "<a id='c_active_auto_back' style='text-decoration:none;' href='activec.php?sel_stage=0'>查看全部</a></span>";
				$result=mysqli_query($con,"select * from c_active where stage!=4 and stage=".$sel_stage." order by stage desc;");
			}
			//echo "<script>alert(".$pages.");</script>";
			if (!($row=mysqli_fetch_array($result))) {
				echo "<span>暂时没有此类活动</span>";
			}
			else 
			{
				// $flag=1;
				do
				{
					$i++;
					if ($i<=($sel_page-1)*$each_page) {
						continue;
					}
					$gif='pic/play.gif';
					echo "<script>var str='".$gif."';</script>";
				// $position_row=(int)($position_part/4.1);	
					echo "<div class='page' onmouseover='pagescan(this,str)'>";
					// $position_part++;
					// $page+=1;
					// $rec+=8.6;
					// echo "<script>alert('".$row['stage']."');</script>";
					// $row=mysqli_fetch_array($result);
					// echo "<script>alert('".$row['stage']."');</script>";
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
						if (isset($_SESSION['user'])) {
							echo "<form action='activec.php?id=".$_SESSION['user']['id']."' method='post' ><input type='text' value=".$row['id']." name='ca_id'hidden><input type='text' value=".$row['name']." name='ca_name'hidden><input type='text' value=".$row['cost']." name='ca_money'hidden><input type='submit' value='申请参加' name='ca'><span>".$error."</span></form>";
						}
						else
						{
							echo "参加请<a href='sel_page.php'>登录</a> 。";
						}
					}
					elseif ($row['stage']=='3') 
					{
						echo "<p>当前状态为：正在进行/已结束</p>";
					}
					echo "<br>----------------------------------<br></div>";
				}while(($row=mysqli_fetch_array($result))&&$i<($sel_page*$each_page)); //安排框架指向其他url6
			}
			echo "</div>";
			echo "<div id='c_active_pages'>";
			for ($i=0; $i<$pages; $i++)
			{ 
				if($i>6)continue;
				echo "<a href='activec.php?sel_stage=".$sel_stage."&sel_page=".($i+1)."'>".($i+1)."</a>";
			}
			if($pages>6)
			{
				echo "<a href='#'>共".$pages."页</a>";
				echo "<a><input id='sel_page_input' type='text'  onchange='sel_page(".$pages.",".$sel_stage.")'></a>";
			}
			echo "</div>";
			if ($sel_astage==0) {
				$result=mysqli_query($con,"select * from a_active where stage!=1;");
			}
			else
			{
				$result=mysqli_query($con,"select * from a_active where stage=2;");
			}
			?>
		<div id='active_p2'>
			<?php
			echo "<h1 id='p2'><span>申请的心愿活动</span></h1>";
			if($sel_astage==2)echo "<span><a href='activec.php'style='text-decoration:none;'>查看全部</a></span>";
			if (!($row=mysqli_fetch_array($result))) {
				echo "<span>暂时没有活动心愿</span>";
			}
			else
			{
				do
				 {
					echo "<div class='page'><p><a href='active_adsc.php?id=".$row['id']."'> ".$row['name']."</a></p>";
					echo "<p>简介:".$row['dcb']."<p>";
					echo "<p>申请人:</p>";
					if ($row['stage']=='1')
					{
						echo "<p>当前状态为：正在审核</p>";
					}
					elseif ($row['stage']=='2') 
					{
						echo "<p>当前状态为：寻求发布人发布</p>";
						echo "<small>有".$row['iwant']."个人感兴趣</small>";
						if (isset($_GET['sel']))
						{
							echo '进入个人中心可承办心愿';
						}
						else
						{
							echo "<p><form action='activec.php' method='post'><input type='text' value=".$row['id']." name='aa_id'hidden><input type='text' value=".$row['name']." name='aa_name'hidden><input type='submit' style='position:relative;top:-8em;left:1em;font-size:0.6em;' value='贡献酬金' name='aa'><input type='submit' name='iwant' style='position:relative;left:8em;top:-8em;font-size:0.6em;' value='我喜欢'><span>".$more."</span></form></p>";
						}
					}
					elseif ($row['stage']=='3') 
					{
						echo "<p>当前状态为：审核发布中</p>";
					}
					elseif ($row['stage']=='4') {
						echo "<p>当前状态为：已发布</p>";
					}
					echo "<br>----------------------------------<br></div>";
				}while ($row=mysqli_fetch_array($result));
			}
			mysqli_close($con);
			?>
		</div>
		<div id='triangle-bottomleft'><a class='triangle' style='bottom:1em;' href='activec.php?sel_astage=2'>可支持</a></div>
		<div id='triangle-bottomright'>
			<div id='user'>			
				<?php 
				if (empty($_SESSION['user']['id'])) 
				{
					echo "请<a href='sel_sign.php'>登录</a>";
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
	function page_scan(e,img)
	{
		e.style.zIndex=3;
		e.style.width='22em';
	}
	function sel_page(pages,stage)
	{
		var sel_page=document.getElementById('sel_page_input').nodeValue;
		if((int)pages&&int(pages)<sel_page)
		{
			alert('输入非法');
		}
		else
		{
			window.location.href='activec.php?sel_page='+sel_page+'&sel_stage='+stage+'';
		}

	}
	</script>
	</html>	