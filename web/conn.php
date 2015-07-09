<?php 
$db_servername="localhost:3306";
$db_username="root";
$db_password="111111";

 $conn = mysql_connect($db_servername,$db_username,$db_password) or die("数据库链接错误".mysql_error()); 
 mysql_select_db("food",$conn) or die("数据库访问错误".mysql_error());  
?>  