<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
</head>

<body>
    <?php
    // データベースの接続情報
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'kingofmerry');

    // tryにPDOの処理を記述
    try {

        // PDOインスタンスを生成
        $option = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_MULTI_STATEMENTS => false
        );
        $pdo = new PDO('mysql:charset=UTF8;dbname='.DB_NAME.';host='.DB_HOST , DB_USER, DB_PASS, $option);
        
        $sql = "INSERT INTO Product (PRODUCT_NAME, PRICE, COLOR, SIZE, PRODUCT_TEXT, IMAGE) VALUES (:product_name, :price, :color, :size, :product_text, :image)";

        // 挿入する値は空のまま、SQL実行の準備をする
        $stmt = $dbh->prepare($sql);

        // 挿入する値を配列に格納する
        $params = array(':product_name' => $_POST['product_name'], ':price' => $_POST['price'], ':color' => $_POST['color'], ':size' => $_POST['size'], ':product_text' => $_POST['product_text'], ':image' => $_POST['image']);

        // 挿入する値が入った変数をexecuteにセットしてSQLを実行
        $pdo = $stmt->execute($params);

        // var_dump($sql);
        // var_dump($stmt);
        // var_dump($params);
        // var_dump($pdo);

        if ($pdo) {
            // 登録完了のメッセージ
            echo '登録完了しました';
        }
        // エラー（例外）が発生した時の処理を記述
    } catch (PDOException $e) {

        // エラーメッセージを表示させる
        echo 'データベースにアクセスできません！' . $e->getMessage();

        // 強制終了
        exit;
    }

    ?>

</body>

</html>