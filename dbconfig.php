<?php
$host='localhost';
$user='root';
$pass='';
$db='dbsam';

$link=mysqli_connect($host,$user,$pass);
mysqli_select_db($link,$db);
if($link)
	echo 'connected successfully to mydb database';
?>