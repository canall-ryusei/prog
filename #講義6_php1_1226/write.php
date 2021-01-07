<?php
//文字作成
$date = $_POST["date"];
$apo = $_POST["apo"];
$person = $_POST["person"];
$user = $_POST["user"];
$birthday = $_POST["birthday"];
$before = $_POST["before"];
$str = $date.",".$apo.",".$person.",".$user.",".$birthday.",".$before; //＝抜けててエラー出した
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n"); // \n 正規表現のエンnと同じ
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>