<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="product_form_check.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="product_name">商品名</label>
            <input id="product_name" type="text" name="product_name" value="">
        </div>
        <div>
            <label for="price">価格</label>
            <input id="price" type="text" name="price" value="">
        </div>
        <div>
            <label for="color">カラー</label>
            <input id="color" type="text" name="color" value="">
        </div>
        <div>
            <label for="size">サイズ</label>
            <input id="size" type="text" name="size" value="">
        </div>
        <div>
            <label for="product_text">説明文</label>
            <textarea id="product_text" name="product_text"></textarea>
        </div>
        <p>
            <input type="file" name="image">
        </p>
        <input type="submit" value="送信する">
    </form>
</body>

</html>