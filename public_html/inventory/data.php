<?php
include_once "connection.php";
$q = intval($_GET['q']);
$sql1 = "SELECT * FROM `product` left join inventory on product.pd_cd = inventory.pd_cd
where product.pd_id ='".$q."'";
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
