<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($link,$query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 // variables for input data

 // sql query for update data into database
 $query = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($link,$query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='main.php';
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
 header("Location: main.php");
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
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" value="<?php echo $fetched_row['user_city']; ?>" required /></td>
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
<div class="copyright"><p><font color="000000">Copyright &copy; 2015 Sam Rent-A-Car Sdn. Bhd. </font></p></div>			 

</center>
</body>
</html>