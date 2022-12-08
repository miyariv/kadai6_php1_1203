<?php

$name = $_POST['name'];
$email = $_POST['email'];
$birthPlace = $_POST['birthPlace'];
$comment = $_POST['comment'];

$time = date('Y-m-d H:i:s');

// ファイルに書き込み
// 1. 開く
$file = fopen('data/data.txt' , 'a'); // fopen = file open、開いた状態を$fileに保存

// 2. 書く
fwrite($file, $time . "*" . $name . "*" . $email .  "*" . $birthPlace . "*" . $comment . "\n" );

// 3. 閉じる
fclose($file);

//文字作成


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
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
