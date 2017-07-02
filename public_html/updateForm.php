<!DOCTYPE html>
<html>
	<head>
		<style type = "text/css">
		</style>
		<script type = "text/javascript">
		</script>
	</head>
	<body>
    <div id = "addLink">
			<form name = "addLink" action = "updateDatabase.php" method = "post">

				<input type = "text" name = "formnumber" value = "" autofocus>
				<p class = "addP">Form Number</p>

				<input type = "text" name = "week">
				<p class = "addP">Week</p>

				<input type = "text" name = "day">
				<p class = "addP">Day</p>

				<input type = "text" name = "crtdate">
				<p class = "addP">Crtdate</p>

				<p id = "error"></p>
				<input id = "submit" class = "one" type = "submit" value = "Add Products" />
			</form>
		</div>
	</body>
</html>
