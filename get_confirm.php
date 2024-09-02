<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>


<?php
$name = $_GET["name"];
$mail = $_GET["mail"];



?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
お名前： <?= $name ?>
Mail： <?= $mail ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>