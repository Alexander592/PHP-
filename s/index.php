<?php

	session_start();
	if(!isset($_SESSION['user_name']))
		header('Location: login.php');
	echo $name;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Главная страница</h1>
	<?php echo $_SESSION['counter']; ?>
	<h2><?php echo "Hello " ?>
		<a href="forma.php"><?php echo $_SESSION['user_name']; ?></a>
	</h2>
	<h1>Форма:</h1>
	<p>
		<span>Имя: </span><?php echo $_SESSION['namee']; ?>
	</p>
	<p>
		<span>Фамилия: </span><?php echo $_SESSION['snamee']; ?>
	</p>
</body>
</html>