<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $query="SELECT * FROM products WHERE product_id=".$_GET['edit_id'];
 $result_set=mysqli_query($link,$query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
	$product_name = $_POST['product_name'];
	$product_desc = $_POST['product_desc'];
	$supp_name = $_POST['supp_name'];
	$product_price_per_unit = $_POST['product_price_per_unit'];
	$product_quantity = $_POST['product_quantity'];
 // variables for input data

 // sql query for update data into database
 $query = "UPDATE products SET product_name='$product_name',product_desc='$product_desc',supp_name='$supp_name',product_price_per_unit='$product_price_per_unit',product_quantity='$product_quantity' WHERE product_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($link,$query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='product.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: product.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAM RENT-A-CAR SDN. BHD.</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>SAM RENT-A-CAR SDN. BHD.</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
		<tr>
		<td><input type="text" name="product_name" placeholder="Product Name" value="<?php echo $fetched_row['product_name']; ?>" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="product_desc" placeholder="Product Description" value="<?php echo $fetched_row['product_desc']; ?>" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="supp_name" placeholder="Supplier Name" value="<?php echo $fetched_row['supp_name']; ?>" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="product_price_per_unit" placeholder="Price Per Unit" value="<?php echo $fetched_row['product_price_per_unit']; ?>" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="product_quantity" placeholder="Product Quantity" value="<?php echo $fetched_row['product_quantity']; ?>" required /></td>
		</tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

<div class="copyright"><p>Copyright © 2017 Sam Rent-A-Car Sdn. Bhd.</p></div>			 

</center>
</body>
</html>