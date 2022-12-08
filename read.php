<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            border-collapse:  collapse;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 5px 10px;
        }

        thead,
        tfoot {
            background-color: #333;
            color: #fff;
        }

    </style>
</head>
<body>
    <h1>アンケートの回答</h1>
    <table>
        <thead>
            <tr>
                <th>回答日時</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>出身</th>
                <th>コメント</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // ファイルを開く
        $openFile = fopen('./data/data.txt', 'r');

        // ファイル内容を1行ずつ読み込んで出力
        while ($str = fgets($openFile)) {
            $str_after = str_replace("*", "</td><td>", $str);
            echo "<tr><td>" . nl2br($str_after) . "</td></tr>";
        };

        // ファイルを閉じる
        fclose($openFile);
        ?>
        </tbody>
    </table>
    
</body>
</html>
