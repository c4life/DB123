<?php

	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];


  $servername="localhost";
  $username="id2006420_admin";
  $password="12qw34er";
  $dbname="id2006420_db001";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

	// insert the new bookmark into the db table
  ;
  $sql = "INSERT INTO `Product` (`Apple`, `Banana`, `Cat`, `Dog`, `Elephant`) VALUES ('$a','$b','$c','$d','$e')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  header('Location: '.'inventorySummary.php');
  exit();
?>
