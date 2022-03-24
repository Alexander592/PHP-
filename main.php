<?php
mb_internal_encoding("UTF-8");
if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $strLen = mb_strlen($str);
    $valuesCount = array_count_values(str_split($str));
    foreach ($valuesCount as $key => $item) {
        $x = 100 / $strLen * $item;
        echo '"'.$key.'" - "'.round($x, 2).'"<br>';
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
    <form action="main.php" method="post">
  <textarea name="text" placeholder="">hello my friend!
</textarea>
    <input type="submit">
</form>
</body>
</html>