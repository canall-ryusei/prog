<?php
$date = $_GET["date"];
$apo = $_GET["apo"];
$person = $_GET["person"];
$user = $_GET["user"];
$birthday = $_GET["birthday"];
$before = $_GET["before"];

$filename='data/data.txt';
$content = file_get_contents($filename);
$str_moto=$content;
$str=explode("\n",$str_moto);
$arr=[];

for($i=0;$i<count($str);$i++)
{
    $arr[]=explode(",",$str[$i]);
}
foreach($arr as $value){
}
?>

<link rel="stylesheet" href="read.css">
<h1>ご注文データ一覧</h1>
<ul>
<li><a href="post.php">post.php</a></li>
</ul>
<!-- 配列にして表示するアイディア -->
<table>
    <tr>
        <th>ご注文日</th>
        <th>アポインター</th>
        <th>お客様担当</th>
        <th>お客様氏名</th>
        <th>生年月日</th>
        <th>コラボ名</th>
    </tr>

    <?php foreach($arr as $value):?>
    <tr>
        <th><?php echo $value[0];?></th>
        <th><?php echo $value[1];?></th>
        <th><?php echo $value[2];?></th>
        <th><?php echo $value[3];?></th>
        <th><?php echo $value[4];?></th>
        <th><?php echo $value[5];?></th>
    </tr>
    <?php endforeach; ?>
</table>
<ul>
<li><a href="post.php">post.php</a></li>
</ul>

<!-- カウント出したいけど出せない -->
<!-- <?php
$array = $str;
$counts = array_count_values($array);
echo $content['ドコモ光'];
?> -->