<?php
	$formnumber = $_POST['formnumber'];
	$week = $_POST['week'];
	$day = $_POST['day'];
	$crtdate = $_POST['crtdate'];
	$editor = $_POST['editor'];

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

	// insert the new form into the db table
  ;
  $sql = "INSERT INTO `form_info` (`formno`, `week`, `day`, `crtdate`,`editor`) VALUES ('$formnumber','$week','$day','$crtdate','$editor')";

  if ($conn->query($sql) === TRUE) {
			mysqli_set_charset($conn,"utf8");
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

<p class = "addP">表格编号</p>
			<input type = "text" name = "formnumber" value = "" autofocus>

<p class = "addP">周数</p>
			<input type = "text" name = "week">

<p class = "addP">天数</p>
			<input type = "text" name = "day">

<p class = "addP">创建日期</p>
			<input type = "date" name = "crtdate">
<p class = "addP">创建人</p>
			<input type = "text" name = "editor">



<p id = "error"></p>
				<input id = "submit" class = "one" type = "submit" value = "Add Products" />
			</form>
		</div>
	</body>
</html>
