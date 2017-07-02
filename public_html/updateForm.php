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
				<input type = "text" name = "a" value = "" autofocus>
				<p class = "addP">Add a</p>
				<input type = "text" name = "b">
				<p class = "addP">Add b</p>
				<input type = "text" name = "c">
				<p class = "addP">Add c</p>
				<input type = "text" name = "d">
				<p class = "addP">Add d</p>
				<input type = "text" name = "e">
				<p class = "addP">Add e</p>
				<p id = "error"></p>
				<input id = "submit" class = "one" type = "submit" value = "Add Products" />
			</form>
		</div>
	</body>
</html>
