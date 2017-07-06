<?php
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
		<table id="rounded-corner" summary="Bookmarks Table">
			<thead>
				<tr>
					<th scope="col" class="rounded-company">
          </th>
					<th scope="col" class="rounded-q1">Banana</th>
					<th scope="col" class="rounded-q2">Cat</th>
					<th scope="col" class="rounded-q3">Dog</th>
					<th scope="col" class="rounded-q4">Elephant</th>
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

          $sql1 = "SELECT * FROM product";
          $result = $conn->query($sql1);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc())
              {
                echo '
                  <tr>
                    <td>'.$row['pd_name'].'</td>
                    <td>'.$row['pd_zh'].'</td>
                    <td>'.$row['pd_unit'].'</td>
                    <td>'.$row['pd_category'].'</td>
                    <td>'.$row['pd_supplier'].'</td>
                  </tr>';
              }
          } else
              echo "0 results";
				?>
			</tbody>
		</table>
	</body>
</html>
