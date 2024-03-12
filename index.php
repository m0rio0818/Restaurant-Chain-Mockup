<?php
// コードベースのファイルのオートロード
spl_autoload_extensions(".php");
spl_autoload_register();


// composerの依存関係のオートロード
require_once 'vendor/autoload.php';


// クエリ文字列からパラメータを取得
$min = $_GET['min'] ?? 5;
$max = $_GET['max'] ?? 10;

// パラメータが整数であることを確認
$min = (int)$min;
$max = (int)$max;

$resturantChains =  Helpers\RandomGenerator::generateArray("chain", 3, 5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <style>
        /* ユーザーカードのスタイル */
    </style>
</head>

<body>
    <?php foreach ($resturantChains as $restrantChain):?>
        <div>
            <?php $restrantChain->toHTML() ?>
        </div>
    <?php endforeach; ?>
</body>
</html>