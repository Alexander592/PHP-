 <?php
if(isset($_REQUEST['submit']) && !empty($_REQUEST['text'])){
$text = $_REQUEST['text'];
$length = mb_strlen($text,'UTF-8');
$arr = [];
for($i=0;$i < $length;$i++){
$char = mb_substr($text,$i,1,'UTF-8');
if(!isset($arr[$char])){
$arr[$char] = 1;
} else{
$arr[$char]++;
}
}
foreach($arr as $key=>$elem){
$percent = round($elem * 100 / $length, 0);
echo "Процентное содержание '$key'".' в тексте - '.$percent.'%<br>';
}
}
if(isset($_REQUEST['submit']) && empty($_REQUEST['text'])){
echo 'Введите текст в   форму';
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
    <form action="main.php" method="GET" align="center">
<p>процент символов в тексте</p>
<textarea rows="5" cols="50" name="text"><?php if(isset($_REQUEST['submit'])) echo $_REQUEST['text']; ?></textarea><br><br>
<input type="submit" name="submit" value="Подсчитать">

</form>

    
</body>
</html>