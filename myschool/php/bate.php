<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<script type="text/javascript">
	</script>
</head>


<style type="text/css">
@keyframes left_door_do
{

	50%
	{
		box-shadow: 10px 10px 8px black;
		-webkit-transform:  rotateY(15deg);
		-moz-transform:  rotateY(15deg);
		-o-transform: rotateY(15deg);
		-ms-transform:  rotateY(15deg);
		transform:  rotateY(15deg);
	}

}

@-moz-keyframes left_door_do /* Firefox */
{
	50%
	{
		box-shadow: 10px 10px 8px black;
		-webkit-transform:  rotateY(15deg);
		-moz-transform:  rotateY(15deg);
		-o-transform: rotateY(15deg);
		-ms-transform:  rotateY(15deg);
		transform:  rotateY(15deg);
	}


}

@-webkit-keyframes left_door_do /* Safari 和 Chrome */
{
	50%
	{
		box-shadow: 10px 10px 6px black;
		-webkit-transform:  rotateY(15deg);
		-moz-transform:  rotateY(15deg);
		-o-transform: rotateY(15deg);
		-ms-transform:  rotateY(15deg);
		transform:  rotateY(15deg);
	}

}

@-o-keyframes left_door_do /* Opera */
{
	50%
	{
		box-shadow: 10px 10px 8px black;
		-webkit-transform:  rotateY(15deg);
		-moz-transform:  rotateY(15deg);
		-o-transform: rotateY(15deg);
		-ms-transform:  rotateY(15deg);
		transform:  rotateY(15deg);
	}

}
/*	.ch-item {
	width: 100%;
	height: 100%;
	border-radius: 50%;
	-o-border-radius: 50%;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	position: relative;
	cursor: default;
	-webkit-perspective: 900px;
	-moz-perspective: 900px;
	-o-perspective: 900px;
	-ms-perspective: 900px;
	perspective: 900px;
}*/
/*	.ch-info
	{
		width: 360px;
		height: 50px;
	}

	.ch-info  div {
	display: block;
	position: absolute;
	width: 50%;
	height: 50%;
	border-radius: 50%;
	background-position: center center;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transition: all 0.4s linear;
	-moz-transition: all 0.4s linear;
	-o-transition: all 0.4s linear;
	-ms-transition: all 0.4s linear;
	transition: all 0.4s linear;
	-webkit-transform-origin: 50% 0%;
	-moz-transform-origin: 50% 0%;
	-o-transform-origin: 50% 0%;
	-ms-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
}*/
/*	.ch-info .ch-info-front {

	box-shadow: inset 0 0 0 16px rgba(0,0,0,0.3);
}

	.ch-info .ch-info-back {
	-webkit-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
	-moz-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
	-o-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
	-ms-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
	transform: translate3d(0,0,-220px) rotate3d(1,0,0,290deg);
	background:#788cb6;
	opacity: 0;
}
*/

