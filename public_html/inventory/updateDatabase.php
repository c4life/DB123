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
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	<script>


function showProudct(str){
	if(str==""){
		document.getElementById("txtHint[]").innerHTML="";
    return;
	}
if (window.XMLHttpRequest) {
	// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
} else { // code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function() {
	if (this.readyState==4 && this.status==200) {
		document.getElementById("txtHint[]").innerHTML=this.responseText;
	}
};
xmlhttp.open("GET","data.php?q="+str,true);
xmlhttp.send();
};
	function addRow() {
	var names =['productid[]'];
	var table = document.getElementById("rounded-corner");
	if ($("#rounded-corner").find("tr").last().value="")
	{ alert("the last row is null");
	}
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
		row.id = "txtHint[]"
  var colCount = 1;
	for (var i=0; i<colCount; i++)
	{
			var newcell = row.insertCell(i);
			var newentry = document.createElement('input');
			newentry.type = "text";
			newentry.name = names[i];
			newcell.appendChild(newentry);
			//	temp.innerHTML += "\tAfter insertCell = " + table.rows.length;
// document.getElementById("temp").innerHTML = document.getElementById("rounded-corner").rows.length;

 }
 }
	</script>
</head>
<body>
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
	              echo "00 results";
					?>
					<tr id="txtHint[]">
					<td><input type="text" name="productid[]" onchange="showProudct(this.value)"/></td>
					</tr>
					<tr>

					</tr>
				</table>
				<input id = "submit" type = "submit" name="submit" value = "Add Products" />
				<input type="button" value="添 加 行" class="button_add" onclick="javascript:addRow()">
				</form>
<button id="btn"> Click</button>
</div>
	</body>
</html>
