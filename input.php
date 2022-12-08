<html>

<head>
    <meta charset="utf-8">
    <title>アンケートフォーム</title>
    <style>
        li{
            margin: 10px;
        }
        input{
            padding: 3px;
        }
    </style>
</head>

<body>
    <h1>アンケートフォーム</h1>
    <form action="write.php" method="post">
        <ul>
            <li>お名前: <input type="text" name="name"></li>
            <li>メールアドレス:  <input type="email" name="email"></li>
            <li>出身: <input type="text" name="birthPlace"></li>
            <li>コメント: <input type="text" name="comment"></li>
            </ul>
        <input type="submit" value="送信">
    </form>
</body>

</html>
