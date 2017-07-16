<?php
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
  $sql = "INSERT INTO `form_info` (`week`, `day`, `crtdate`,`editor`)
  VALUES ('$week','$day','$crtdate','$editor')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script type = "text/javascript">

	function addRow() {
  //原来的行数    比如：此处获得表格的行数是5，则每一行对应的index是0~4，所以下面在insertRow时，使用的是表格的当前行数
      var currentRows = document.getElementById("rounded-corner").rows.length;
      var insertTr = document.getElementById("rounded-corner").insertRow(currentRows);
	    var insertTd = insertTr.insertCell(0);
							insertTd.style.textAlign="left";
	            // insertTd.innerHTML = "<input name='productcd[]' value='' class='input_M'/>";
	            insertTd.innerHTML = "<input name='productcd[]' type='text' />";

							insertTd = insertTr.insertCell(1);
	            insertTd.style.textAlign="left";
	            insertTd.innerHTML = "<input name='quantityinput[]' type='text' />";
	            // insertTd.innerHTML = "<input id='limit"+currentRows+"' name='quantityinput[]' value='' class='input_M'/>";


 }
	</script>
</head>
<body>
	<div id="page">
		<?php include ('header.php'); ?>
		<p>需要用输入productcd作为变量 显示 中文，库存，（添加行无法录入数据库）					</p>
		<form name = "addLink" action = "updatesummary.php" method = "post">
			<table id="rounded-corner" summary="form_info">
				<thead>
					<tr>
						<th scope="col" class="rounded-q1">ProductID</th>
						<th scope="col" class="rounded-q2">进/出量</th>
						<th scope="col" class="rounded-q3">Inventory</th>
						<th scope="col" class="rounded-q4">中文名</th>
						<th scope="col" class="rounded-q5">单位</th>
					</tr>
				</thead>
				<!-- select product name and get product code -->
						<td><select name="productcd[]">
						<option value="">Select Product</option>
						<?php
						$s2="select * from product ";
						$result2 = $conn->query($s2);
						if ($result2->num_rows > 0) {

						while($rw2=$result2->fetch_assoc())
						{
						?>
						<option value="<?php echo $rw2['pd_cd']; ?>">
						<?php echo $rw2['pd_name']; ?>
					</option><?php } }?>
						</select></td>
						<td><input name="quantityinput[]" type="text" /></td>
				</tr>

				<tr>
						<td><input name="productcd[]" type="text" /></td>
						<td><input name="quantityinput[]" type="text" /></td>
				</tr>

				<tr>
						<td><input name="productcd[]" type="text" /></td>
						<td><input name="quantityinput[]" type="text" /></td>
				</tr>
			</table>
				<input id = "submit" class = "one" type = "submit" name="submit" value = "Add Products" />
				<input type="button" value="添 加 行" class="button_add" onclick="javascript:addRow()">
	</form>
<!--
	<p>
	NO sense below
	</p>
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
						<td><input type="button" value="添 加 行" class="button_add" onclick="javascript:addRow()"></td>
						<td class="rounded-foot-right">&nbsp;</td>
					</tr>
				</tfoot>
			  <tbody>
							-->
							<!--<?php
							// display the Product table
							$sql1 = "SELECT product.pd_cd, product.pd_name, product.pd_zh, inventory.available , product.pd_unit
							FROM product
							left join inventory On product.productcd = inventory.id ";
							$result = $conn->query($sql1);
							//$formnumber = $_POST['formnumber'];//
							if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo '
											<tr>
												<td>'.$row['productcd'].'</td>
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

	-->

</div>
	</body>
</html>
