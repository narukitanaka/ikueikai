<?php get_header(); ?>
<body>
  <?php get_template_part('header-template'); ?>
  <main class="back_main_color">
    <section class="ContentsAll under_base_width">

      <section class="p-archive-scholarship">

        <?php get_template_part('pankuzu'); ?>

        <p class="sub-ttl"><span>私立高等学校・私立専修学校</span>（国公立校は検索対象外です。）</p>

        <h2 class="main_under_title">入学時増額奨学資金の貸付限度額</h2>

        <form id="scholarship-search" method="get">
          <!-- カテゴリ選択 -->
          <dl class="step-txt">
            <dt>1.</dt>
            <dd>対象となる課程にチェックを入れてください。</dd>
          </dl>
          <div class="check-cate">
            <?php
              $categories = get_terms([
                'taxonomy' => 'scholarship-cat',
                'hide_empty' => false,
              ]);
              if (!empty($categories)) {
              foreach ($categories as $category) {
            ?>
              <label>
                <input type="radio" name="scholarship_category" value="<?php echo esc_attr($category->term_id); ?>"required>
                <?php echo esc_html($category->name); ?>
              </label>
            <?php
            }
            }
            ?>
          </div>
          <!-- 検索窓 -->
          <dl class="step-txt">
            <dt>2.</dt>
            <dd>
              下記の検索窓に学校名を入力して、検索ボタンを押してください。<br>
              <small>（漢字・カタカナ・ひらがな・アルファベット　いずれかを全角で）</small>
            </dd>
          </dl>
          <div class="custom-serch_wrapper">
            <input type="text" name="scholarship_keyword" placeholder="キーワードを入力" value="<?php echo esc_attr(get_query_var('scholarship_keyword')); ?>">
            <input type="image" src="<?php echo get_template_directory_uri(); ?>/images/top/icon-search.svg" alt="検索">
          </div>
        </form>
        

        <!-- 検索結果表示エリア -->
        <?php
        // 検索パラメータの取得
        $category = get_query_var('scholarship_category');
        $keyword = get_query_var('scholarship_keyword');

        // 検索が実行された場合のみクエリを実行
        if ($category || $keyword) {
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          
          $args = array(
            'post_type' => 'scholarship',
            'posts_per_page' => 20,
            'paged' => $paged,
            'orderby' => 'title',
            'order' => 'ASC'
          );

          // キーワード検索
          if ($keyword) {
              $args['_meta_or_title'] = $keyword;
              $args['post_type'] = 'scholarship';
              
              // メタクエリの設定
              $args['meta_query'] = array(
                  'relation' => 'OR',
                  array(
                      'key' => 'school_name02',
                      'value' => $keyword,
                      'compare' => 'LIKE'
                  ),
                  array(
                      'key' => 'school_name03',
                      'value' => $keyword,
                      'compare' => 'LIKE'
                  )
              );
          }

          $query = new WP_Query($args);

          if ($query->have_posts()) : ?>
            <div>
              <?php while ($query->have_posts()) : $query->the_post(); ?>
                <article>
                  <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <?php the_excerpt(); ?>
                </article>
              <?php endwhile; ?>
            </div>

            <!-- ページネーション -->
            <?php
            echo paginate_links(array(
              'total' => $query->max_num_pages,
              'current' => $paged,
            ));
            ?>

          <?php else : ?>
            <p>検索条件に一致する奨学資金は見つかりませんでした。</p>
          <?php
          endif;
          wp_reset_postdata();
        }
        ?>
      
      </section>

    </section>
  </main>
  <?php get_footer(); ?>