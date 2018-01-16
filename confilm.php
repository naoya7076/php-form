<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>確認画面</title>
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
print '<ul>'."\n";
print '<li>';
if($number==''){
	print'学籍番号が入力されていません。';
}elseif (!preg_match("/^[0-9]+$/", $number)) {
    echo "すべて半角数字にしてください";
}else{
	print'学籍番号:'.$number;
}
print'</li>'."\n";
print '<li>';
if($name==''){
	print'お名前が入力されていません。';
}else{
	print'ようこそ、'.$name.'様';
}
print'</li>'."\n";
print '<li>';
if($age==''){
	print'年齢が入力されていません。';
}elseif (!preg_match("/^[0-9]+$/", $age)) {
    echo "すべて半角数字にしてください";
}else{
	print'年齢:'.$age;
}
print'</li>'."\n";
print '<li>';
if($message==''){
	print'備考が入力されていません。';
}else{
	print'備考:'.$message;
}
print'</li>'."\n";
print '</ul>'."\n";

if($number=='' || $name=='' || $age=='' || $message=='') {
print'<form>'."\n";
print'<input type="button" onClick="history.back()" value="戻る">'."\n";;
print'</form>'."\n";
}else{
print '<form action="complete.php" method="post">'."\n";
print '<input type="hidden" name="number" value="'.$number.'">';
print '<input type="hidden" name="name" value="'.$name.'">';
print '<input type="hidden" name="age" value="'.$age.'">';
print '<input type="hidden" name="message" value="'.$message.'">';
print '<input type="button" onClick="history.back()" value="戻る">'."\n";
print '<input type="submit" value="送信">'."\n";
print '</form>'."\n";
}
?>

</body>
</html>