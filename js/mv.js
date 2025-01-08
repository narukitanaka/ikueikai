$(function () {
  $(".inview").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("is-show");
    }
  });
});

// $(function(){
// 	$(".search").on("click", (e)  =>{
// 		$(".search_blocks").stop().fadeToggle(300);
// 	});
//   });

let target = $(".search");

target.click((event) => {
  $(".search_blocks").stop().fadeIn(300);
});
$(document).on("click", (e) => {
  if ($(e.target).closest(target).length < 1) {
    $(".search_blocks").stop().fadeOut(300);
  }
});

/////////////////
// TODO:  sp
/////////////////

// let targetSp = $(".sp_search");


// targetSp.click((event) => {
// 	$(".sp_search_blocks").stop().fadeIn(300);
//   });
// $(document).on("click", (e) => {
//   if ($(e.targetSp).closest(targetSp).length < 1) {
//     $(".sp_search_blocks").stop().fadeOut(300);
//   }
// });


// 画像をクリックでポップアップを表示
$('.sp_search').click(function(){
  $('.sp_search_blocks').fadeIn();
});
// クリックイベント全てに対しての処理
$(document).on('click touchend', function(event) {
  // 表示したポップアップ以外の部分をクリックしたとき
  if (!$(event.target).closest('.sp_search').length) {
    $(".sp_search_blocks").stop().fadeOut(300);
  }
});




$(function () {
  $("#acMenu .nav-list-item").on("click", function () {
    $(this).next().slideToggle();
  });
});




// $(function () {
//   $(".sp_text_menu_trigger .menu-text").on("click", function () {
//     $(this).fadeToggle();
//   });
// });

// $(function () {
//   $(".sp_text_menu_trigger .cross").on("click", function () {
//     $(this).fadeToggle();
//   });
// });
// $(function () {
//   $("#acMenu .nav-list-item").on("click", function () {
//     $(this).next().slideToggle();
//     //   $(".sp_menu_accordion_plus").addClass("active-plus");
//   });
// });












$(function () {
  var imgHeight = $(".js-mainVisual").outerHeight();

  var header = $(".js-header");

  $(window).on("load scroll", function () {
    if ($(window).scrollTop() > imgHeight) {
      // console.log($(window).scrollTop())

      header.addClass("head-active");
    } else {
      header.removeClass("head-active");
    }
  });

  $(".js-toggle-sp-menu").on("click", function () {
    $(this).toggleClass("active");
    $(".js-toggle-sp-menu-target").toggleClass("active");
   
  });
  
  $(".sp-d-list .menu li").on("click", function () {
    $(".js-toggle-sp-menu").toggleClass("active");
    $(".js-toggle-sp-menu-target").toggleClass("active");
   
  });


 
  
});
