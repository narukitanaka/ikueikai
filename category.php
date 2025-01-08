<?php

get_header(); 


?>



<body>
	
	<?php get_template_part('header-template'); ?>
	
      <main class="back_main_color">
        <!-- <div class="mv_about common_under_mv">
          <div class="inner"><img src="<?php bloginfo('template_directory'); ?>/images/about/mv.png" alt="" /></div>
        </div> -->

        <section class="ContentsAll under_base_width">
          <section>


       			<?php get_template_part('pankuzu'); ?>


            <h2 class="main_under_title">
              お知らせ一覧
  <!-- <p><?php single_cat_title(); ?></p> -->

            </h2>
          </section>
          <div class="sp_scroll">

          <ul class="tab">
          <li><a href="<?php bloginfo('url'); ?>/blogs/">すべて</a></li>
            <?php wp_list_categories('title_li='); ?>
          </ul>
</div>
     
  
  

          <div id="ALL" class="area common_tab_area">
            <div class="news_items">



            <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

            <article class="page-item">
                <a class="card" href="<?php the_permalink(); ?>">
                  <div class="inner">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php echo get_the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/images/bg/no-img.jpg" alt="" />
                <?php endif; ?>
                  </div>
                  </a>
                  <div class="info">
                    <div class="sub_info">
                    <div class="title"><?php echo $post->post_title; ?> </div>
                    <span class="time">更新日 : <?php the_time('Y年m月d日'); ?></span>
                   <div class="cat-line">

                      <span class="cat">
                      <?php
                        //属するカテゴリをリンク無しで表示
                        $categories = get_the_category();
                        if ($categories) {
                           
                            foreach ($categories as $category) {
                              echo '<a href="' . get_category_link( $category->term_id ) . '">' . "#" .$category->cat_name . '</a>';
                            }
                            
                        }
                        ?>
                      </span>
                      </div>
                    </div>
                  
            </div>
                </article>
              


              <?php endwhile; ?>
                <?php else : ?>
                    <!-- 投稿データが取得できない場合の処理 -->


          <div class="card">
                <div class="inner">
                  <img src="<?php bloginfo('template_directory'); ?>/images/bg/no-img.jpg" alt="" />
                </div>
                <div class="info">
                  <div class="sub_info">
                    <span class="time"><?php the_time('Y年m月d日'); ?></span
                    ><span class="cat">
                    <?php
                      //属するカテゴリをリンク無しで表示
                      $categories = get_the_category();
                      if ($categories) {
                          echo '<span>';
                          foreach ($categories as $category) {
                              echo "#" . $category->name;
                          }
                          echo '</span>';
                      }
                      ?>
                    </span>
                  </div>
                  <div class="text">
                    <p>
                    投稿はまだありません
                    </p>
                  </div>
                </div>
              </div>



                <?php endif; ?>

          
            </div>
          </div>
          <!--/area-->


        
         
        <?php wp_pagenavi(); ?>
        <!-- TODO: -->
      
        <?php 
    	
      $front_page_id = get_option('page_on_front');
      $acf_post_objects = get_field('pick_up_banners', $front_page_id); if( $acf_post_objects ): 
      ?>
        <div class="link_wrap">
        <?php foreach( $acf_post_objects as $post):?>
        <?php setup_postdata($post); ?>
  
        <?php foreach( $post as $pick_up_obj):
               $pick_up_obj_url = $pick_up_obj['url'];
               $pick_up_obj_title = $pick_up_obj['title'];
               $pick_up_obj_target = $pick_up_obj['target'] ? $pick_up_obj['target'] : '_self';
               
          
          ?>
  
          <li>
          <a href="<?php echo esc_url( $pick_up_obj_url ); ?>" target="<?php echo esc_attr( $pick_up_obj_target ); ?>">
          <div class="items">
        <p> <?php echo esc_html( $pick_up_obj_title ); ?></p>
          </div>
        </a>
          </li>
      <?php endforeach; // ループの終了 ?>

      <?php endforeach; // ループの終了 ?>
      </div>
      <?php wp_reset_postdata(); // ページの残りの部分は正常に動作するように、ポストオブジェクトをリセットします ?>
      <?php endif; ?>
        <!-- TODO: -->

        </section>

     
      </main>
<?php get_footer(); ?>
