<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        (function(d) {
            var config = {
                    kitId: 'iuu4oen',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <title>チャモロ写真工房</title>
</head>

<body>
    <header>
        <div class="header_logo">
            <img src="../photographer/img/hederlogo.jpg" />
        </div>
        <div class="header_right">
            <div class="mail_img">
                <img src="../photographer/img/mail.jpg" />
            </div>
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
                            <li><a href="../photographer/">TOP</a></li>
                            <li><a href="../photographer/cooking.php">Cooking</a></li>
                            <li><a href="../photographer/building.php">Building</a></li>
                            <li><a href="../photographer/staff.php">Staff</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="main_text">
            Cooking
        </div>
        <div class="scrolldown_space">
            <div class="scrolldown"><span>Scroll</span></div>
        </div>

        <div class="main2_img">
            <img src="../photographer/img/cooking/img18.jpg" />
        </div>

        <div id="kodawari" class="kodaawri">
            <div class="sub_title">
                こだわり
            </div>
            <div class="kodawari_img">
                <img src="../photographer/img/料理写真は・・・.jpg" />
            </div>
        </div>

        <hr color="#0000" width="80%">

        <div id="move" class="move_wrapper">
            <div class="sub_title">
                撮影の流れ
            </div>
            <div class="move_space">
                <div class="move_img">
                    <img src="../photographer/img/cooking/img1.jpg" />
                </div>
                <div class="move_text_wrapper">
                    <div class="move_sub_title">
                        1.ご予約
                    </div>
                    <div class="move_text">
                        <ul>
                            <li>
                                日程はご希望の撮影日を２～３日ご連絡して下さい。
                            </li>
                            <li>
                                その後、TELやオンライン（ZOOMなど）によりご希望の日を決定。
                            </li>
                            <li>
                                撮影内容に関しては、撮影日２日前までに詳細をご連絡して下さい。
                            </li>
                        </ul>
                    </div>
                    <div class="move_sub_title">
                        2.撮影日
                    </div>
                    <div class="move_text">
                        <ul>
                            <li>
                                決定したお時間の１５～３０分前には撮影現場に入ります。
                            </li>
                            <li>
                                1カットづつモニター画面で確認させて頂きながら、
                            </li>
                            <li>
                                ご希望の写真をつくって行きます。
                            </li>
                        </ul>
                    </div>
                    <div class="move_sub_title">
                        3.納品
                    </div>
                    <div class="move_text">
                        <ul>
                            <li>
                                撮影したRAW画像を基に
                            </li>
                            <li>
                                一枚一枚丁寧に画像を整えていきますので、少々お時間を頂戴します。
                            </li>
                            <li>
                                【色補正やゴミ取り、その他様々な手直しを致します。】
                            </li>
                            <li>
                                その後、ご希望の使用用途に応じた2～3種類のJPG画像に変換し、
                            </li>
                            <li>
                                その写真を種類ごとにフォルダー分けしたものを保存して
                            </li>
                            <li>
                                （そのまま使用できるようにして）納品致します。
                            </li>
                        </ul>
                    </div>
                    <div class="move_sub_title">
                        4.デジタル処理
                    </div>
                    <div class="move_text">
                        <ul>
                            <li>
                                雰囲気を変えたり、余分な所を完全に消したり、
                            </li>
                            <li>
                                様々なデジタル処理に対応致します。
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="cooking_img">
            <div class="left_img fadeInTrigger">
                <img class="fadeInTrigger" src="../photographer/img/cooking/img5.jpg" />
            </div>
            <div class="right_img">
                <img class="fadeInTrigger" src="../photographer/img/cooking/img9.jpg" />
                <img class="fadeInTrigger" src="../photographer/img/cooking/img13.jpg" />
            </div>
        </div>

        <div id="plan" class="plan_wrapper">
            <div class="sub_title">
                料金プラン
            </div>
            <div class="plan_text">
                <ul>
                    <li>
                        1時間半まで
                    </li>
                    <li>
                        ￥38,500（税込）～
                    </li>
                </ul>
                お気軽にお問い合わせください
            </div>
        </div>


    </main>

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
                    <a href="#" class="btnarrow5">お問い合わせはこちら</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="style.js"></script>
</body>

</html>