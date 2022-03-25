<?php
if(!empty($_REQUEST)) {
if(
count($_REQUEST) == 3 and
(isset($_REQUEST[1]) and strlen($_REQUEST[1]) > 0) and
(isset($_REQUEST[2]) and strlen($_REQUEST[2]) > 0) and
(isset($_REQUEST[3]) and strlen($_REQUEST[3]) > 0)
) {
sort($_REQUEST);
if(pow($_REQUEST[2], 2) == (pow($_REQUEST[0], 2)) + pow($_REQUEST[1], 2)) {
echo implode(', ', $_REQUEST)." Числа - тройка Пифагора";
}
else echo "Числа: ".implode(', ', $_REQUEST)." не тройка Пифагора";
}
else echo "Поля пусты. Введите числа";
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
    <form action="main.php" method="GET">     
         <span>введите Первое число</span><input type="text" name="1">
        <span>введите Второе число</span><input type="text" name="2">
        <span>введите третье число</span><input type="text" name="3">
        <input type="submit" name="" value='Проверка на 3ку Пифагора'>
    </form>
</body>
</html>
   