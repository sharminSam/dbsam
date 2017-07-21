<?php
include('login.php'); // Includes login Script

if(isset($_SESSION['login_user'])){
	header("location:main.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body background="background.jpg">
<div id="main">
<img src="lambo.jpg" width="400" height="255" align="center">
<h1> Welcome to SAM RENT-A-CAR SDN. BHD. </h1>
<h2>Please Log-in</h2>
<dir id="login">

<h2>Login Form</h2>
<form action="" method="post">
<label>Username :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="************" type="password">
<input name="submit" type="submit" value=" Login ">
<b id="add account"><a href="new account.php">Sign up for new account?</a></b>
<br><br>
<span><?php echo $error; ?></span>
</form>
</div>
</div>

</body>
</html>