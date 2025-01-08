// //任意のタブにURLからリンクするための設定
// function GethashID (hashIDName){
// 	if(hashIDName){
// 		//タブ設定
// 		$('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
// 			var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
// 			if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
// 				var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
// 				$('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
// 				$(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
// 				//表示させるエリア設定
// 				$(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
// 				$(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
// 			}
// 		});
// 	}
// }

// //タブをクリックしたら
// $('.tab a').on('click', function() {
// 	var idName = $(this).attr('href'); //タブ内のリンク名を取得	
// 	console.log(idName)
// 	GethashID (idName);//設定したタブの読み込みと
// 	return false;//aタグを無効にする
// });


// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {


	var url = location.href
	console.log(url)
	$('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
		var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
		console.log(idName)


		if(idName == url){ 
			var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
			$(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
		}
	});
})


$('.acd-label-tabel').on('click', function() {//タイトル要素をクリックしたら
	var findElm = $(".acd-box");//直後のアコーディオンを行うエリアを取得し
	$(findElm).slideToggle();//アコーディオンの上下動作
	  
	if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
	  $(this).removeClass('close');//クラス名を除去し
	}else{//それ以外は
	  $(this).addClass('close');//クラス名closeを付与
	}
  });
  
  //ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
  $(window).on('load', function(){
	$('.acd-box').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
	$(".open").each(function(index, element){ //openクラスを取得
	  var Title =$(element).children('.acd-label-tabel'); //openクラスの子要素のtitleクラスを取得
	  $(Title).addClass('close');       //タイトルにクラス名closeを付与し
	  var Box =$(element).children('.acd-box'); //openクラスの子要素boxクラスを取得
	  $(Box).slideDown(500);          //アコーディオンを開く
	});
  });