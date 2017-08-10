<?php
// get Connected
  include_once "connection.php";
?>
<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <script type = "text/javascript"></script>
	</head>
	<body>
    <div id="page">
		  <?php include ('../header.php'); ?>
		<table id="rounded-corner" summary="Bookmarks Table">
			<thead>
				<tr>
					<th scope="col" class="rounded-q1">Product Name</th>
					<th scope="col" class="rounded-q2">中文名</th>
          <th scope="col" class="rounded-q3">库存数量</th>
          <th scope="col" class="rounded-q8">更新</th>
					<th scope="col" class="rounded-q4">单位</th>
					<th scope="col" class="rounded-q5">分类</th>
          <th scope="col" class="rounded-q6">供应商</th>
          <th scope="col" class="rounded-q7"></th>


          </th>
				</tr>
			</thead>
				<tfoot>
				<tr>
					<td colspan="4" class="rounded-foot-left"><em id = "time">
						All item Above For LISFOODREVOLUTION!</em></td>
					<td class="rounded-foot-right">&nbsp;</td>
				</tr>
			</tfoot>
			<tbody>
				<?php
        if(isset($_POST['update'])){
          $updatequery = "UPDATE  inventory
LEFT JOIN
        product
ON      product.pd_cd = inventory.pd_cd
SET     inventory.available = '$_POST[available]'
WHERE   product.pd_id = '$_POST[hidden]'";
          $reuslt1 = $conn->query($updatequery);
          echo 'works';
        }
        else{
          echo 'not work';
        };


					// display the Product table
          $sql1 = "SELECT * FROM `product` left join inventory on product.pd_cd = inventory.pd_cd";
          $result = $conn->query($sql1);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc())
              {
                echo '<form action=inventorySummary.php method=post>';
                echo '
                  <tr>
                    <td>'.$row['pd_name'].' </td>
                    <td>'.$row['pd_zh'].' </td>
                    <td>'.'<input type = text name= available  value='.$row['available'].'> </td>
                    <td><input type = submit name= update value= "update" >
                    <td>'.$row['pd_unit'].' </td>
                    <td>'.$row['pd_category'].' </td>
                    <td>'.$row['pd_supplier'].'</td>
                    <td>'.'<input type = hidden name= hidden  value='.$row["pd_id"].'></td>
                    </td>
                  </tr>';
                echo '</form>';
              }
          } else
              echo "0 results";
				?>
			</tbody>
		</table>
	</body>
</html>
