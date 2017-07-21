<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	include_once 'dbconfig.php';
	if(isset($_POST['btn-save']))
	{
		header("Location: main.php");
		///variable for input data
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city_name = $_POST['city_name'];
		//variable for input data
		
		//sql query for inserting data into database
		$query = "INSERT INTO users(first_name,last_name,user_city) VALUES
			('$first_name','$last_name','$city_name')";
		mysqli_query($link,$query);
			
}			
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8"/>
<title>SLM System</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<center>
<div id="header">
 <div id="content">
	<label>SAM RENT-A-CAR SDN. BHD.</label>
	</div>
</div>
<div id="header">
 <div id="content">
	<label>New Student</label>
	</div>
</div>
<div id="body">
	<div id="content">
		<form method="post">
		<table align="center">
		<tr>
		<td align="center"><a href="main.php">back to main page
		</a></td>
		</tr>
		<tr>
		<td><input type="text" name="first_name" placeholder="First Name" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="last_name" placeholder="Last Name" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="city_name" placeholder="City" required /></td>
		</tr>
		<tr>
		<td><button type="submit" name="btn-save"><strong>save</strong></button></td>
		</tr>
		</table>
		</form>
	</div>
</div>

<div class="copyright"><p><font color="000000">Copyright &copy; 2017 SAM RENT-A-CAR SDN. BHD. </font></p></div>		 

</center>
</body>