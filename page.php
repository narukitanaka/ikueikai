<?php get_header() ?>

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

 <section class="visual_editor_contents">
<?php
if (have_posts()) :
 while (have_posts()) :
  the_post();
  the_content();
 endwhile;
endif;
?>

</section>
</section>


      

</section>
</main>
<?php get_footer(); ?>