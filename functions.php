<?php
// 固定ページ画像パス
function replaceImagePath($arg) {
    $content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
    $content = str_replace(',images/', ',' . get_bloginfo('template_directory') . '/images/', $content); // ミスがあったため修正
    return $content;
}
add_action('the_content', 'replaceImagePath');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
add_theme_support('post-thumbnails');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blogs'; //任意のスラッグ名
  }
  return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_style_formats' );
function custom_tiny_mce_style_formats( $settings ) {
  $style_formats = array(
    array(
      'title' => 'Format 01',
      'block' => 'div',
      'classes' => 'format01',
      'wrapper' => true,
    ),
    array(
      'title' => 'Format 02',
      'inline' => 'span',
      'classes' => 'format02',
      'wrapper' => true,
    ),
  );
  $settings[ 'style_formats' ] = json_encode( $style_formats );
  return $settings;
}

add_filter( 'mce_buttons', 'add_original_styles_button' );
function add_original_styles_button( $buttons ) {
  array_splice( $buttons, 1, 0, 'styleselect' );
  return $buttons;
}



function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'main-menu' => 'Main Menu',
    'footer-menu'  => 'Footer Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );



//functions.php
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Global Menu',
    'id' => 'global-menu',
    'before_widget' => '<div id="%1$s" class="wp-main-list">',
    'after_widget' => '</div>',
    'before_title' => '<a class="wp-wrap-links">',
    'after_title'  => '</a>',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );




function remove_menu_id( $id ){
	return $id = array();
}
add_filter('nav_menu_item_id', 'remove_menu_id', 10);
function remove_menu_class( $classes ){ 
  return $classes = array();
}
add_filter('nav_menu_css_class', 'remove_menu_class', 10, 2);
function remove_menu_aria_current( $atts, $item, $args ){
	unset ( $atts['aria-current'] );
	return $atts;
}
add_filter('nav_menu_link_attributes', 'remove_menu_aria_current', 11, 5);
// define( 'FS_METHOD', 'direct' );

// function set_fs_method($args) {
// 	return 'direct';
// }
// add_filter('filesystem_method','set_fs_method');

// function set_fs_method($args) {
  // function set_fs_method($args) { return 'direct';}add_filter('filesystem_method','set_fs_method');

// functions.php

// function globalMenuCustomWidget() {
//   // ウィジェットを登録
//     register_sidebar(array(
//       'id' => '111',
//       'name' => 'global-menu',
//     ));
//   }
//   add_action( 'widgets_init', 'globalMenuCustomWidget' );



// add_action( 'pre_get_posts', 'my_pre_get_posts' );
// function my_pre_get_posts($query) {
//     // 管理画面、メインクエリー以外には設定しない
//     if ( is_admin() || ! $query->is_main_query() ){
//         return;
//     }

//     //トップページの場合
//     if ( $query->is_front_page() ||  is_home() ) {
//         $query->set( 'posts_per_page', 3 );
//         return;
//     }
// }


