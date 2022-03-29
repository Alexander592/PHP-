<?php 

	session_start();
	if(!empty($_POST['name']) && !empty($_POST['pas'])){
		$name=$_POST['name'];
		$pas=$_POST['pas'];
		if($name== 'Anonimus' && $pas=='kotik'){
			$_SESSION['user_name']=$name;
			header('Location: index.php');
		}
	}

?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<form action="login.php" method="post">
		<input type="text" name="name" placeholder="логин">
		<p></p>
		<input type="text" name="pas" placeholder="пароль">
		<p></p>
		<input type="submit">
	</form>
</body>
</html>