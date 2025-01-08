var headerHeight = $('.header').outerHeight(); // ヘッダーについているクラス名
var urlHash = location.hash;

if(urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
        var target = $(urlHash);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({scrollTop:position}, 800); // スクロールの速さ
    }, 0);
}
$('a[href^="#"]').click(function() {
    var href= $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 800); // スクロールの速さ
});