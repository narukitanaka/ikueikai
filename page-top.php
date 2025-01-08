<?php
/**
 * Template Name: トップ
 */

get_header(); ?>


<body>
<?php get_template_part('header-template'); ?>
		
<main>
  <div class="wrapper_kv slide">

    <section class="kv_area">
      <div class="kv_photo">
        <img src="<?php bloginfo('template_directory'); ?>/images/top/kv_01.png" alt="すべての人に学ぶ機会を">
      </div>

      <div class="catchcopy">
          <h2>すべての人に<br>学ぶ機会を</h2>
          <p>自分の可能性を信じ、夢に向かって進む高校生を支援しています。</p>
      </div>

      <div class="kv_link">
        <div class="link_inner">
          <a href="<?php bloginfo('url'); ?>/overview/">
            <div class="box_head">
              <h3>奨学金のご案内</h3>
            </div>
            <div class="box_under">
              <h4>奨学金の貸付をご希望の方</h4>
            </div>
            <div class="link_btn_area">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/link.png" alt="詳しくみる！">
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="kv_area">
      <div class="kv_photo">
        <img src="<?php bloginfo('template_directory'); ?>/images/top/kv_02.png" alt="夢みらい奨学金">
      </div>

      <div class="catchcopy">
          <h2>夢みらい奨学金</h2>
          <p>教育機会を創出し次の世代へ繋ぐ。あなたの寄附が大阪の未来を育む</p>
      </div>

      <div class="kv_link">
        <div class="link_inner">
          <a href="<?php bloginfo('url'); ?>/donation/">
            <div class="box_head">
              <h3>将来の夢の支援をする。</h3>
            </div>
            <div class="box_under">
              <h4>寄附へのご協力をお願いします。</h4>
            </div>
            <div class="link_btn_area">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/link.png" alt="詳しくみる！">
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="kv_area">
      <div class="kv_photo">
        <img src="<?php bloginfo('template_directory'); ?>/images/top/kv_03.png" alt="代理返還制度">
      </div>

      <div class="catchcopy">
          <h2>代理返還制度</h2>
          <p>次代の社会を担う若者たちを社会全体で支える制度です。</p>
      </div>

      <div class="kv_link">
        <div class="link_inner">
          <a href="<?php bloginfo('url'); ?>/dairihenkan">
            <div class="box_head">
              <h3>支援企業を募集中</h3>
            </div>
            <div class="box_under">
              <h4>働きやすい環境づくりによる人材確保</h4>
            </div>
            <div class="link_btn_area">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/link.png" alt="詳しくみる！">
            </div>
          </a>
        </div>
      </div>
    </section>
  </div><!-- wrapper_kv end -->


        
        </div>

          </article>

      </div>
      <!-- mv-wrapper -->

      <div class="important_news_top_link">
        <?php 
  $link = get_field('important_news');
  if( $link ): 
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
      <div class="main_info_top_text"><span class="cate_info">INFORMATION</span><a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="top_link_kv"><?php echo esc_html( $link_title ); ?></a></div>
  <?php endif; ?>
 </div>





      <section id="Support">

        <div class="top_support">

          <div class="base_width">

        <section class="flex_contaier">
  
              <div class="left_block">


               <div class="common_category_text">
                  <span>
                    SUPPORT
                  </span>
               </div>

              <div class="common_main_title">
                  <h4>
                    大阪府育英会の<br>奨学金事業
                  </h4>
              </div>

              <hr class="top_hr">
              <div class="suppor_contetns">
                <h5>奨学金の貸付</h5>
                <div class="text">
                  <p>大阪府育英会は、昭和27年(1952 年)4月設立以来、向学心に富みながら経済的理由により修学が困難な生徒への奨学金貸付事業を実施してきました。</p>
                  <p>また、昭和44年からは入学資金貸付事業も実施しています。</p>
                </div>
  
                <a class="common_link_btn" href="<?php bloginfo('url'); ?>/overview">
                  <p>詳しく見る</p>
                  <span class="green_arrow"><img src="<?php bloginfo('template_directory'); ?>/images/top/arrow_right_alt.png" alt=""></span>
                </a>
              </div>

              </div>
            <!-- left_block -->
  
            <div class="right_block">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/support.png" alt="">
            </div>
  
            </section>
            <!-- flex_contaier -->

            </div>


        <div class="base_width">
        <section class="options">

        <a href="<?php bloginfo('url'); ?>/scholarship-application/">
  
            <div class="items">
              <div class="images">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/items01.png" alt="">
              </div>
              <div class="text">
                <p>貸付を受けたい方</p>
              </div>
            </div>
          </å>
          <a href="<?php bloginfo('url'); ?>/scholarship-received/">

          <div class="items">
            <div class="images">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/items03.png" alt="">
            </div>
            <div class="text">
              <p>貸付を受けている方</p>
            </div>
          </div>

          </a>
          <!-- <a href="<?php bloginfo('url'); ?>/from-now/">

          <div class="items">
            <div class="images">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/items05.jpg" alt="">
            </div>
            <div class="text">
              <p>これから返還が始まる方</p>
            </div>
          </div>
            </a> -->
          <a href="<?php bloginfo('url'); ?>/return-sc/">

            <div class="items">
              <div class="images">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/items02.png" alt="">
              </div>
              <div class="text">
                <p>返還中の方</p>
              </div>
            </div>
              </a>

              <!-- <a href="<?php bloginfo('url'); ?>/よくあるお問い合わせ">

            <div class="items">
              <div class="images">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/items06.jpg" alt="">
              </div>
              <div class="text">
                <p>よくあるお問合せ</p>
              </div>
            </div>

       </a> -->
          
        </section>
      </div>






      <div class="base_width">

        <section class="flex_contaier_revers">
          <div class="left_block">
            <img src="<?php bloginfo('template_directory'); ?>/images/top/support02.png" alt="">
          </div>
          <div class="right_block">

          <div class="suppor_contetns">
            <h5>給付型奨学金の創設</h5>
            <div class="text">
              <p>貸付制度と併せて、夢の実現のために努力している高校生を支援するため、返還を要しない給付型奨学金事業として平成 23年度に株式会社ユー·エス·ジェイ(現合同会社ユー·エス·ジェイ)からいただいた寄附金を原資とした「USJ奨学金」を、平成 26年度には府民の皆さまや民間企業·団体等からいただいた寄附金を原資とした「夢みらい奨学金」を創設しました。</p>

            </div>

            <a class="common_link_btn" href="<?php bloginfo('url'); ?>/給付型奨学金/">
                  <p>詳しく見る</p>
                  <span class="green_arrow"><img src="<?php bloginfo('template_directory'); ?>/images/top/arrow_right_alt.png" alt=""></span>
                </a>

          </div>
        <!-- left_block -->

      

        </section>
      </div>

      </div>

    </div>
            
      </section>
      <!-- Support-->


      <section id="topMiddle">

