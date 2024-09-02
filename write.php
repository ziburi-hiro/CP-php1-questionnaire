<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
$name = $_POST["name"];
$age = $_POST["age"];
$mail = $_POST["mail"];
$gender = $_POST["gender"];
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];


include("funcs.php");

?>

<?php
//作成日時,名前,メールアドレス
$str = date("Y-m-d H:i:s").",".$name.",".$age.",".$mail.",".$gender.",".$question1.",".$question2;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
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
<li><a href="read.php">回答結果を見る</a></li>
</ul>
</body>
</html>