<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $query=mysqli_query($link,"DELETE FROM products WHERE product_id=".$_GET['delete_id']);
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
 $query=mysqli_query($link,"select * from login where password='$password' AND username='$username'");
		$rows=mysqli_num_rows($query);
}
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
  window.location.href='edit_product_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Are you sure want to delete?'))
 {
  window.location.href='product.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome!</i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</br>
<div id='cssmenu'>
		<ul style='list-style-type: none; display:block; width:350px; margin:0 auto;'>
		   <li><a href='main.php'>Main Page</a></li>
		   <li class='active'><a href='product.php'>Product</a></li>
		   <li><a href='aboutus.php'>About Us</a></li>
		</ul>
	</div>

<center><img src="lambo.jpg" width="400" height="255" align="center">

<div id="header">
 <div id="content">
    <label>SAM RENT-A-CAR SDN. BHD.</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="8"><a href="add_product_data.php">Click Here to Add New Product</a></th>
    </tr>
    <th>Product Name</th>
    <th>Product Description</th>
    <th>Supplier Name</th>
	<th>Price Per Unit</th>
	<th>Total Quantity</th>
	<th>Date Created</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $query=mysqli_query($link,"SELECT * FROM products");
 while($row=mysqli_fetch_row($query))

	 
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="editButton.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="dropButton.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

<div class="copyright"><p>Copyright © 2017 Sam Rent-A-Car Sdn. Bhd.</p></div>			 

</center>
</body>
</html>