<html>
<head>
<?php   include_once "configmsgbrd.php"; ?>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
</head>
<body>
<?php include ('../header.php'); ?>
<form name = "addLink" action = "msgbrd.php" method = "post">

<?php
$sql1="SELECT * FROM `users`";
$result2 =$conn->query($sql1);
if ($result2->num_rows > 0) {

while($rw2=$result2->fetch_assoc())
{
?>
<div class="chip">
<img src="<?php echo $rw2['image']; ?>" alt="Person" width="96" height="96" >
<input type="radio" name ="username" value="<?php echo $rw2['user_id']; ?>">
<?php echo $rw2['username']; ?>
<br />
</div>
<?php } }?>

<input id = "submit" class = "one" type = "submit" name="submit" value = "LOG IN" />

</form>
</body>

</html>
