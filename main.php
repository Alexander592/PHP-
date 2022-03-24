<?php
    $num = $_REQUEST[1];
    $num2 = $_REQUEST[2];
    for($i = 1; $i <= $num; $i++) {
        if(($num % $i == 0) and ($num2 % $i == 0)) {
            $arr[] = $i;
        }}
        echo "Делители чисел ".$num." и ".$num2.": ".implode(', ', $arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="main.php" method="GET">
<input type="text" name="1"><br><br>
<input type="text" name="2"><br><br>
<input type="submit" name="">
</form>
</body>
</html>