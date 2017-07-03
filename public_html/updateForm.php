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

				<p class = "addP">表格编号</p>
							<input type = "text" name = "formnumber" value = "" autofocus>

				<p class = "addP">周数</p>
							<input type = "text" name = "week">

				<p class = "addP">天数</p>
							<input type = "text" name = "day">

				<p class = "addP">创建日期</p>
							<input type = "date" name = "crtdate">
				<p class = "addP">创建人</p>
							<input type = "text" name = "editor">

				<p id = "error"></p>
				<input id = "submit" class = "one" type = "submit" value = "Add Products" />
			</form>
		</div>
	</body>
</html>
