<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	include_once 'dbconfig.php';
	if(isset($_POST['btn-save']))
	{
		//variable for input data
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		//variable for input data
		
		//sql query for inserting data into database
			
			$sql="INSERT INTO login(id,username,password) VALUES
			('$id','$username','$password')";
		//mysql_query($sql_query);
		$query=mysqli_query($link,$sql);
			if($query){
				echo 'data inserted successfully';
			}else
				echo 'data not inserted';
			}
			
			//sql query for inserting data into database
	
			
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8"/>
<title>SAM RENT-A-CAR SDN. BHD.</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<center>

<div id="header">
 <div id="content">
	</label>SAM RENT-A-CAR SDN. BHD.</label>
	</div>
</div>
<div id="body">
	<div id="content">
		<form method="post">
		<table align="center">
		<tr>
		<td align="center"><a href="index.php">back to main page
		</a></td>
		</tr>
		<tr>
		<td><input type="text" name="id" placeholder="ID" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="username" placeholder="User Name" required /></td>
		</tr>
		<tr>
		<td><input type="password" name="password" placeholder="Password" required /></td>
		</tr>
		<tr>
		<td><button type="submit" name="btn-save"><strong>SAVE
		</strong></button></td>
		</tr>
		</table>
		</form>
	</div>
</div>

<div class="copyright"><p><font color="000000">Copyright &copy; 2015 Sentral College Penang </font></p></div>	 

</center>
</body>