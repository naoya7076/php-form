<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>登録内容入力フォーム</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div id="confirmation">
<form action="confilm.php" method="POST" id="inquiry">
<table>
<tr>
<th><label for="number">学籍番号（半角数字）</label></th>
<td><input type="text" name="number" size="10" id="number" class="text1"></td>
</tr>
<tr>
<th><label for="name">お名前</label></th>
<td><input type="text" name="name" size="20" id="name" class="text2"></td>
</tr>
<tr>
<th><label for="age">年齢</label></th>
<td><input type="text" name="age" size="2" id="age" class="text3"></td>
</tr>
<tr>
<th><label for="message">備考</label></th>
<td><textarea name="message" cols="50" rows="5" class="text4" id="message"></textarea></td>
</tr>
</table>
<input type="submit" value="確認画面へ">
</form>
</div>
</body>
</html>