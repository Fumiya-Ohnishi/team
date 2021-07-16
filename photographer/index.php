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
                            <li><a href="#">TOP</a></li>
                            <li><a href="#">Cooking</a></li>
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="main_img">
            <img src="../photographer/img/chamoro sei.jpg" />
        </div>
        <div class="scrolldown_space">
            <div class="scrolldown"><span>Scroll</span></div>
        </div>
        <div class="slider">
            <ul class="slider-top">
                <li class="slider-item slider-item01"></li>
                <li class="slider-item slider-item02"></li>
                <li class="slider-item slider-item03"></li>
                <li class="slider-item slider-item04"></li>
                <li class="slider-item slider-item05"></li>
                <li class="slider-item slider-item06"></li>
                <li class="slider-item slider-item07"></li>
                <li class="slider-item slider-item08"></li>
                <li class="slider-item slider-item09"></li>
                <li class="slider-item slider-item10"></li>
                <li class="slider-item slider-item11"></li>
                <li class="slider-item slider-item12"></li>
                <li class="slider-item slider-item13"></li>
                <li class="slider-item slider-item14"></li>
                <li class="slider-item slider-item15"></li>
            </ul>
            <ul class="slider-bottom" dir="rtl">
                <li class="slider-item slider-item16"></li>
                <li class="slider-item slider-item17"></li>
                <li class="slider-item slider-item18"></li>
                <li class="slider-item slider-item19"></li>
                <li class="slider-item slider-item20"></li>
                <li class="slider-item slider-item21"></li>
                <li class="slider-item slider-item01"></li>
                <li class="slider-item slider-item22"></li>
                <li class="slider-item slider-item23"></li>
                <li class="slider-item slider-item24"></li>
                <li class="slider-item slider-item25"></li>
                <li class="slider-item slider-item26"></li>
                <li class="slider-item slider-item27"></li>
                <li class="slider-item slider-item28"></li>
                <li class="slider-item slider-item29"></li>
                <li class="slider-item slider-item30"></li>
            </ul>
        </div>

        <div class="icon_wrapper">
            <div class="left_icon_wrapper">
                <img src="../photographer/img/gallery.jpg" />
                <div class="icon_text">
                    <a href="#">Gallery</a>
                </div>
            </div>
            <div class="center_icon_wrapper">
                <img src="../photographer/img/staff.jpg" />
                <div class="icon_text">
                    <a href="#">Staff</a>
                </div>
            </div>
            <div class="right_icon_wrapper">
                <img src="../photographer/img/mailsab.jpg" />
                <div class="icon_text">
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>

        <div class="link_wrapper">
            <div class="left_link_wrapper">
                <a href="#"><img src="../photographer/img/building/img28.jpg" /></a>
                <div class="main_link_text">
                    Work
                </div>
            </div>
            <div class="right_link_wrapper">
                <div class="right_list">
                    <a href="#"><img src="../photographer/img/cooking/img16.jpg" /></a>
                    <div class="link_text">
                        Cooking
                    </div>
                    <div class="link_sub_text">
                        料理写真
                    </div>
                </div>
                <div class="right_list">
                    <a href="#"><img src="../photographer/img/building/img22.jpg" /></a>
                    <div class="link_text">
                        Building
                    </div>
                    <div class="link_sub_text">
                        竣工写真
                    </div>

                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer_wrapper">
            <div class="left_footer">
                <img class="footer_logo" src="../photographer/img/WEB用.jpg" />
                <img class="footer_img" src="../photographer/img/chamoro sei.web.jpg" />
            </div>
            <div class="line"></div>
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
                <div class="right_sub_title">
                    <a href="#">Cooking</a>
                </div>
                <div class="right_sub_menu">
                    <a href="#">
                        こだわり
                    </a>
                    <a href="#">
                        撮影の流れ
                    </a>
                    <a href="#">
                        料金プラン
                    </a>
                </div>
                <div class="right_sub_title">
                    <a href="#">Building</a>
                </div>
                <div class="right_sub_menu">
                    <a href="#">
                        こだわり
                    </a>
                    <a href="#">
                        撮影の流れ
                    </a>
                    <a href="#">
                        料金プラン
                    </a>
                </div>
                <div class="btn">
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