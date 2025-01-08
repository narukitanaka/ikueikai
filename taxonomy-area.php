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
            <li class="active"><a href="<?php bloginfo('url'); ?>/area/all/">地域別</a></li>
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




          <!-- 地域別のリンクリスト -->
          <?php
            function display_area_terms($area_slug, $area_name) {
              // カテゴリーのIDを取得
              $parent_term_id = get_term_by('slug', $area_slug, 'area')->term_id;

              // 第2階層のカテゴリーの子ターム（第3階層）を取得
              $grandchild_terms = get_terms([
                'taxonomy' => 'area',
                'parent' => $parent_term_id,
                'orderby' => 'name',
                'order' => 'ASC',
              ]);

              // '説明' に基づいて第3階層のタームを並び替える
              usort($grandchild_terms, function($a, $b) {
                return intval($a->description) - intval($b->description);
              });

              // 第3階層のカテゴリーに属する投稿があるかチェック
              $has_posts_in_grandchildren = false;
              foreach ($grandchild_terms as $grandchild_term) {
                if ($grandchild_term->count > 0) {
                    $has_posts_in_grandchildren = true;
                    break; // 内側のループを抜ける
                }
              }

              // 第3階層に投稿がある場合、リストを表示
              if ($has_posts_in_grandchildren) {
                echo '<p class="tiiki-name">' . esc_html($area_name) . '</p>';
                echo '<ul class="cate-area">';
                foreach ($grandchild_terms as $term) {
                    $current_term = is_tax('area', $term->slug);
                    $term_link = get_term_link($term);
                    $active_class = $current_term ? ' class="active"' : '';
                    echo '<li' . $active_class . '><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '<span>( ' . $term->count . ' )</span></a></li>';
                }
                echo '</ul>';
              }
              return $has_posts_in_grandchildren; // 追加：投稿があるかどうかの状態を返す
            }

            // 第1階層のカテゴリーのスラグと表示名
            $prefectures = [
              'osaka-pref' => [
                // 大阪府の第2階層カテゴリーのスラグをここに記述
                'osaka-area', 
                'toyono-tiiki', 
                'mishima', 
                'kitakawachi', 
                'nakakawachi', 
                'minamikawachi', 
                'sakai-senboku', 
                'sennan-tiiki', 
                'zeniki-osaka'
              ],
              'hyogo-pref' => [
                // 兵庫県の第2階層カテゴリーのスラグをここに記述
              ]
              // 必要に応じて他の県も追加...
            ];

            foreach ($prefectures as $pref_slug => $areas) {
              echo '<div class="' . esc_attr($pref_slug) . '">'; // 追加：第1階層のカテゴリーでdivを開始
            
              $has_posts_in_prefecture = false; // 追加：第1階層に投稿があるかどうかのフラグ
              foreach ($areas as $area_slug) {
                $area_term = get_term_by('slug', $area_slug, 'area');
                $area_name = $area_term->name; // カテゴリー名を取得
                // display_area_termsから投稿があるかどうかの状態を取得し、第1階層に投稿があるかをチェック
                if (display_area_terms($area_slug, $area_name)) {
                  $has_posts_in_prefecture = true;
                }
              }
            
              echo '</div>'; // 第1階層のカテゴリーでdivを閉じる
            
              if (!$has_posts_in_prefecture) {
                // 第1階層に投稿がない場合、生成したdivを非表示にする（CSSやJavaScriptで制御する場合）
              }
            }
          ?>





        </div>

        <!-- 投稿リスト -->
        <div class="company-list">
          <ul>
            <?php
              // 現在のタームを取得
              $term_slug = get_query_var('term');
              $taxonomy_name = 'area'; // タクソノミー名を設定
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