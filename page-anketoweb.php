<?php
/**
 * Template Name: アンケートフォームWEB用
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
                <p> より良い奨学金制度づくりのためにアンケートにご協力ください！<br>
                設問は、8問です。よろしくお願いいたします！</p>
            </div>
                <h3>アンケート募集期間　令和４年７月１日～７月３１日</h3>

                <?php echo do_shortcode('[contact-form-7 id="8407" title="アンケートフォーム_WEB用"]'); ?>

        </div>

    </section>
</section>



</section>
</main>
<?php get_footer(); ?>