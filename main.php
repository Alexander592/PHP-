 <?php
$month = [1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
if (isset($_REQUEST)) {
    $day = $_REQUEST['day'];
    $mon = array_search($_REQUEST['month'], $month);
    $year = $_REQUEST['year'];
    $dayOfWeek = $week[date('w', mktime(0, 0, 0, $mon, $day, $year))];
    echo $dayOfWeek;
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
    <form action="main.php" method="post">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <select name="month">
        <?php foreach ($month as $item): ?>
            <option><?=$item;?></option>
        <?php endforeach;?>
    </select>
    <select name="year">
        <?php for ($i = 1990; $i <= 2025; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <input type="submit">
</form>
     
 </body>
 </html>