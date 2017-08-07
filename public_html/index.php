<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>UNNAMED APP</title>

	<meta name="author" content="C4LIFE" />
	<meta name="description" content="UNFINISHED" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
	<link rel="stylesheet" href="css/style.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
    <?php include ('header.php'); ?>

		<div id="content">
			<ul>
			<li><a href="inventory/inventorySummary.php">总库存</a></li>
			<li><a href="inventory/updateForm.php">出库单</a></li>
			<li><a href="msgbrd/login.php">留言板</a></li>
      <li><a href="/">+</a></li>
			<li><a href="/">-</a></li>
			<li><a href="/"></a></li>
			<li><a href="reply/reply.php">客服专用</a></li>
		</ul>
	</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">C4Life</a>
			</p>
		</div>
	</div>
</body>
</html>