<div class="contents">
  <div class="back">
    <img src="<?php bloginfo('template_directory'); ?>/images/top/back.png" alt="">
  </div>


 <div class="message_wrap">
    
    <div class="title_wrap">
    <h5 class="title">  将来の社会を担う人づくり</h5>

    <div class="sp_title_blocks">
      <h5 class="sp_title"> 将来の社会を担う</h5>
      <h5 class="sp_title"> 人づくり</h5>
    </div>

    
    </div>

    <div class="mes_contents">




      <div class="text">
      奨学金の貸付や給付型奨学金により、<br>
      教育の機会均等と次代の社会を担う有用な人材の育成に寄与してきました。<br>
      卒業生は現在、社会の幅広い分野で活躍されています。
      </div>

     






      <div class="image_inner">
        <div class="inner">
          <img src="<?php bloginfo('template_directory'); ?>/images/top/middle01.png" alt="">
        </div>
        <div class="inner">
          <img src="<?php bloginfo('template_directory'); ?>/images/top/middle02.png" alt="">
        </div>
        <div class="inner">
          <img src="<?php bloginfo('template_directory'); ?>/images/top/middle03.png" alt="">
        </div>
      </div>




    
    </div>

 </div>

</div>
      </section>



      
      <div class="dairi_banner_wrap">
        <a href="<?php bloginfo('url'); ?>/dairihenkan">
          <img src="<?php bloginfo('template_directory'); ?>/images/top/dairihenkan_banner.png" alt="代理返済制度について">
        </a>
      </div>
      

      <div class="shienkigyo_banner_wrap">
        <a href="<?php bloginfo('url'); ?>/gyou/all/">
          <img src="<?php bloginfo('template_directory'); ?>/images/top/shienkigyo_banner02.png" alt="支援企業一覧へ">
        </a>
      </div>


      <section id="About">

        <div class="top_about">

          <div class="base_width">

        <section class="flex_contaier">
  
              <div class="left_block">


               <div class="common_category_text">
                  <span>
                    ABOUT US
                  </span>
               </div>

              <div class="common_main_title">
                  <h4>
                    大阪府育英会について
                  </h4>
              </div>
              <div class="sp_right_block">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/4159830_s.jpg" alt="">
              </div>

              <hr class="top_hr">
              <div class="suppor_contetns">
                <div class="text">
                  <p>大阪府内に住所を有する者の保護する学生・生徒で、向学心に富みながら経済的理由により修学困難な者に、奨学金の貸付その他奨学上必要と認める事業等を行うことにより、教育の機会均等に寄与するとともに、次代の社会を担う有用な人材の育成に資することを目的とする。</p>

                </div>
  
                <a class="common_link_btn" href="<?php bloginfo('url'); ?>/about">
                  <p>詳しく見る</p>
                  <span class="green_arrow"><img src="<?php bloginfo('template_directory'); ?>/images/top/arrow_right_alt.png" alt=""></span>
                </a>
              </div>

              </div>
            <!-- left_block -->
  
            <div class="right_block">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/4159830_s.jpg" alt="">
            </div>
  
            </section>
            <!-- flex_contaier -->

            </div>

     

      </div>

    </div>
            
      </section>
      <!-- About-->





      <section id="News">
        <div class="top_news">
          <div class="base_width">

          <div class="common_category_center">
            <span>
              NEWS
            </span>

         </div>
         <div class="sub_title"><p>お知らせ</p></div>
         <hr>

         <div class="news_items">

		 <?php

		// ① ↓ 今現在のページ位置を取得
		$paged = (int) get_query_var('paged');

		$args = array(
		// ② get_option('posts_per_page') ← で管理画面で設定した、記事一覧で表示するページ数を取得
		// ③ (int) get_query_var('paged') ← で取得した、$pagedを挿入
		'paged' => $paged,
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status' => 'publish',
    'posts_per_page' => '3'
		);
		$the_query = new WP_Query($args);

		// 記事一覧のループスタート

		if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
