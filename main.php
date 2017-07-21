<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $query=mysqli_query($link,"DELETE FROM users WHERE user_id=".$_GET['delete_id']);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAM RENT-A-CAR SDN. BHD.</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Are you sure want to edit?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Are you sure want to Delete?'))
 {
  window.location.href='main.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome!</b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</br>

<div id='cssmenu'>
		<ul style='list-style-type: none; display:block; width:380px; margin:0 auto;'>
		   <li class='active'><a href='main.php'>Main Page</a></li>
		   <li><a href='product.php'>Products</a></li>
		   <li><a href='aboutus.php'>About Us</a></li>
		</ul>
	</div>

<center><img src="lambo.jpg" width="400" height="200" align="center">

<div id="header">
 <div id="content">
    <label>SAM RENT-A-CAR SDN. BHD.</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">Click Here to Add New User Profile.</a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $query=mysqli_query($link,"SELECT * FROM users");
 while($row=mysqli_fetch_row($query))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="editButton.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="dropButton.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

<div class="copyright"><p><font color="000000">Copyright &copy; 2017 SAM RENT-A-CAR SDN. BHD.</font></p></div>			 

</center>
</body>
</html>