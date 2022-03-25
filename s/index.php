<?php
	session_start();
	if(!isset($_SESSION['counter']))
		$_SESSION['counter']=0;
	else
		$_SESSION['counter']++;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo $_SESSION['counter']; ?>
</body>
</html>