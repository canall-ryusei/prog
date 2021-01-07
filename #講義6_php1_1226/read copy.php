<?php
$date = $_GET["date"];
$apo = $_GET["apo"];
$person = $_GET["person"];
$user = $_GET["user"];
$birthday = $_GET["birthday"];
$before = $_GET["before"];

// ファイルを変数に格納
$filename = 'data/data.txt';
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
// whileで行末までループ処理
while (!feof($fp)) {
// fgetsでファイルを読み込み、変数に格納
$txt = fgets($fp);
$db = explode("\n", $txt);
$db = explode(",", $db);
// ファイルを読み込んだ変数を出力
var_dump($db);
}
// fcloseでファイルを閉じる
fclose($fp);
?>

<!-- 配列にして表示するアイディア -->
<style>
    td{
    border:1px solid red;
    }
</style>
<table>
    <tr>
    <td><?=$db[0]?></td>
    <td><?=$db[1]?></td>
    <td><?=$db[2]?></td>
    <td><?=$db[3]?></td>
    <td><?=$db[4]?></td>
    <td><?=$db[5]?></td>
    </tr>
</table>