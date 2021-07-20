<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>チャモロ写真工房</title>
</head>

<body>
  <form action="contact.php" method="POST" enctype="multipart/form-data">

    <header>
      <div class="header_logo">
        <img src="../photographer/img/hederlogo.jpg" />
      </div>
      <div class="header_right">
        <!-- ハンバーガーメニュー -->
        <div class="openbtn">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="nav">
          <nav id="g-nav">
            <div class="g-nav-list">
              <ul>
                <li><a href="/photographer/">TOP</a></li>
                <li><a href="/photographer/cooking.php">Cooking</a></li>
                <li><a href="/photographer/building.php">Building</a></li>
                <li><a href="/photographer/staff.php">Staff</a></li>
                <li><a href="/photographer/contact_form.php ">Contact</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div class="form">
      <div class="mb-3">
        <label for="exampleFormControlInput12" class="form-label" name="name">name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput2" placeholder="佐藤 太郎">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="email">Email</label>
        <input type="text" class="form-control" name="email"id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="textarea">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">お問い合わせ内容</label>
          <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>
      <div class="btn_wrapper">
        <button type="submit" class="btn btn-outline-primary">送信</button>
      </div>
    </div>
    <footer>
      <div class="footer_wrapper">
        <div class="center_footer">
          <div class="center_title">
            Access
          </div>
          <ul>
            <li>- 住所 -</li>
            <li>〒487-0025</li>
            <li>愛知県春日井市出川7-11-3</li>
            <li>- TEL -</li>
            <li>090-1745-4378</li>
            <li>- 営業時間 -</li>
            <li>平日 10:00 〜 19:00</li>
            <li>土日祝 10:00 〜 20:00</li>
          </ul>
        </div>
        <div class="line"></div>
        <div class="right_footer">
          <div class="right_title">
            menu
          </div>
          <div class="wrapper_menu">
            <div class="right_menu">
              <div class="right_sub_title">
                <a href="cooking.php">Cooking</a>
              </div>
              <div class="right_sub_menu">
                <a href="/photographer/cooking.php#kodawari">
                  こだわり
                </a>
                <a href="/photographer/building.php#move">
                  撮影の流れ
                </a>
                <a href="/photographer/cooking.php#plan">
                  料金プラン
                </a>
              </div>
            </div>
            <div class="left_menu">
              <div class="right_sub_title">
                <a href="building.php">Building</a>
              </div>
              <div class="right_sub_menu">
                <a href="building.php#kodawari">
                  こだわり
                </a>
                <a href="building.php#move">
                  撮影の流れ
                </a>
                <a href="building.php#plan">
                  料金プラン
                </a>
              </div>
            </div>
          </div>
          <div class="btn2">
            <a href="contact_form.php" class="btnarrow5">お問い合わせはこちら</a>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="style.js"></script>
  </form>
</body>

</html>