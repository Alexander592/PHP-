<?php

$a=$_POST['inp'];

$s=$a*32;
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="main.php" method="POST">
		<input type="text" name="inp" value="<?php  echo $s;?>">
		<input type="submit" value="конвертировать">

	</form>
</body>
</html>