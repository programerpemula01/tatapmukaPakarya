<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('welcome/create') ?>" method="post">
		<input type="text" name="title">
		<input type="submit" name="submit" value="Push!">
	</form>
</body>
</html>