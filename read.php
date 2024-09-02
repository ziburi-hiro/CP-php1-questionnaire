<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<!-- <?php 

$file = fopen('data/data.txt', 'r');// ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo nl2br($str); // nl2br() ... 改行文字を追加
    $split= explode(",", $str);
    for($i = 0; $i < count($split); $i++){
        echo $split[$i];
        echo '<br>';
    }

    echo '<br>';
}
fclose($file); // ファイルを閉じる

?> -->

<html>
<head>
<meta charset="utf-8">
<title>結果参照</title>
<style>
        table {
            width: 70%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>アンケート結果一覧</h1>

<table>
        <thead>
            <tr>
                <th>回答日時</th>
                <th>お名前</th>
                <th>年齢</th>
                <th>Email</th>
                <th>性別</th>
                <th>アンケート１</th>
                <th>アンケート２</th>
            </tr>
        </thead>
        <tbody>
        <?php $file = fopen('data/data.txt', 'r');?>
            <?php while($str = fgets($file)) {?>
                <?php $split= explode(",", $str);?>
            <tr>
                <td><?php echo $split[0];?></td>
                <td><?php echo $split[1];?></td>
                <td><?php echo $split[2];?></td>
                <td><?php echo $split[3];?></td>
                <td><?php echo $split[4];?></td>
                <td><?php echo $split[5];?></td>
                <td><?php echo $split[6];?></td>
            </tr>
            <?php } ?>
            <?php fclose($file);?>
        </tbody>
    </table>

<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>