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


        <!-- 詳細内容 -->
        <div class="post-company-details">

          <p class="txt">※返還の支援内容や要件などは、各企業等で個別に定めています。支援内容等の不明な点は、各企業等へお問い合わせください。</p>

          <div class="company-name">
            <a href="<?php the_field('company-url'); ?>" target="_blank">
              <p class="name"><?php the_title(); ?></p>
              <div class="logo">
                <?php
                  $images = get_field('img-logo');
                  if($images){echo '<img src="'.$images.'">';}
                ?>
              </div>
              <!-- <p class="name"><?php the_title(); ?></p> -->
            </a>
          </div>

          <p class="ttl">① 導入背景・理由</p>
          <p class="text-area">
            <?php echo nl2br(get_field('txtarea01')); ?>
          </p>

          <p class="ttl">② 支援内容</p>
          <p class="text-area">
            <?php echo nl2br(get_field('txtarea02')); ?>
          </p>

          <p class="ttl">③ 企業等について</p>
          <p class="text-area">
            <?php echo nl2br(get_field('txtarea03')); ?>
          </p>

          <p class="ttl">④ お問い合わせ先</p>
          <p class="text-area">
            <?php echo nl2br(get_field('txtarea04')); ?>
          </p>

          <a class="btn" href="<?php bloginfo('url'); ?>/gyou/all/">
            一覧へ戻る
          </a>

        </div>


      </section>


    </section>
  </main>
  <?php get_footer(); ?>