?>

           <div class="card">
           <a href="<?php the_permalink(); ?>">

             <div class="inner">

               <?php if (has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail(); ?>
                   <?php else : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/images/bg/no-img.jpg" alt="">


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
               <!-- <div class="text"><p><?php echo mb_substr(strip_tags($post->post_content), 0, 45) . '...'; ?></p></div> -->
             </div>
           </div>

			<?php

			endwhile;
			endif;

			wp_reset_postdata();

			?>
          
         </div>

         <div class="btn_wrapper">

         <a class="common_link_btn_news" href="<?php bloginfo('url'); ?>/blogs">

            <p>お知らせ一覧</p>
            <span class="green_arrow"><img src="<?php bloginfo('template_directory'); ?>/images/top/arrow_right_alt.png" alt=""></span>

            </a>

         </div>


         <?php $acf_post_objects = get_field('pick_up_banners'); if( $acf_post_objects ): ?>
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


         </div>

        </div>

      </section>


      <section id="Process">
        <div class="top_process">
          <div class="base_width">

         <div class="sub_title"><p>各種手続き</p></div>

         <div class="flex">
         <a href="<?php bloginfo('url'); ?>/account-transfer/">
             <div class="inner">
               <img src="<?php bloginfo('template_directory'); ?>/images/top/card02.jpg" alt="">
             </div>
         </a>
          <a href="<?php bloginfo('url'); ?>/style">
             <div class="inner">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/card01.jpg" alt="">
  
             </div>
          </a>
         </div>
         <div class="sp_flex">

         <a href="<?php bloginfo('url'); ?>/account-transfer/">
             <div class="inner">
               <img src="<?php bloginfo('template_directory'); ?>/images/top/sp_card01.jpg" alt="">
             </div>
         </a>
         <a href="<?php bloginfo('url'); ?>/style">

             <div class="inner">
              <img src="<?php bloginfo('template_directory'); ?>/images/top/sp_card02.jpg" alt="">
  
             </div>
          </a>
         </div>
 </div>

        </div>

      </section>

      <section id="Donation">
        <section class="top_donation">

          <div class="base_width">

            <div class="common_category_text">
              <span>
                DONATION
              </span>
           </div>

          <div class="common_main_title font-init hr-line">
              <h4>
              寄附のお願い
              </h4>
          </div>

          <div class="flex">
            <div class="left">
              <div class="inner"><img src="<?php bloginfo('template_directory'); ?>/images/top/donate.png" alt=""></div>
            </div>
         
            <div class="right">
              <div class="text">
                <p>「夢みらい奨学金」は夢の実現のため、強い向学心がありながら、経済的な理由により学習環境に恵まれない中にあっても、自らの得意分野（資格・スポーツ・音楽等）を生かして努力し、将来の夢の実現のため大学等への進学を目指す高校生を支援し、大阪・日本の未来を担う人材の育成を図ることを目的としています。</p>
              </div>

              <a class="common_link_btn" href="<?php bloginfo('url'); ?>/donation/">
              <span class="mark"><img src="<?php bloginfo('template_directory'); ?>/images/top/volunteer_activism.png" alt=""></span>

                  <p>寄附について</p>
                  <span class="green_arrow"><img src="<?php bloginfo('template_directory'); ?>/images/top/arrow_right_alt.png" alt=""></span>
                </a>
             

            </div>

          </div>

         </div>
        </section>

      </section>


      <section id="CONTACT">
        <div class="top_contact">
          <div class="base_width">

            <div class="common_category_text">
              <span>
                CONTACT
              </span>
           </div>

          <div class="common_main_title font-init hr-line">
              <h4>
                お問合せ
              </h4>
          </div>
          <div class="flex">
            <div class="left">
              <div class="inner"><img src="<?php bloginfo('template_directory'); ?>/images/top/contact.png" alt=""></div>
            </div>
         
            <div class="right">
              <div class="text">
                <p>大阪府育英会では、ご利用者様の目的に合わせてお問合せの窓口を複数設けています。ご質問・ご相談はお気軽に該当窓口までお問合せください。
                </p>
              </div>

              

              <a class="common_link_btn" href="<?php bloginfo('url'); ?>/contact/">
              <span class="mark mark_02"><img src="<?php bloginfo('template_directory'); ?>/images/top/phone.png" alt=""></span>

                  <p>お問い合わせ</p>
                  <span class="green_arrow"><img src="<?php bloginfo('template_directory'); ?>/images/top/arrow_right_alt.png" alt=""></span>
                </a>

             


            </div>
          </div>
         </div>
        </div>

      </section>
    </main>
<?php get_footer(); ?>