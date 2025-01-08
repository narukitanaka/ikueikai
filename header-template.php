<header class="header">
      <div class="header--content">
        <div class="header--inner">

          <div class="header--logo">

            <h1 class="logo">
              <a href="<?php bloginfo('url'); ?>/">
                <img src="<?php bloginfo('template_directory'); ?>/images/top/logo.png" alt="" />
              </a>
            </h1>
          </div>

          
          <div id="gnav">
            <nav class="global_menu">
              <ul class="global_wrapper">
                <li class="menu">
                  <a href="<?php bloginfo('url'); ?>/" class="wrap-links">ホーム</a>
                </li>
                <li class="menu">
                  <a href="<?php bloginfo('url'); ?>/about" class="wrap-links">大阪府育英会について</a>
                  <ul class="child_menu">

                    <div class="d-title">
                      <p>大阪府育英会について</p>
                    </div>

                   <div class="d-list">

              
                    <!-- <div class="main-list">
                      <li><a href=""> ご挨拶</a></li>
                      <li> <a href=""> 設立趣旨</a></li>
                       <li><a href=""> 役員・評議員名簿</a></li>
                      <li> <a href="">所在地・交通アクセス</a></li>
                      <li><a href=""> 組織図</a></li>
                     <li>  <a href="">連絡先・相談窓口</a></li>
                     <li> <a href=""> 情報公開</a></li>
                    </div> -->
                    <?php wp_nav_menu( array('menu' => '大阪府育英会について' )); ?>

                   </div>

                  </ul>
                </li>
    
                <li class="menu">
                  <a href="<?php bloginfo('url'); ?>/overview" class="wrap-links">奨学金について</a>
                  <ul class="child_menu">

                    <div class="d-title">
                      <p>奨学金について</p>
                    </div>
                   <div class="d-list">

                  
                    <!-- <div class="main-list"> -->
                      <!-- <li><a href="">奨学金貸付の概要</a></li>
                  <li><a href="">奨学金の貸付を受けたい方へ</a></li>
                  <li> <a href="">奨学金の貸付を受けている方へ</a></li>
                  <li><a href="">奨学金の返還について</a></li>
                  <li><a href="">夢みらい奨学金</a></li>
                  <li><a href="">UFJ奨学金</a></li>
                  <li><a href="">特別奨励金</a></li>
                  <li><a href="">よくあるお問い合わせ<貸付関係></a></li> -->
                  <?php wp_nav_menu( array('menu' => '奨学金について' )); ?>

                    <!-- </div> -->

                   </div>
                  </ul>
                </li>
                <li class="menu">
                  <a href="<?php bloginfo('url'); ?>/donation" class="wrap-links">寄附のお願い</a>
                  <ul class="child_menu">

                    <div class="d-title">
                      <p>寄附について</p>
                    </div>
                   <div class="d-list">

<!--                    
                    <div class="main-list">
                      <li><a href="">｢夢みらい奨学金｣について</a></li>
                      <li><a href="">寄付金募集</a></li>
                      <li><a href="">奨学生の声</a></li>
                      <li><a href="">ご寄附のお申し込み方法</a></li>
                      <li><a href="">寄附金の税軽減措置について</a></li>
                      <li><a href="">ご寄附いただいた方のご紹介</a></li>
                      <li><a href="">ご寄附くださった方には</a></li>
                      <li><a href="">街頭募金について</a></li>
                    </div> -->
                    <?php wp_nav_menu( array('menu' => '寄附のお願い' )); ?>

                   </div>
                  </ul>
                </li>
                <li class="menu">
                  <a href="<?php bloginfo('url'); ?>/blogs" class="wrap-links">お知らせ</a>
                  <ul class="child_menu">

                    <div class="d-title">
                      <p>お知らせについて</p>
                    </div>
                   <div class="d-list">

