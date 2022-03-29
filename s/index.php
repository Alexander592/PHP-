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
</head>
<body>
    <form action="main.php" method="GET">
  <textarea name="text" placeholder="">Привет мой милый друг!</textarea>
    <input type="submit">
</form>
</body>