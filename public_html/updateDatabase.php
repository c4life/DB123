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
	mysqli_set_charset($conn,"utf8");
  echo "Connected successfully";

	// insert the new form into the db table
  ;
  $sql = "INSERT INTO `form_info` (`formno`, `week`, `day`, `crtdate`,`editor`)
  VALUES ('$formnumber','$week','$day','$crtdate','$editor')";

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
		#rounded-corner
		{	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
			font-size: medium;
			width: 100%;
			text-align: left;
			border-collapse: collapse;}
		#rounded-corner thead th.rounded-company
		{	background: #b9c9fe url('left.png') left -1px no-repeat;}
		#rounded-corner thead th.rounded-q4
		{	background: #b9c9fe url('right.png') right -1px no-repeat;}
		#rounded-corner th
		{	padding: 8px;
			font-weight: normal;
			font-size: medium;
			color: #039;
			background: #b9c9fe;}
		#rounded-corner td
		{	padding: 8px;
			background: #e8edff;
			border-top: 1px solid #fff;
			color: #669;}
		#rounded-corner tfoot td.rounded-foot-left
		{	background: #e8edff url('botleft.png') left bottom no-repeat;}
		#rounded-corner tfoot td.rounded-foot-right
		{	background: #e8edff url('botright.png') right bottom no-repeat;}
		#rounded-corner tbody tr:hover td
		{	background: #d0dafd;}
		a	{	text-decoration: none;
				color: #669;}
	</style>
		<script type = "text/javascript">
		</script>


	</head>
	<body>

			<table id="rounded-corner" summary="form_info">
				<thead>
					<tr>
						<th scope="col" class="rounded-q1">Product Name</th>
						<th scope="col" class="rounded-q2">中文名</th>
						<th scope="col" class="rounded-q3">Inventory</th>
						<th scope="col" class="rounded-q4">进/出量</th>
						<th scope="col" class="rounded-q5">单位</th>
					</tr>
				</thead>
					<tfoot>
					<tr>
						<td colspan="4" class="rounded-foot-left"><em id = "time">
							Bookmarks Upload Successful!</em></td>
						<td class="rounded-foot-right">&nbsp;</td>
					</tr>
				</tfoot>
				<tbody>
					<?php
							// display the Product table
							$sql1 = "SELECT product.pd_cd, product.pd_name, product.pd_zh, inventory.available , product.pd_unit
							FROM product
							left join inventory On product.pd_id = inventory.id ";
							$result = $conn->query($sql1);
							$formnumber = $_POST['formnumber'];
							if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo '
											<tr>
												<td>'.$row['pd_name'].'</td>
												<td>'.$row['pd_zh'].'</td>
												<td>'.$row['available'].'</td>
												<td><input type = "text" name = "quantityinput"></td>
												<td>'.$row['pd_unit'].'</td>
												<td>
												 </td>
											</tr>';
									}
							} else
									echo "0 results";
								?>

				</tbody>
			</table>
<form name = "addLink" action = "updatesummary.php" method = "post">
<input id = "submit" class = "one" type = "submit" value = "Add Products" />
</form>
	</body>
</html>
