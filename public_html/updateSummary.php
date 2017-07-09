<?php


$servername="localhost";
$username="id2006420_admin";
$password="12qw34er";
$dbname="id2006420_db001";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
echo "Connected successfully";


//-----------------------------------------------
// how to get your formno
	$sql = "SELECT * FROM form_info";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc())
			{
				echo 'formno = '.$row['formno']."\t";	// here is your formnoes
			}
	} else
			echo "no form exists";	// there is no form exists in your database
//-----------------------------------------------

$formno = 2;
echo '<p>
不能从数据库取出表格编号 Formno，因此暂时定义 Formno固定值为2，求解决这个问题</p>';
//update form detail(since I have bug here I don't know how to do it)
if (isset($_POST['submit'])) {

$i = 0;
		foreach ($_POST as $val) {
    $productcd = $_POST['productcd'][$i];
    $quantityinput = $_POST['quantityinput'][$i];
    $sql1="INSERT INTO form_detail (formid, productcd, quantityinput)
    VALUES ('$formno', '$productcd', '$quantityinput')";
    if ($conn->query($sql1) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$i++;
}
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


<!--
$sql = "INSERT INTO `form_detail` (`formid`, `productid`, `quantityinput`)
VALUES ('$formnumber','$pd_id','$quantityinput')";

if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}


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
-->
