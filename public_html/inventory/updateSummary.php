<?php
// get Connected
  include_once "connection.php";
// how to get your formno
	$sql = "SELECT * FROM form_info order by form_info.formno DESC limit 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc())
			{
				$formno = $row['formno'];	// here is your formnoes
				echo "$formno";
			}
	} else {
			echo "no form exists";
      }// there is no form exists in your database
//update form detail
// echo "_post's size = ".count($_POST);
$productcds = $_POST['productcd'];
$quantityinputs = $_POST['quantityinput'];
// echo "\t product size = ".count($productcds);
$i = 0;
while ($i < count($productcds))
{
	$productcd = $productcds[$i];
	echo "Get productcd[i] = ".$productcd."\t";
	$quantityinput = $quantityinputs[$i];
	$sql1="INSERT INTO form_detail (formid, productcd, quantityinput) VALUES ('$formno', '$productcd', '$quantityinput')";

	if ($conn->query($sql1) === TRUE)
	{
		echo "New record created successfully"."\t";
		echo $productcd."\n";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$i++;
}


// update inventory
$sql2 = 'update inventory,form_detail
Set inventory.available=inventory.available+form_detail.quantityinput
where inventory.pd_cd=form_detail.productcd
and form_detail.formid=(SELECT `formno` FROM `form_info` order by form_info.formno DESC limit 1)';

if ($conn->query($sql2) === TRUE) {
echo "New record updated successfully";
} else {
echo "Error: " . $sql2 . "<br>" . $conn->error;
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<div id="page">
		<?php include ('../header.php'); ?>

	<div id="content">
<a href="inventorySummary.php">总库存</a>
</div>
</div>
</body>
</html>
