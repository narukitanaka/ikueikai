jQuery(document).ready(function($) {
  // タクソノミーのチェックボックスリストのコンテナのIDやクラスを適宜調整してください
  $('#taxonomy-area .categorychecklist li').each(function() {
      var $listItem = $(this);
      // 孫カテゴリ（第3階層）が存在しない場合、この要素は第3階層です
      if ($listItem.children('ul.children').length === 0) {
          // 孫カテゴリがない場合（つまり第3階層）、チェックボックスを有効にする
          $listItem.find('input[type="checkbox"]').prop('disabled', false);
      } else {
          // 孫カテゴリが存在する場合（つまり第1階層または第2階層）、チェックボックスを無効化
          $listItem.find('input[type="checkbox"]').prop('disabled', true);
      }
  });
});
