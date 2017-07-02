<?php

	$formnumber = $_POST['formnumber'];
	$week = $_POST['week'];
	$day = $_POST['day'];
	$crtdate = $_POST['crtdate'];


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
  $sql = "INSERT INTO `Form_info` (`FormNo`, `Week`, `Day`, `Crtdate`) VALUES ('$formnumber','$week','$day','$crtdate')";

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

			<input type = "text" name = "formnumber" value = "" autofocus>
			<p class = "addP">Form Number</p>

			<input type = "text" name = "week">
			<p class = "addP">Week</p>

			<input type = "text" name = "day">
			<p class = "addP">Day</p>

			<input type = "text" name = "crtdate">
			<p class = "addP">Crtdate</p>

<p id = "error"></p>
				<input id = "submit" class = "one" type = "submit" value = "Add Products" />
			</form>
		</div>
	</body>
</html>
