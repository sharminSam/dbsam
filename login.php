<?php
include_once 'dbconfig.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//session_start(); //Starting Session
$error=''; //Variable To Store Error Message
if (isset($_POST['submit'])){
	if(empty ($_POST['username']) || empty($_POST['password'])){
		$error = "Username or Password is invalid";
	}
	else{
		//Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];

		//SQL query to fetch information of registerd users and finds user match.
		$query=mysqli_query($link,"select * from login where password='$password' AND username='$username'");
		$rows=mysqli_num_rows($query);
		if($rows == 1){
			//$_SESSION['login_user']=$username; //Initializing session
		header("location:main.php"); //Redirecting to other page
	} else{
	$error = "Username or Password is invalid";
}
mysqli_close($link); //Closing Connection
	}
}
?>