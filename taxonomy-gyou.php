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
            <li class="active"><a href="<?php bloginfo('url'); ?>/gyou/all/">五十音順</a></li>
            <li><a href="<?php bloginfo('url'); ?>/industry/all/">業種別</a></li>
            <li><a href="<?php bloginfo('url'); ?>/area/all/">地域別</a></li>
          </ul>
        </div>

        <div class="cate-list">
          <!-- 投稿数の合計 -->
          <?php
            // supporting_companies の全投稿数を取得
            $all_posts_query = new WP_Query(array(
              'post_type' => 'supporting_companies',
              'posts_per_page' => -1,
              'fields' => 'ids'  // 重量化を避けるためにIDのみを取得
            ));
            // 全投稿数を変数に格納
            $total_all_posts = $all_posts_query->found_posts;
          ?>
          <!-- 表示中の投稿数の合計 -->
          <?php
            global $wp_query; // グローバル変数を参照
            $total_posts = $wp_query->found_posts; // マッチする投稿の総数を取得
          ?>
          <p class="total">全<?php echo $total_all_posts; ?>件中<span><?php echo $total_posts; ?>件</span></p>
          <!-- 五十音順別のリンクリスト -->
          <ul class="cate-50on">
            <?php
              $gyou_terms = array(
                'agyo' => 'あ行',
                'kagyo' => 'か行',
                'sagyo' => 'さ行',
                'tagyo' => 'た行',
                'nagyo' => 'な行',
                'hagyo' => 'は行',
                'magyo' => 'ま行',
                'yagyo' => 'や行',
                'ragyo' => 'ら行',
                'wagyo' => 'わ行',
                'all' => '全て',
              );
              $current_tax = get_query_var('taxonomy');
              $current_term = get_query_var('term');
              foreach ($gyou_terms as $slug => $name) {
                $term = get_term_by('slug', $slug, 'gyou');
                $count = $term ? $term->count : 0;
                $active_class = ($current_tax == 'gyou' && $current_term == $slug) ? ' class="active"' : '';
                $link_style = $count > 0 ? '' : ' style="pointer-events: none;"';
                echo '<li' . $active_class . '><a href="' . esc_url(get_bloginfo('url')) . '/gyou/' . esc_attr($slug) . '"' . $link_style . '>' . esc_html($name) . '<span>( ' . esc_html($count) . ' )</span></a></li>';
              }
            ?>
          </ul>
        </div>

        <!-- 投稿リスト -->
        <div class="company-list">
          <ul>
            <?php
              // 現在のタームを取得
              $term_slug = get_query_var('term');
              $taxonomy_name = 'gyou'; // タクソノミー名を設定
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $param = array(
                'post_type' => 'supporting_companies',
                'order' => 'ASC',  // 昇順（五十音順）
                'orderby' => 'meta_value',  // タイトルで並び替え
                'meta_key' => 'furigana', //カスタムフィールドのフィールド名
                'paged' => $paged,
                'post_status' => 'publish', // 公開されている投稿のみを取得
                'tax_query' => array(
                  array(
                    'taxonomy' => $taxonomy_name,
                    'field'    => 'slug',
                    'terms'    => $term_slug
                  ),
                ),
              );
              $the_query = new WP_Query($param);
              if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
            ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="box">
                    <p class="name"><?php the_title(); ?></p>
                    <div class="img-box">
                      <?php
                        $images = get_field('img-logo');
                        if($images){echo '<img src="'.$images.'">';}
                      ?>
                    </div>
                    <!-- <p class="name"><?php the_title(); ?></p> -->
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