////////////////////////////////////////////////////////////
//カスタム投稿（支援企業一覧）
///////////////////////////////////////////////////////////
function create_posttype() {
  register_post_type( 'supporting_companies',
      array(
          'labels' => array(
              'name' => __( '支援企業一覧' ),
              'singular_name' => __( '支援企業' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'supporting_companies'),
      )
  );
}
add_action( 'init', 'create_posttype' );

// タクソノミー
function create_company_taxonomies() {
  // エリア名のカテゴリー
  register_taxonomy(
      'area',
      'supporting_companies',
      array(
          'label' => __( 'エリア名' ),
          'rewrite' => array( 'slug' => 'area' ),
          'hierarchical' => true,
      )
  );

  // 業種名のカテゴリー
  register_taxonomy(
      'industry',
      'supporting_companies',
      array(
          'label' => __( '業種名' ),
          'rewrite' => array( 'slug' => 'industry' ),
          'hierarchical' => true,
      )
  );

  // 五十音のカテゴリー
  register_taxonomy(
    'gyou',
    'supporting_companies',
    array(
        'label' => __( '五十音' ),
        'rewrite' => array( 'slug' => 'gyou' ),
        'hierarchical' => true,
    )
);
}
add_action( 'init', 'create_company_taxonomies', 0 );



function my_custom_admin_scripts() {
  global $pagenow, $typenow;
  if ($pagenow == 'post.php' || $pagenow == 'post-new.php') {
      if ($typenow == 'supporting_companies') {  // カスタム投稿タイプを指定する場合は、'post'をカスタム投稿タイプのスラッグに変更してください
          wp_enqueue_script('my_custom_script', get_template_directory_uri() . '/js/my_custom_script.js', array('jquery'), '1.0', true);
      }
  }
}
add_action('admin_enqueue_scripts', 'my_custom_admin_scripts');


// 入学時増額奨学資金用カスタム投稿タイプを登録
function create_scholarship_post_type() {
    register_post_type('scholarship', array(
        'labels' => array(
            'name' => '入学時増額奨学資金の貸付限度額',
            'singular_name' => '入学時増額奨学資金の貸付限度額',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'scholarship-archive',  // ここでURLを変更
        ),
    ));

    // 入学時増額奨学資金のカテゴリーを追加
    register_taxonomy(
        'scholarship-cat',
        'scholarship',
        array(
            'labels' => array(
                'name' => 'カテゴリー',
                'add_new_item' => '新規カテゴリーを追加',
            ),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_scholarship_post_type');

function enqueue_scholarship_scripts() {
    if (is_post_type_archive('scholarship')) {
        wp_enqueue_script('scholarship-scripts', get_template_directory_uri() . '/js/scholarship-scripts.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_scholarship_scripts');

function add_scholarship_query_vars($vars) {
    $vars[] = 'scholarship_category';
    $vars[] = 'scholarship_keyword';
    return $vars;
}
add_filter('query_vars', 'add_scholarship_query_vars');

// タイトル検索とメタ検索を組み合わせる
function custom_scholarship_search($where, $query) {
    global $wpdb;
    
    $search_term = $query->get('_meta_or_title');
    $category = get_query_var('scholarship_category');  // カテゴリーの取得

    if ($search_term && $query->get('post_type') === 'scholarship') {
        $search = '%' . $wpdb->esc_like($search_term) . '%';
        
        // カテゴリーの条件を構築
        $category_condition = '';
        if ($category) {
            $term_relationships = $wpdb->term_relationships;
            $term_taxonomy = $wpdb->term_taxonomy;
            $category_condition = $wpdb->prepare(
                "AND {$wpdb->posts}.ID IN (
                    SELECT object_id 
                    FROM {$term_relationships} 
                    INNER JOIN {$term_taxonomy} ON {$term_relationships}.term_taxonomy_id = {$term_taxonomy}.term_taxonomy_id 
                    WHERE {$term_taxonomy}.term_id = %d
                )",
                $category
            );
        }

        $where = $wpdb->prepare(
            "AND (
                ({$wpdb->posts}.post_type = 'scholarship' AND {$wpdb->posts}.post_title LIKE %s)
                OR 
                ({$wpdb->posts}.ID IN (
                    SELECT post_id FROM {$wpdb->postmeta} 
                    WHERE (meta_key = 'school_name02' AND meta_value LIKE %s)
                    OR (meta_key = 'school_name03' AND meta_value LIKE %s)
                ))
            ) {$category_condition}",  // カテゴリー条件を追加
            $search,
            $search,
            $search
        );
    }
    
    return $where;
}
add_filter('posts_where', 'custom_scholarship_search', 10, 2);


// 管理画面内でカテゴリーの絞り込みをできるように設定
function my_custom_column($columns) {
  $columns['scholarship-cat'] = 'カテゴリ';
  return $columns;
}
add_filter('manage_scholarship_posts_columns', 'my_custom_column');

function my_custom_column_id($column_name, $id) {
  $terms = get_the_terms($id, $column_name);
  if($terms && !is_wp_error($terms)) {
    $menu_terms = array(); //変数名は任意
    foreach($terms as $term) {
      $menu_terms[] = $term->name;
    }
    echo join( ", ", $menu_terms);
  }
}
add_action('manage_scholarship_posts_custom_column', 'my_custom_column_id', 10, 2);

function my_add_filter(){
    global $post_type;
    if ('scholarship' == $post_type) {
      ?>
      <select name="scholarship-cat">
        <option value="">すべてのカテゴリー</option>
        <?php
          $terms = get_terms('scholarship-cat');
          foreach ($terms as $term) {
        ?>
        <option value="<?php echo $term->slug; ?>"<?php if (isset($_GET['scholarship-cat']) && $_GET['scholarship-cat'] == $term->slug) {
          print 'selected';
          } ?>><?php echo $term->name; ?>
        </option>
        <?php
        }
        ?>
      </select>
      <?php
    }
}
add_action('restrict_manage_posts', 'my_add_filter');