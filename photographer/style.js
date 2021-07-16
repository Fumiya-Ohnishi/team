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