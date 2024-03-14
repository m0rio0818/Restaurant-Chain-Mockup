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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <style>
    </style>
</head>

<body>
    <?php foreach ($resturantChains as $restrantChain) : ?>
        <div class="p-3">
            <?php echo $restrantChain->toHTML(); ?>
        </div>
    <?php endforeach; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>