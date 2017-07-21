<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	include_once 'dbconfig.php';
	if(isset($_POST['btn-save']))
	{
		//variable for input data
		$product_name = $_POST['product_name'];
		$product_desc = $_POST['product_desc'];
		$supp_name = $_POST['supp_name'];
		$product_price_per_unit = $_POST['product_price_per_unit'];
		$product_quantity = $_POST['product_quantity'];

		//variable for input data
		
		//sql query for inserting data into database
			
			$query = "INSERT INTO products(product_name,product_desc,supp_name,product_price_per_unit,product_quantity) VALUES
			('$product_name','$product_desc','$supp_name','$product_price_per_unit','$product_quantity')";
		mysqli_query($link,$query);		
			
			//sql query for inserting data into database
			}
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
		<td align="center"><a href="product.php">back to product page
		</a></td>
		</tr>
		<tr>
		<td><input type="text" name="product_name" placeholder="Product Name" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="product_desc" placeholder="Product Description" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="supp_name" placeholder="Supplier Name" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="product_price_per_unit" placeholder="Price Per Unit" required /></td>
		</tr>
		<tr>
		<td><input type="text" name="product_quantity" placeholder="Product Quantity" required /></td>
		</tr>
		<tr>
		<td><button type="submit" name="btn-save"><strong>SAVE
		</strong></button></td>
		</tr>
		</table>
		</form>
	</div>
</div>

<div class="copyright"><p>Copyright © 2015 Sam Rent-A-Car Sdn. Bhd.</p></div>			 

</center>
</body>