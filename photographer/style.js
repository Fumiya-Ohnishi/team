// ハンバーガーメニュー
$(".openbtn").click(function(){
    $(this).toggleClass('active');
    $("#g-nav").toggleClass('panelactive');
});

$("#g-nav a").click(function(){
    $(".openbtn").removeClass('active');
    $("#g-nav").removeClass('panelactive');
});

// スライド上の設定
$('.slider-top').slick({
    accessibility:false,
    arrows:false,
    autoplay:true,
    pauseOnHover:false,
    pauseOnFocus:false,
    slidesToShow:5,
    slidesToScroll:1,
    swipe:false,
});
$('.slider-bottom').slick({
    accessibility:false,
    arrows:false,
    autoplay:true,
    pauseOnHover:false,
    pauseOnFocus:false,
    slidesToShow:5,
    slidesToScroll:1,
    swipe:false,
    rtl: true,
});

function fadeAnime(){

    //動きの指定
      $('.fadeInTrigger').each(function(){ //fadeInTriggerというクラス名が
        var elemPos = $(this).offset().top-50;//要素より、50px上の
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeIn');// 画面内に入ったらfadeInというクラス名を追記
        }else{
        $(this).removeClass('fadeIn');// 画面外に出たらfadeInというクラス名を外す
        }
        });
    
    }
        // 画面をスクロールをしたら動く場合の記述
        $(window).scroll(function (){

        fadeAnime();/* アニメーション用の関数を呼ぶ*/

    });// ここまで画面をスクロールをしたら動く場合の記述

    // 画面が読み込まれたらすぐに動く場合の記述
    $(window).on('load', function(){

        fadeAnime();/* アニメーション用の関数を呼ぶ*/

    });// ここまで画面が読み込まれたらすぐに動く場合の記述

    // function fadeAnime(){

    //     //動きの指定
    //       $('.kodawari_img').each(function(){ //fadeInTriggerというクラス名が
    //         var elemPos = $(this).offset().top-50;//要素より、50px上の
    //         var scroll = $(window).scrollTop();
    //         var windowHeight = $(window).height();
    //         if (scroll >= elemPos - windowHeight){
    //         $(this).addClass('fadeIn');// 画面内に入ったらfadeInというクラス名を追記
    //         }else{
    //         $(this).removeClass('fadeIn');// 画面外に出たらfadeInというクラス名を外す
    //         }
    //         });
    //     }    
    //     // 画面をスクロールをしたら動く場合の記述
    //     $(window).scroll(function (){

    //     fadeAnime();/* アニメーション用の関数を呼ぶ*/

    // });// ここまで画面をスクロールをしたら動く場合の記述

    // // 画面が読み込まれたらすぐに動く場合の記述
    // $(window).on('load', function(){

    //     fadeAnime();/* アニメーション用の関数を呼ぶ*/

    // });

function ScrollTimelineAnime(){
    $('.timeline li').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        var startPoint = 500;
        if (scroll >= elemPos - windowHeight-startPoint) {
            var H = $(this).outerHeight(true)
            var percent = (scroll+startPoint - elemPos) / (H/2) *100;

            if (percent > 100) {
                percent = 100;
            }

            $(this).children('.border-line').css({
                height:percent + "%",
            });
        }
    });
}

$(window).on('scroll',function(){
    ScrollTimelineAnime();
});
$(window).on('load',function(){
    ScrollTimelineAnime();
});