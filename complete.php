<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>登録完了</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
function h($str) {
    return str_replace('&lt;br&gt;', '<br>', htmlspecialchars($str, ENT_QUOTES, 'UTF-8'));
}
$number = h($_POST['number']);
$name = h($_POST['name']);
$age = h($_POST['age']);
$message = h($_POST['message']);


	print $name.'さん'."\n";
	print '登録が完了しました<br>'."\n";
	

$mysqli = new mysqli('localhost', 'naoya', 'E3zNBeax', 'naoya_db');
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
	echo 'connect succeed';
    $mysqli->set_charset("utf8");		//SQLインジェクション対策として文字エンコーディングの指定
}

$sql = "INSERT INTO userdata VALUES (
	'$number', '$name', '$age', '$message')";

$res = $mysqli->query($sql);

var_dump($res);


$mysqli->close();
$index='index.php';
print '<input type="button" value="TOPに戻る" onClick="location.href=\''.$index.'\'">';
?>
</body>
</html>
