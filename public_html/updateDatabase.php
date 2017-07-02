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

?>
<!DOCTYPE html>
<html>
	<head>
		<style type = "text/css">
		</style>
		<script type = "text/javascript">
		</script>
	</head>
	<body>
    <div id = "addLink">
			<form name = "addLink" action = "updateSummary.php" method = "post">
				<input type = "text" name = "a" value = "" autofocus>
				<p class = "addP">Add a</p>
				<input type = "text" name = "b">
				<p class = "addP">Add b</p>
				<input type = "text" name = "c">
				<p class = "addP">Add c</p>
				<input type = "text" name = "d">
				<p class = "addP">Add d</p>
				<input type = "text" name = "e">
				<p class = "addP">Add e</p>
				<p id = "error"></p>
				<input id = "submit" class = "one" type = "submit" value = "Add Products" />
			</form>
		</div>
	</body>
</html>