/*Adjust Gradient*/
/* .menu a:active {
background: #00b7ea; Old browsers
background: -moz-linear-gradient(top,  #00b7ea 36%, #009ec3 100%); FF3.6+
background: -webkit-gradient(linear, left top, left bottom, color-stop(36%,#00b7ea), color-stop(100%,#009ec3)); Chrome,Safari4+
background: -webkit-linear-gradient(top,  #00b7ea 36%,#009ec3 100%); Chrome10+,Safari5.1+
background: -o-linear-gradient(top,  #00b7ea 36%,#009ec3 100%); Opera 11.10+
background: -ms-linear-gradient(top,  #00b7ea 36%,#009ec3 100%); IE10+
background: linear-gradient(top,  #00b7ea 36%,#009ec3 100%); W3C
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#009ec3',GradientType=0 ); IE6-9
}

Pulls in Wings
.menu:active .menu {
  margin: -20px 0 0 10px;
}

.menu:active .top {
  margin: -70px 0 0 10px;
} */


	#container
	{
		max-width: 92%;
		height:700px;
		margin: auto auto;
	}
	

	.menu a{text-decoration: blink;font-weight:strong;color: #ffffff;text-shadow: #8E8E8E 0px 3px 3px;font-size: 15px;}
	.menu a::before
	{
		color:#F5F5DC;
		content: attr(data-hover);
		position: absolute;
		opacity: 0;
		text-shadow: 0 3 3px rgba(255,255,255,0.3);
		-webkit-transform: scale(1.1) translateX(10px) translateY(-10px) rotate(4deg);
		-moz-transform: scale(1.1) translateX(10px) translateY(-10px) rotate(4deg);
		transform: scale(1.1) translateX(10px) translateY(-10px) rotate(4deg);
		-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
		-moz-transition: -moz-transform 0.3s, opacity 0.3s;
		transition: transform 0.3s, opacity 0.3s;
		pointer-events: none;
	}
	.font{text-shadow: #FFE4C4 0px 1px 0.5px;font-size: 18px;}
	.menu a:hover::before,a:focus:before 
	{
		-webkit-transform: scale(1) translateX(0px) translateY(0px) rotate(0deg);
		-moz-transform: scale(1) translateX(0px) translateY(0px) rotate(0deg);
		transform: scale(1) translateX(0px) translateY(0px) rotate(0deg);
		opacity: 1;
	}
	#header
	{
		background-color: rgba(156,60,30,0.2);
		max-height: 13%;
	}
	#headermain
	{
		width :360px;
		height: 50px;
		position: inherit;
		margin:0 auto;
	}
	#header  #front
	{
		
		width: 360px;
		height: 50px;
		line-height: 50px;
		display: block;
		text-align: center;
		text-shadow: #8E8E8E 0px 3px 3px;
		font-size: 25px;
		background-color: rgba(255,245,100,0.9);
		color:#000000;
		margin:auto;
		border-radius: 15px;
		opacity: 0.9;
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		-o-transform-style: preserve-3d;
		-ms-transform-style: preserve-3d;
		transform-style: preserve-3d;
		-webkit-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		transition: all 0.4s linear;
		-webkit-transform-origin: 50% 0%;
		-moz-transform-origin: 50% 0%;
		-o-transform-origin: 50% 0%;
		-ms-transform-origin: 50% 0%;
		transform-origin: 50% 0%;
	}
	/*位置与相对所在的元素关系对应*/
	#header #back
	{
		position: relative;
		top: -50px;
		margin: auto;
		line-height: 50px;
		display: block;
		text-align: center;
		text-shadow: #8E8E8E 0px 3px 3px;
		font-size: 25px;
		background-color: #7FFFD4;
		color:#000000;
		border-radius: 15px;
		opacity: 0;
		-webkit-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
		-moz-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
		-o-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
		-ms-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
		transform: translate3d(0,0,-200px) rotate3d(1,0,0,290deg);
		-webkit-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		transition: all 0.4s linear;
		-webkit-transform-origin: 50% 0%;
		-moz-transform-origin: 50% 0%;
		-o-transform-origin: 50% 0%;
		-ms-transform-origin: 50% 0%;
		transform-origin: 50% 0%;
		background:#788cb6;
	}
	#headermain:hover #front{
	-webkit-transform: translate3d(0,280px,0) rotate3d(1,0,0,-90deg);
	-moz-transform: translate3d(0,280px,0) rotate3d(1,0,0,-90deg);
	-o-transform: translate3d(0,280px,0) rotate3d(1,0,0,-90deg);
	-ms-transform: translate3d(0,280px,0) rotate3d(1,0,0,-90deg);
	transform: translate3d(0,66px,0) rotate3d(1,0,0,-290deg);
	opacity: 0;
}

	#headermain:hover #back {
	-webkit-transform: rotate3d(1,0,0,0deg);
	-moz-transform: rotate3d(1,0,0,0deg);
	-o-transform: rotate3d(1,0,0,0deg);
	-ms-transform: rotate3d(1,0,0,0deg);
	transform: rotate3d(1,0,0,0deg);
	opacity:1;
}

	.menu
	{
		margin-top: 35px; 
		float: left;
		padding-top:10px; 
		width: 200px;
		height: 400px;
		background-color: rgba(200,200,200,0);
		z-index:-2;

	}

	#left_door
	{
		position:absolute;
		width:168px;
		height:440px;
		left:53px;
		opacity:0.68;
		text-align: center;
		background-color: rgba(200,200,200,0.4);
		z-index:-1;
		animation:left_door_do 4s;
		-webkit-transform: perspective( 560px ) rotateY(35deg );
	    -moz-transform: perspective( 560px ) rotateY(35deg );
	    -o-transform: perspective( 560px ) rotateY(35deg );
	    transform: perspective( 560px ) rotateY(35deg );
	    background:linear-gradient(right,#8A9C9D 10%,#98F3F8);
	    background:-moz-linear-gradient(right,#8A9C9D 10%,#98F3F8);
	    background:-webkit-linear-gradient(right,#8A9C9D 10%,#98F3F8);
	    background:-o-linear-gradient(right,#8A9C9D 10%,#98F3F8);
	    background:-ms-linear-gradient(right,#8A9C9D 10%,#98F3F8);
/*	    -webkit-transition: all 0.5s ease;
  	    -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
  	    -ms-transition: all 0.5s ease;
        transition: all 0.5s ease;*/
	}

	.menu a
	{
		clear: both;
		display: block;
		background: rgba(50,90,110,0.6);
		height: 40px;
		width: 180px;
		margin:0px 0px 0px -240px;
		font: 17px/50px 'Arial','Microsoft YaHei','黑体','宋体',sans-seri;
		color: #fff;
		text-decoration: none;
		text-align: center;
		position: absolute;
		z-index: 1;
		-webkit-border-radius:5px;
		-moz-border-radius:5px; 
		border-radius: 5px;
		-webkit-box-shadow:2px 2px 8px rgba(0,0,0,0,2);
		-moz-box-shadow:2px 2px 8px rgba(0,0,0,0,2);
		box-shadow:2px 2px 8px rgba(0,0,0,0,2);
		-webkit-transition: all 0.5s ease;
  	   -moz-transition: all 0.5s ease;
       -o-transition: all 0.5s ease;
  	    -ms-transition: all 0.5s ease;
         transition: all 0.5s ease;
	}
	.menu #main{
		display: block;
		height: 50px;
		width: 200px;
		margin-left: -120px;
		color: white;
		z-index: 0;
		font: italic bold 22px/50px 'Arial','Microsoft YaHei','黑体','宋体',sans-seri;
/*		text-decoration: none;*/
		text-align: center;
/* 		text-transform: uppercase; */
		-webkit-border-radius:10px;
		-moz-border-radius:10px; 
		border-radius: 10px;
		-webkit-box-shadow:2px 2px 8px rgba(0,0,0,0,2);
		-moz-box-shadow:2px 2px 8px rgba(0,0,0,0,2);
		box-shadow:2px 2px 8px rgba(0,0,0,0,2);
		background: -moz-linear-gradient(top, #00b7ea 0%, #009ec3 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00b7ea), color-stop(100%,#009ec3)); /* Chrome,Safari4+ */
	    background: -webkit-linear-gradient(top, #00b7ea 0%,#009ec3 100%); /* Chrome10+,Safari5.1+ */
 	    background: -o-linear-gradient(top, #00b7ea 0%,#009ec3 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top, #00b7ea 0%,#009ec3 100%); /* IE10+ */
		background: linear-gradient(top, #00b7ea 0%,#009ec3 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#009ec3',GradientType=0 ); /* IE6-9 */
		-webkit-transition: all 0.5s ease;
  	   -moz-transition: all 0.5s ease;
       -o-transition: all 0.5s ease;
  	    -ms-transition: all 0.5s ease;
        transition: all 0.5s ease;
		}
	
	.menu p{

		background-color:white;
		display: block;
		height: 40px;
		width: 180px;
		margin:-46px 0 0 -160px;
		
		text-align: center;
		font: 17px/50px Helvetica ,Verdana,sams-serif;
		color: #fff;	
	
		position: absolute;
		z-index: 0;

		-webkit-border-radius:5px;
		-moz-border-radius:5px; 
		border-radius: 5px;
		-webkit-box-shadow:2px 2px 8px rgba(0,0,0,0,2);
		-moz-box-shadow:2px 2px 8px rgba(0,0,0,0,2);
		box-shadow:2px 2px 8px rgba(0,0,0,0,2);

		-webkit-transition: all 0.5s ease;
  	    -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
  	    -ms-transition: all 0.5s ease;
        transition: all 0.5s ease;
	}

/*头条格式*/
#toutiao
{
	background: black;
	position: absolute;
	left: 350px;
	top:160px;
	height: 180px;
	width: 660px;
}
#myschool
{
	position:absolute;
	right:3.6em;
	width:13%;
	height:70%;
	/*background-color: #F898D2;*/
	background:linear-gradient(right,#98F3F8 10%,#8A9C9D);
	background:-moz-linear-gradient(right,#98F3F8 10%,#8A9C9D);
	background:-webkit-linear-gradient(right,#98F3F8 10%,#8A9C9D);
	background:-o-linear-gradient(right,#98F3F8 10%,#8A9C9D);
	background:-ms-linear-gradient(right,#98F3F8 10%,#8A9C9D);
	opacity:0.68;
	-webkit-transform: perspective( 560px ) rotateY(-35deg );
    -moz-transform: perspective( 560px ) rotateY(-35deg );
     -o-transform: perspective( 560px ) rotateY(-35deg );
    transform: perspective( 560px ) rotateY(-35deg );

	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
    transition: all 0.5s ease;

/*	background:linear-gradient(right,#9C9697 20%,#FB6284 40%,#90B5F0 60%,#70FC9D 80%,#9C9697 100%);*/
/*	background: -moz-linear-gradient(bottom,#9C9697 10%,#FB6284 40%,#90B5F0 60%,#70FC9D 90%,#9C9697 100%); 
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00b7ea), color-stop(100%,#009ec3)); 
	background: -webkit-linear-gradient((bottom,#9C9697 10%,#FB6284 40%,#90B5F0 60%,#70FC9D 90%,#9C9697 100%);
 	background: -o-linear-gradient((bottom,#9C9697 10%,#FB6284 40%,#90B5F0 60%,#70FC9D 90%,#9C9697 100%); 
    background: -ms-linear-gradient((bottom,#9C9697 10%,#FB6284 40%,#90B5F0 60%,#70FC9D 90%,#9C9697 100%); 
	background: linear-gradient((bottom,#9C9697 10%,#FB6284 40%,#90B5F0 60%,#70FC9D 90%,#9C9697 100%);*/ 
}
#myschool:hover
{
	opacity:1;
}

#block
{
	color:#463129;
	margin:1.3em auto;
	width:56%;
	height:13%;
	background:white;
	opacity:0.8;
	padding-top: 1.4em;
	text-align: center;
	font-size: large;
	font-weight:700;
	border-radius: 1em;
	transition:transform 1.2s;
}
#block:hover
{
	opacity:1;
	box-shadow:0.6em 0.6em 0.6em #F7EE7D;
	-webkit-box-shadow:0.6em 0.6em 0.6em #F7EE7D;
	-moz-box-shadow:0.6em 0.6em 0.6em #F7EE7D;
	-webkit-transform: perspective( 560px ) rotateY(24deg ) translate(-0.1em) scale(1.27);
    -moz-transform: perspective( 560px ) rotateY(24deg ) translate(-0.1em) scale(1.27);
    -o-transform: perspective( 560px ) rotateY(24deg ) translate(-0.1em) scale(1.27);
    transform: perspective( 560px ) rotateY(24deg ) translate(-0.1em) scale(1.27);
/*	transform:scale(1.2);*/
}
#myclass
{
	position:absolute;
	left:25%;
	top:60%;
	width:52%;
	height:26%;
	background-color:white;
	overflow: scroll;
}
</style>
<?php 
$myfile='';
if (isset($_POST['class'])&&isset($_FILES['myclass'])) {
	echo "<script>alert('进来');</script>";
	if(is_uploaded_file($_FILES['myclass']['tmp_name'])&&($_FILES['myclass']['type']=='image/pjpeg'||$_FILES['myclass']['type']=='image/jpeg'))
	{
		echo "<script>alert('发现文件');</script>";
		$type=$_FILES['myclass']['type'];
		$size=$_FILES['myclass']['size'];
		$file=$_FILES['myclass']['tmp_name'];
		$error=$_FILES['myclass']['error'];
		echo "<script>alert('".$_FILES['myclass']['name']."');</script>";
		echo "<script>alert('".$_FILES['myclass']['tmp_name']."');</script>";
		switch($type)
		{ // 得到上传文件后缀
			case 'image/pjpeg' : $extension='.jpg'; //jpeg
			break;
			case 'image/jpeg' :$extension='.jpg';
			break;
			default:
			echo "出现错误";
		}
		echo "<script>alert('".$extension."');</script>";
		$class_path='D:\software\wamp\www\myschool\pic';
		$myfile="test".$extension;
		if (file_exists("pic/test.jpg")) {
			echo "<script>alert('exist');</script>";
		}
		else
		{
			move_uploaded_file($file,'pic/test.jpg');
			echo "<script>alert('ok');</script>";
		}
	}
}

 ?>
<body style="font-family:'Arial','Microsoft YaHei','黑体','宋体',sans-seri;background-color:rgba(132,189,200,0.1);">
	<div id="container">
		<div id="header"><!--标题DIV-->
				<div id="headermain">
					<div id="front"><h3>长沙理工大学教育集成环境</h3></div>
					<div id="back"><h4 style="display:inline;">欢迎联系我们:1992009352</h2></div>
				</div>
		</div>
		<small style="" onclick="changeimg();">更换网页背景 选择地域/学校</small>
		<div class="menu" ><!--菜单DIV-->
			<a id="main" href="#" onclick="menu_out()">去哪儿</a>
<!-- 		<p class="font"><a href="http://www.csust.edu.cn/pub/cslgdx/index.htm" style="margin-left: 10px" data-hover="浏览学校首页">浏览学校首页</a></p>
</strong> http://www.csust.edu.cn/pub/cslgdx/index.htm     -->
			<a id="menu-1" href='sel_sign.php' data-hover="校园活动">校园活动</a>
			<a id="menu-2" href="#" data-hover="购置版块" onclick="alert('该板块正在升级中');">购置版块</a>
			<a id="menu-0" href="#" data-hover="专业版块" onclick="alert('该板块正在升级中');">专业版块</a>
		</div>
		<div id="left_door">版本号：0.3beta</div>
		<div id="toutiao"><!--头条新闻DIV-->
			<div style="width:660px;height:180px; position:absolute;background-color:#fff;opacity: 0;"onclick="open_it(this)"></div>
			<iframe src="toutiao.html" scrolling="no" style="width: 660px;height: 180px;"></iframe>
		</div>
		<div id='myclass'>
		<span>我的课表</span>
			<?php 
			if(!empty($file))
				{
					echo "<img src='pic/test.jpg' alt=''>";
				}
			else
			{

			}
			 ?>
			 <?php  //根据是否存在课表 输出表单
			 ?>
			<form action="bate.php" method='post' enctype="multipart/form-data">
				<input type="file" name='myclass'>
				<input type="submit" name='class' value='提交'>
			</form>
		</div>
		<div id='myschool'>
			<a href="http://www.csust.edu.cn/pub/cslgdx/index.htm" style='text-decoration: none;'><div id='block'>网教平台</div></a>
			<a title='详细查询' href="http://www.csust.edu.cn:8081/" style='text-decoration: none;'><div id='block'>教务平台</div></a>
			<a href="http://www.csust.edu.cn/pub/cslg/xxzy/ldwlzx/" style='text-decoration: none;'><div id='block'>网络中心</div></a>
		</div>
	</div>
</body>



<script type="text/javascript">
var colors = ["#ff0000", "#00ff00", "#0000ff", "#ffff00", "#00ffff", "#ff00ff"];
var index = 0;
var menuflag=0;
// 换色方法


function changebc() {
    // 获取颜色代码
    var color = colors[index++];
    // 更改文档的背景色
    document.bgColor = color;
    if (index == colors.length) {
        index = 0;
    }
}


function changeimg(){
index++;

switch(index){
	case 1:
	document.body.background="../pic/background.jpg";break;
	case 2:
	document.body.background="../pic/2.jpg";break;
	case 3:
	document.body.background="rgba(132,189,200,0.1)";
	index=0;
	break;
	default:break;
	}
}

function test()
{
	alert("oj?");
}

function open_it(e)
{
	window.open("http://www.csust.edu.cn/pub/xww/xnyw/");
}

function menu_out()
{
if (menuflag==0) 
	{
		document.getElementById('main').style.margin="0  0 0 0px";
		document.getElementById('menu-1').style.margin="55px 0 0 10px";
		document.getElementById('menu-2').style.margin="100px 0 0 10px";
		document.getElementById('menu-0').style.margin="145px 0 0 10px";
		// document.getElementById('main').style.color="black";
		menuflag=1;

	} 
	else
		{
			document.getElementById('main').style.margin="0 0 0 -120px";
			menuflag=0;
			document.getElementById('menu-1').style.margin="0px 0 0 -240px";
			document.getElementById('menu-2').style.margin="0px 0 0 -240px";
			document.getElementById('menu-0').style.margin="0px 0 0 -240px";
		}
	
}
</script>
</html>
