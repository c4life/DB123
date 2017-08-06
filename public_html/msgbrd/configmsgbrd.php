<?php
$servername="localhost";
$username="root";
$password="";
$dbname="msgbrd";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
echo "Connected successfully";

function escape_data($data)
{
  if (function_exists('mysql_real_escape_string'))
  {
    global $dbc;
    $data = mysql_real_escape_string (trim($data),$dbc);
    $data = strip_tags($data);
  }else {
    $data = mysql_escape_string(trim($data));
    $data =strip_tags($data);
  }
  return $data;
}
?>
