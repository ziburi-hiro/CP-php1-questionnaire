<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
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
	<h1>アンケートフォーム</h1>
<form action="write.php" method="post">
	<table>
        <thead>
            <tr>
                <th>アンケート項目</th>
                <th>回答</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>お名前</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="mail"></td>
            </tr>
			<tr>
                <td>性別</td>
                <td>男性:<input type="radio" name="gender" value="男性"> <br>女性:<input type="radio" name="gender" value="女性"> <br>どちらでもない:<input type="radio" name="gender" value="どちらでもない"> </td>
            </tr>
			<tr>
                <td>参加満足度</td>
                <td><input type="radio" name="question1" value="回答A"> 満足 <br><input type="radio" name="question1" value="回答B"> 不満足 <br><input type="radio" name="question1" value="回答C"> どちらでもない </td>
            </tr>
			<tr>
                <td>おすすめ度</td>
                <td><input type="radio" name="question2" value="回答A"> ぜひお勧めしたい <br><input type="radio" name="question2" value="回答B"> お勧めはしない <br><input type="radio" name="question2" value="回答C"> どちらでもない </td>
            </tr>

        </tbody>
    </table>

	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>