<!--                   
                    <div class="main-list">
                        <li><a href="#">お知らせ一覧</a></li>
                        <li><a href="#">学校担当者の方へ</a></li>
                        <li><a href="#">令和４年度予約奨学生の募集について</a></li>
                        <li><a href="#">大阪マラソンチャリティランナー募集中！</a></li>
                     
                    </div> -->
                  <?php wp_nav_menu( array('menu' => 'お知らせ' )); ?>


                   </div>
                  </ul>
                </li>
                <li class="menu">
                  <a href="<?php bloginfo('url'); ?>/style" class="wrap-links">各種手続き</a>
                  <ul class="child_menu">

                    <div class="d-title">
                      <p>各種手続きについて</p>
                    </div>
                   <div class="d-list">

                 
                    <!-- <div class="main-list">
                      <li><a href="#">Web講座振替受付サービスのご案内</a></li>
                      <li><a href="#">各種願・届様式</a></li>
                      
                    </div> -->
                  <?php wp_nav_menu( array('menu' => '各種手続き' )); ?>


                   </div>
                  </ul>
                </li>
                <li class="menu"><a href="<?php bloginfo('url'); ?>/saiyo/" class="wrap-links">採用情報</a></li>

                
                <li>
                

                    <?php get_search_form(); ?>
                 
                    </li>
              </ul>
            </nav>
          </div>


          <nav class="global-nav js-toggle-sp-menu-target">
            <ul class="nav-list">

                <dl id="acMenu">

                <a href="<?php bloginfo('url'); ?>/" class=""><dt class="home">ホーム</dt></a>

                  <dt class="nav-list-item">大阪府育英会について <span class="sp_menu_accordion_plus">+</span></dt> 

                  <dd>
                    <div class="sp-d-list">              
                      <!-- <div class="main-list">
                        <li><a href="./about"> ご挨拶</a></li>
                        <li> <a href="./about"> 設立趣旨</a></li>
                         <li><a href="./about"> 役員・評議員名簿</a></li>
                        <li> <a href="./about">所在地・交通アクセス</a></li>
                        <li><a href="./about"> 組織図</a></li>
                       <li>  <a href="./about">連絡先・相談窓口</a></li>
                       <li> <a href="./about"> 情報公開</a></li>

                      </div> -->
                    <?php wp_nav_menu( array('menu' => '大阪府育英会について' )); ?>

  
                     </div>
                  </dd>

                  <dt class="nav-list-item">奨学金について <span class="sp_menu_accordion_plus">+</span></dt> 

                      <dd>
                        <div class="sp-d-list">


                          <!-- <div class="main-list">
                            <li><a href="">奨学金の概要</a></li>
                        <li><a href="">奨学金の貸付を受けたい方へ</a></li>
                        <li> <a href="">奨学金の貸付を受けている方へ</a></li>
                        <li><a href="">奨学金の返還について</a></li>
                        <li><a href="">夢みらい奨学金</a></li>
                        <li><a href="">UFJ奨学金</a></li>
                        <li><a href="">特別奨励金</a></li>
                          </div> -->
                          <?php wp_nav_menu( array('menu' => '奨学金について' )); ?>

                        </div>
                      </dd>
                  <dt class="nav-list-item">寄附のお願い <span class="sp_menu_accordion_plus">+</span></dt> 

                  <dd>
                    <div class="sp-d-list">
                      <!-- <div class="main-list">
                        <li><a href="">｢夢みらい奨学金｣について</a></li>
                        <li><a href="">寄付金募集</a></li>
                        <li><a href="">奨学生の声</a></li>
                        <li><a href="">ご寄附のお申し込み方法</a></li>
                        <li><a href="">寄附金の税軽減措置について</a></li>
                        <li><a href="">ご寄附いただいた方のご紹介</a></li>
                        <li><a href="">ご寄附くださった方には</a></li>
                        <li><a href="">街頭募金について</a></li>
                      </div> -->
                      <?php wp_nav_menu( array('menu' => '寄附のお願い' )); ?>
  
                     </div>
                  </dd>

                

                  <dt class="nav-list-item">お知らせ <span class="sp_menu_accordion_plus">+</span></dt> 
                  <dd>
                    <div class="sp-d-list">

                  
                      <!-- <div class="main-list">
                          <li><a href="#">お知らせ一覧</a></li>
                          <li><a href="#">学校担当者の方へ</a></li>
                          <li><a href="#">令和４年度予約奨学生の募集について</a></li>
                          <li><a href="#">大阪マラソンチャリティランナー募集中！</a></li>
                       
                      </div> -->
                      <?php wp_nav_menu( array('menu' => 'お知らせ' )); ?>
  
                     </div>
                  </dd>

                  <dt class="nav-list-item">各種手続き <span class="sp_menu_accordion_plus">+</span></dt> 
                  <dd>
                    <div class="sp-d-list">
                      <!-- <div class="main-list">
                        <li><a href="#">Web講座振替受付サービスのご案内</a></li>
                        <li><a href="#">各種願・届様式</a></li>
                        
                      </div> -->
                      <?php wp_nav_menu( array('menu' => '各種手続き' )); ?>
  
                     </div>
                  </dd>
                  <a href="<?php bloginfo('url'); ?>/saiyo" class=""><dt class="">採用情報</dt></a>

              </dl>
                  <!-- </li>
                <li class="nav-list__inner">
                <a  class="nav-list-item">寄付のお願い</a>
                </li>
                <li class="nav-list__inner">
                  <a  class="nav-list-item">奨学金について</a>
                  </li>
                <li class="nav-list__inner">
                <a  class="nav-list-item">お知らせ</a>
                </li>
               
                <li class="nav-list__inner">
                <a  class="nav-list-item">各種手続き</a>
                </li> -->
            
            </ul>
          </nav>
  
          <!-- /#ハンバーがーメニュー -->
  
          <div class="sp_header_menu_search">
            <section id="SpSearchBtn" class="">
              
              <div class="sp_search">

                  <div class="sp_search_wrapper js-search-btn">
                    <img src="<?php bloginfo('template_directory'); ?>/images/top/search_logo.png" alt="">
                  </div>
                  <p class="sp_search_text">検索</p>

            <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">

                <div class="sp_search_blocks">
                  <div class="sp_group">
             
                    <div class="sp_search_bar">
                       <i class="fas fa-search sp_search_icon"></i>
                       <input id="text3" type="text" name="s" placeholder="キーワードを入力">
                       <!-- <input id="text2" type="text" name="s" placeholder="キーワードを入力"> -->

                    </div>
                 </div>

                </div>
        </form>
</div>

            </section>
  
            <div id="hamburgerMenu" class="menu-trigger js-toggle-sp-menu">
              <!-- <span class="menu-trigger__sp"></span>
              <span class="menu-trigger__sp"></span>
              <span class="menu-trigger__sp"></span> -->
             <div class="sp_text_menu_trigger"> <span class="menu-text">MENU</span><span class="cross">✖︎</span></div>
            </div>
       </div>
          <!-- /#ハンバーがーメニュー -->






        </div>
      </div>
    </header>