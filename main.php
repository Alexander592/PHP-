<?php
    $num = $_REQUEST[1];
    for($i = 1; $i <= $num; $i++) {
        if($num % $i == 0) {
            $arr[] = $i;
        }}
        echo "Делители числа ".$num.": ".implode(', ', $arr);
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
<input type="submit" name="">
</form>
</body>
</html>