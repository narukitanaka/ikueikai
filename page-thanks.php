<?php
/**
 * Template Name: サンクスページ
 */
get_header(); ?>

<body>
<?php get_template_part('header-template'); ?>


<main class="back_main_color">
<!-- <div class="mv_about common_under_mv">
    <div class="inner"><img src="https://xs462442.xsrv.jp/ikueikai_wp/wp-content/themes/ikueikai_renew/images/about/mv.png" alt=""></div>
</div> -->

<section class="ContentsAll under_base_width">

<section>

    <?php get_template_part('pankuzu'); ?>

        <h2 class="main_under_title">
            <?php the_title(); ?>
        </h2>

    <section>

        <div class="wrapper_anketo">
            <div class="text">
                <p> 送信完了しました。<br>
                アンケートのご入力ありがとうございました。</p>
            </div>
            <div class="anketo_return_btn">
                <a href="<?php bloginfo('url'); ?>">トップに戻る</a>
            </div>

        </div>

    </section>
</section>



</section>
</main>
<?php get_footer(); ?>