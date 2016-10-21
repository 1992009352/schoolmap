<?php 
$con=mysql_connect('localhost','root','');
mysql_select_db('active',$con);
mysql_query("update a_active set name='测试寻求活动' where stage=2;");
 ?>