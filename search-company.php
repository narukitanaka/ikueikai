<?php get_header(); ?>
<body>
  <?php get_template_part('header-template'); ?>
  <main class="back_main_color">
    <section class="ContentsAll under_base_width">
      <section class="p-archive-company">
        <?php get_template_part('pankuzu'); ?>
        <h2 class="main_under_title">
          支援企業一覧
        </h2>

        <!-- 検索バー -->
        <div class="custom-serch_wrapper">
          <form action="<?php echo site_url('/'); ?>" method="get">
            <input type="text" name="s" placeholder="検索ワードを入力 . . . ">
            <input type="hidden" name="post_type" value="supporting_companies">
            <input type="image" src="<?php echo get_template_directory_uri(); ?>/images/top/icon-search.svg" alt="検索">
          </form>
        </div>

        <div class="sp_scroll">
          <ul class="tab">
            <li><a href="<?php bloginfo('url'); ?>/gyou/all/">五十音順</a></li>
            <li><a href="<?php bloginfo('url'); ?>/industry/all/">業種別</a></li>
            <li><a href="<?php bloginfo('url'); ?>/area/all/">地域別</a></li>
          </ul>
        </div>

        <div class="result-count">
          <?php
            if (isset($_GET['s']) && empty($_GET['s'])) {
              echo '検索キーワード未入力：'.$wp_query->found_posts .'件'; // 検索キーワードが未入力の場合のテキストを指定
            } else {
              echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
            }
          ?>
        </div>

        <!-- 投稿リスト -->
        <div class="company-list">
          <ul>
            <?php
              // 検索キーワードを取得
              $search_keyword = isset($_GET['s']) ? $_GET['s'] : '';
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $param = array(
                'post_type' => 'supporting_companies',
                'order' => 'ASC',  // 昇順（五十音順）
                'orderby' => 'meta_value',  // タイトルで並び替え
                'meta_key' => 'furigana', //カスタムフィールドのフィールド名
                'paged' => $paged,
                'post_status' => 'publish', // 公開されている投稿のみを取得
                's' => $search_keyword, // 検索キーワードを追加
              );
              $the_query = new WP_Query($param);
              if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
            ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="box">
                    <div class="img-box">
                      <?php
                        $images = get_field('img-logo');
                        if($images){echo '<img src="'.$images.'">';}
                      ?>
                    </div>
                    <p class="name"><?php the_title(); ?></p>
                    <?php the_content(); ?>
                  </div>
                </a>
              </li>
            <?php endwhile; endif; ?>  
          </ul>
        </div>
      </section>

      <?php
        global $wp_query;
        if ($wp_query->max_num_pages > 1) {
            // 複数のページがある場合のみページネーションを表示
            wp_pagenavi();
        }
      ?>

    </section>
  </main>
  <?php get_footer(); ?>