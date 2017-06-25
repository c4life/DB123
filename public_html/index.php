<?php
$host="localhost";      
$username="id2006420_admin"; 
$password="12qw34er"; 
$db_name="id2006420_db001"; 
$tbl_name="Product"; 
$con=mysqli_connect("$host","$username","$password","$db_name");
if(mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,"$db_name")or die("cannot select DB");
echo "Connected successfully";


?>