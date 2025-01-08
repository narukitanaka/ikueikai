
<?php
// 検索クエリがカスタム投稿タイプ 'supporting_companies' の場合、専用のテンプレートにリダイレクト
if (isset($_GET['post_type']) && $_GET['post_type'] === 'supporting_companies') {
  include(get_template_directory() . '/search-company.php');
  exit;
}

get_header(); ?>

<body>

<?php get_template_part('header-template'); ?>

<main class="back_main_color">

<!-- <div class="mv_about common_under_mv">
  <div class="inner"><img src="<?php bloginfo('template_directory'); ?>/images/about/mv.png" alt=""></div>
</div> -->


<section class="ContentsAll under_base_width">

<?php if (have_posts()): ?>
<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
  } else {
    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
  }
?>



<ul class="search_result">
<?php while(have_posts()): the_post(); ?>

<ul class="wrapper cp_list">
  <li class="result_list">
  <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
  </li>
</ul>


<?php endwhile; ?>
</ul>
<?php else: ?>
検索されたキーワードにマッチする記事はありませんでした
<?php endif; ?>



</section>
</main>
<?php get_footer(); ?>