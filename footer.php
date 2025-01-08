<footer id="footer">
<div class="footer_wrap">
  <div class="base_width">

   <section class="list-container">
      <div class="lists">
        <div class="list-title"><h6>大阪育英会について</h6></div>
        <!-- <ul class="list_wrap"> -->
         <!-- <li><a href=""> ご挨拶</a></li>
        <li> <a href=""> 設立趣旨</a></li>
         <li><a href=""> 役員・評議員名簿</a></li>
        <li> <a href="">所在地・交通アクセス</a></li>
        <li><a href=""> 組織図</a></li>
       <li>  <a href="">連絡先・相談窓口</a></li>
       <li> <a href=""> 情報公開</a></li> -->
       <?php wp_nav_menu( array('menu' => '大阪府育英会について' )); ?>

        <!-- </ul> -->
      </div>
      <div class="lists">
        <div class="list-title"><h6>奨学金について</h6></div>
        <!-- <ul class="list_wrap">
          <li><a href="">奨学金の概要</a></li>
          <li><a href="">奨学金の貸付を受けたい方へ</a></li>
           <li> <a href="">奨学金の貸付を受けている方へ</a></li>
          <li><a href="">奨学金の返還について</a></li>
          <li><a href="">夢みらい奨学金</a></li>
          <li><a href="">UFJ奨学金</a></li>
          <li><a href="">特別奨励金</a></li>
        </ul> -->
        <?php wp_nav_menu( array('menu' => '奨学金について' )); ?>

      </div>
      <div class="lists">
        <div class="list-title"><h6>寄附のお願い</h6></div>
        <!-- <ul class="list_wrap">
          <li><a href="">｢夢みらい奨学金｣について</a></li>
          <li><a href="">寄付金募集</a></li>
          <li><a href="">奨学生の声</a></li>
          <li><a href="">ご寄附のお申し込み方法</a></li>
          <li><a href="">寄附金の税軽減措置について</a></li>
          <li><a href="">ご寄附いただいた方のご紹介</a></li>
          <li><a href="">ご寄附くださった方には</a></li>
          <li><a href="">街頭募金について</a></li>
        </ul> -->
        <?php wp_nav_menu( array('menu' => '寄附のお願い' )); ?>

      </div>
      <div class="lists">
        <div class="list-title"><h6>お知らせ</h6></div>
        <ul class="list_wrap">
          <!-- <li><a href="">お知らせ一覧</a></li>
          <li>
            <a href="">学校担当者の方へ</a>
          </li>
          <li><a href="">令和４年度予約奨学生の募集について</a></li>
          <li><a href="">大阪マラソンチャリティランナー募集中！</a></li>
   -->
   <?php wp_nav_menu( array('menu' => 'お知らせ' )); ?>

          <div class="last-items">

        <div class="list-title"><h6>各種手続き</h6></div>

        <!-- <ul class="list_wrap">
          <li><a href="">Web講座振替受付サービスのご案内</a></li>
          <li><a href="">各種願・届様式</a></li>
  
  </ul> -->
  <?php wp_nav_menu( array('menu' => '各種手続き' )); ?>

          </div>
        </ul>
      </div>
   </section>

<section class="footer_under">
<!-- <div class="inner"><img src="<?php bloginfo('template_directory'); ?>/images/top/footer_logo.png" alt=""></div> -->
<div class="inner"><img src="<?php bloginfo('template_directory'); ?>/images/top/footer_logo_02.png" alt=""></div>
</section>

<section class="another">
<div class="address">
  〒534-0026<br><br>
大阪市都島区網島町6番20号　大阪私学会館２階

<div class="attention">
  <p>月曜日～金曜日（土日祝日、年末年始を除く）　9：00～17：30<br>
    ※返還相談コーナーについては以下の時間となります。（年末年始を除く）<br>
    月曜日～金曜日　9：00～19：00<br>
    土・祝日　　9：00～17：00</p>
</div>

<div class="sp_attention">
<p> 月曜日～金曜日（土日祝日、年末年始を除く）<br>9：00～17：30</p>
<p>    ※返還相談コーナーについては以下の時間となります。（年末年始を除く)</p>
<p>    月曜日～金曜日　9：00～19：00</p>
<p>    土・祝日　　9：00～17：00</p>
</div>

</div>
<div class="wrapper">
<ul>
<a href="<?php bloginfo('url'); ?>/personal/">  <li>個人情報保護</li></a>
<a href="<?php bloginfo('url'); ?>/contact/">  <li>お問合せ</li></a>
<a href="<?php bloginfo('url'); ?>/relation/">  <li>関係機関</li></a>
</ul>
</div>
</section>


</div>
<div class="copy">
  <p>Copyright (c) Oosakafu Ikueikai. All Rights Reserved.</p>
</div>
</div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mv.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/tab-script.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/accoridon.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/myscript.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/arcive-company-script.js"></script>

  <!-- kv スリックスライダー -->
<script>
  var $slide = $(".slide")
  .slick({
    fade: true,    // fedeオン
    speed: 2000,   // 画像切り替えにかかる時間（ミリ秒）
    autoplaySpeed: 4000,   // 自動スライド切り替え速度
    arrows: false,         // 矢印表示・非表示
    autoplay: true,        // 自動再生
    slidesToShow: 1,       // スライド表示数
    slidesToScroll: 1,     // スライドする数
    infinite: true         // 無限リピート オン・オフ
  });
</script>

<script>
    // https://github.com/protonet/jquery.inview /で対応
    $(".scroll").on("inview", function () {
      // .sxrollが表示されたら
      $(this).addClass("active"); //処理を記述
    });
</script>

  <?php if(is_page('anketo')||is_page('anketoweb') ): ?>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://www.fu-ikuei.or.jp/anketo/thanks'; /* 遷移先のURL */
}, false );
</script>
<?php endif; ?>

	<?php wp_footer(); ?>
</body>
</html>
