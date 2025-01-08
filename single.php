<?php get_header() ?>



<body>
<?php get_template_part('header-template'); ?>



<main class="back_main_color">
      

      <div class="d-contents">

        <div class="base_width">
          <div class="d-news-wapper">
<?php get_template_part('pankuzu'); ?>

            <div class="d-news-head">
              <!-- <div class="d-news-info"><span><?php $category = get_the_category();echo $category[0]->name;?></span></div> -->
              <div class="d-news-title"><h2><?php the_title(); ?></h2></div>
              <div class="d-news-time">
              <?php
                  $categories = get_the_category();
                  if ( $categories ) {
                    echo '<ul class="category">';
                    foreach ( $categories as $category ) {
                      echo '<li>'.$category->name.'</li>';
                    }
                    echo '</ul>';
                  }
              ?>
                <span><?php echo get_the_date( 'Y.m.d' ); ?></span>
            </div>
            </div>

            <div class="d-news-contents">
           <?php the_content(); ?>

            </div>

            <div class="np-btn">
              <p><?php previous_post_link('%link', '< 前の記事へ'); ?></p>
              <p><?php next_post_link('%link', '次の記事へ >'); ?></p>
            </div>
          </div>
          <!-- d-news-wapper -->
        </div>
      </div>


<?php get_footer(); ?>