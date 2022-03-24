<?php

$n=$_POST['inp'];

   for ($i=1; $i<=$n; $i++){  
if ($n % $i==0)      
  	echo "$i <br>";
}
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
		<input type="text" name="inp">
		<input type="submit" value="посчитать">
	</form>
</body>
</html>