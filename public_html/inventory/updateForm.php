<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<script type = "text/javascript">
		</script>
	</head>
	<body>
		<div id="page">
		  <?php include ('../header.php'); ?>
		<div id = "addLink" style="text-align: center">
					<form name = "addLink" action = "updateDatabase.php" method = "post">
						<p class = "addP">创建日期</p>
									<input type = "date" name = "crtdate">
						<p class = "addP">周数   天数</p>
							<select name="week">
								<option value="1">Week1</option>
								<option value="2">Week2</option>
							</select>
							<select name="day">
								<option value="1">周一</option>
								<option value="2">周二</option>
								<option value="3">周三</option>
								<option value="4">周四</option>
								<option value="5">周五</option>
							</select>
						<p class = "addP">创建人</p>
							<input type = "text" name = "editor">

						<p id = "error"></p>
						<input id = "submit" class = "one" type = "submit" value = "提 交" />
					</form>
				</div>
			</div>
		</body>
</html>
