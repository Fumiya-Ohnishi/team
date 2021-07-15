<?php

// データベースの接続情報
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'kingofmerry');

//データベースに接続
$option = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false
);
$pdo = new PDO('mysql:charset=UTF8;dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASS, $option);


//実行するqueryの作成（testテーブルの全データを取得）
$query = "SELECT * FROM Product";

//クエリを実行
$res = $pdo->query($query);

//取得したデータを全てフェッチする
$data = $res->fetchAll();

//データを表示する
// print_r($data);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>すきゃねん</title>
</head>

<body>
    <header>
        <div class="header_logo">
            <img src="img/kingofmerry.jpg">
        </div>
        <h1>
            好きなら売ります。すきゃねん！
        </h1>
    </header>
    <div class="product_wrapper">
        <?php foreach ($data as $key => $value) { ?>
            <div class="center_wrapper">
                <div class="space_wrapper">
                    <div class="product_img">
                        <a href="#info<?=$key?>" class="modal-open"><img src="<?php echo $value["IMAGE"]; ?>"></a>
                    </div>
                    <ul class="text_wrapper">
                        <li><?php echo $value["PRODUCT_NAME"]; ?></li>
                        <li><?php echo $value["PRICE"]; ?>円</li>
                    </ul>
                </div>
            </div>

            <section id="info<?=$key?>" class="hed">
                <img class="info-img" src="<?php echo $value["IMAGE"]; ?>">
                <?php echo $value["PRODUCT_TEXT"]; ?>
            </section>
        <?php } ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
    <script type="text/javascript" src="jquery.cookie.js"></script>
    <script type="text/javascript" src="style.js"></script>
</body>

</html>