<?php
if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $strLen = strlen($str);
    $wordsCount = count(explode(' ', $str));
    $spaceCount = $wordsCount - 1;
    echo 'В тексте '.$wordsCount.' слов, '.$strLen.' символов, '.$spaceCount . ' пробелов.';
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
  <textarea name="text" placeholder="">Привет мой милый друг!</textarea>
    <input type="submit">
</form>
</body>
</html>