<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break</title>
</head>
<body>
    <?php
    $cnt = 0;
    while (1) {
        $cnt ++;
        if ($cnt>10) {
            echo'10になりました。ループを抜けます。<br>',PHP_EOL;  # code...
            break;
        }
        echo'[',$cnt,']';

        if ($cnt%3) {
            echo' スキップします。<br>',PHP_EOL;
            continue;
        }
        echo' 3の倍数です。<br>',PHP_EOL;

    }
    echo'終了します。';
    ?>
</body>
</html>