<?php
	$week = $_POST['week'];
	$day = $_POST['day'];
	$crtdate = $_POST['crtdate'];
	$editor = $_POST['editor'];
// Create connection
include_once "connection.php";

// insert the new form into the db table
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
			// var tableW = document.getElementById("rounded-corner");
      // var currentRows = tableW.rows.length;

			var temp = document.getElementById("temp");
			// temp.innerHTML = "Current row size = " + currentRows;

      // var insertTr = tableW.insertRow(currentRows);
			// temp.innerHTML += "\tTable rows size = " + tableW.rows.length;

      // var insertTd = insertTr.insertCell(0);
			//insertTd.style.textAlign="left";
      // insertTd.innerHTML = "<input name='productcd[]' value='' class='input_M'/>";
      // insertTd.innerHTML = '<input name="productcd[]" type="text" />';

			// insertTd = insertTr.insertCell(1);
      //insertTd.style.textAlign="left";
      // insertTd.innerHTML = '<input name="quantityinput[]" type="text" />';
      // insertTd.innerHTML = "<input id='limit"+currentRows+"' name='quantityinput[]' value='' class='input_M'/>";

			var names = ['productcd[]', 'quantityinput[]'];
			var table = document.getElementById("rounded-corner");


    	var rowCount = table.rows.length;

			temp.innerHTML = "Current row size = " + rowCount;

    	var row = table.insertRow(rowCount);
    	var colCount = table.rows[0].cells.length;
    	// var colCount = 2;

	    for (var i=0; i<colCount; i++)
			{
	        var newcell = row.insertCell(i);
	        var newentry = document.createElement('input');
	        newentry.type = "text";

	        // set name
	        newentry.name = names[i];

	        newcell.appendChild(newentry);
	    }


			temp.innerHTML += "\tAfter insertCell = " + table.rows.length;
// document.getElementById("temp").innerHTML = document.getElementById("rounded-corner").rows.length;

 }
	</script>
</head>
<body>
	<div id="page">
		<?php include ('../header.php'); ?>
			<form name = "addLink" action = "updatesummary.php" method = "post">
			<table id="rounded-corner" summary="form_info">
				<thead>
					<tr>
						<th scope="col" class="rounded-q1">中文名</th>
						<th scope="col" class="rounded-q2">Inventory</th>
						<th scope="col" class="rounded-q3">进/出量</th>
						<th scope="col" class="rounded-q4">Product Name</th>
						<th scope="col" class="rounded-q5">单位</th>
					</tr>
				</thead>
					<?php
						// display the Product table
	          $sql1 = "SELECT * FROM `mealplan` b,`billofmeal` c,`product` d,`inventory` e
						where b.weekno = $week and b.dayno=$day and b.mealid =c.mealid and c.productcd = d.pd_cd and d.pd_cd= e.pd_cd";
	          $result = $conn->query($sql1);

	          if ($result->num_rows > 0) {
	              // output data of each row
	              while($row = $result->fetch_assoc())
	              {
	                echo '
	                  <tr>
	                    <td>'.$row['pd_zh'].'</td>
	                    <td>'.$row['available'].'</td>
	                    <td><input name="quantityinput[]"type = "text"></td>
	                    <td>'.$row['pd_name'].'</td>
	                    <td>'.$row['pd_unit'].'</td>
											<input name="productcd[]" type = "hidden" value ='.$row['pd_cd'].'>
	                    </tr>';
	              }
	          } else
	              echo "0 results";
					?>

				<input id = "submit" type = "submit" name="submit" value = "Add Products" />
				<!-- <input type="button" value="添 加 行" class="button_add" onclick="javascript:addRow()"> -->
			</form>

</div>
	</body>
</html>
