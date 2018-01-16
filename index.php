<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>登録者リスト</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
function h($str) {
    return str_replace('&lt;br&gt;', '<br>', htmlspecialchars($str, ENT_QUOTES, 'UTF-8'));
}

$input='input.php';
print '<input type="button" value="登録画面に進む" onClick="location.href=\''.h($input).'\'">';
echo '<br>';
$mysqli = new mysqli('localhost', 'naoya', 'E3zNBeax', 'naoya_db');
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
	echo '登録者リスト';
	echo '<br>';
    $mysqli->set_charset("utf8");		//SQLインジェクション対策として文字エンコーディングの指定
}

$sql = 'SELECT * FROM userdata';
$stmt = $mysqli ->query($sql);
foreach ($stmt as $row) {

  // データベースのフィールド名で出力
  echo '学籍番号：'.$row['number'].'：'.'名前：'.$row['name'].'：'.'年齢：'.$row['age'].'歳'.'：'.'備考'.'：'.$row['message'];

  // 改行を入れる
  echo '<br>';
}

$mysqli->close();

?>
</body>
</html>
