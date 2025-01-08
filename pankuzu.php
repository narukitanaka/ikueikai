<div class="common_pankuzu">
    <span><span class="inner"><img src="<?php bloginfo('template_directory'); ?>/images/modules/home.png" alt=""> </span><a href="<?php bloginfo('url'); ?>/">ホーム</a></span>&nbsp; >&nbsp;
    <span class="pankuzu-contents">
        <?php 
            if (is_single() || is_page()) {
              // 投稿がsupporting_companiesに属しているか確認
              if (get_post_type() === 'supporting_companies') {
                  echo '<a href="' . esc_url(get_bloginfo('url') . '/supporting_companies/') . '" class="pankuzu-link">支援企業一覧</a> > ';
              }
              // 個別ページや固定ページのタイトル
              the_title();
            } elseif (is_tax() || is_category() || is_tag()) {
                // タクソノミー（カテゴリー、タグ、その他のタクソノミー）ページのタイトル
                $queried_object = get_queried_object();
                $taxonomy = $queried_object->taxonomy;
                $term_id = $queried_object->term_id;

                // カスタム投稿タイプを取得
                $taxonomy_object = get_taxonomy($taxonomy);
                $post_types = $taxonomy_object->object_type;

                // 'supporting_companies' に属するタクソノミーの場合
                if (in_array('supporting_companies', $post_types)) {
                    echo '<a href="' . esc_url(get_bloginfo('url') . '/supporting_companies/') . '">支援企業一覧</a> > ';
                }

                // 現在のタームのタイトルを表示
                single_term_title();
            } elseif (is_archive()) {
                // アーカイブページのタイトル
                post_type_archive_title();
            } elseif (is_home()) {
                // ホームページのタイトル
                echo 'ブログ';
            }
        ?>
    </span>
</div>