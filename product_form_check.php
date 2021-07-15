<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="product_registration.php" method="POST" enctype="multipart/form-data">

    <?php
    echo $_POST['product_name'];
    echo $_POST['price'];
    echo $_POST['color'];
    echo $_POST['size'];
    echo $_POST['product_text'];
    //ファイルが送信されていない場合はエラー処理
    if (!isset($_FILES['image'])) {
        echo 'ファイルが送信されていません。';
    }

    //ファイル名を使用して保存先ディレクトリを指定 basename()でファイルシステムトラバーサル攻撃を防ぐ
    $save = 'img/' . basename($_FILES['image']['name']);

    //move_uploaded_fileで、一時ファイルを保存先ディレクトリに移動させる
    if (move_uploaded_file($_FILES['image']['tmp_name'], $save)) {
        echo 'アップロード成功！';
    } else {
        echo 'アップロード失敗！';
    }
    ?>

    <input type="hidden" name="product_name" value="<?= $_POST['product_name']?>">
    <input type="hidden" name="price" value="<?= $_POST['price']?>">
    <input type="hidden" name="color" value="<?= $_POST['color']?>">
    <input type="hidden" name="size" value="<?= $_POST['size']?>">
    <input type="hidden" name="product_text" value="<?= $_POST['product_text']?>">
    <input type="hidden" name="image" value="<?= $save ?>">

    <input type="submit" name="btn" value="登録">
</body>
</form>
</html>