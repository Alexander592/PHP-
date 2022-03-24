<?php
if (isset($_REQUEST['date'])) {
    $date = explode('.', $_REQUEST['date']);
    $now = time();
    $dr = mktime(23, 59, 59, $date[1], $date[0]) + 1;
    if ($dr > $now) {
        echo floor(($dr - $now) / 60 / 60 / 24) . ' Дней ';
    } else {
        echo floor(($dr - $now + 60 * 60 * 24 * 365) / 60 / 60 / 24) . ' Дней';
    }
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
 <input type="text" name="date" placeholder="узнать сколько осталось до др)">
    <input type="submit">
</form>
</body>
</html>