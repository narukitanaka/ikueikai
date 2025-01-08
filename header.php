<!DOCTYPE html>
<html lang="ja" style="margin: 0 !important;">
  <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45054638-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45054638-1');
</script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/fav.png" />
    <!-- <meta name="robots" content="index, follow"> -->
    <meta name="format-detection" content="telephone=no" />
    <!-- css -->
    <!-- Slick CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/scss/style.css" />
    <!-- js -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Kaisei+Decol&display=swap');
    </style>


    <script>
      (function(d) {
        var config = {
          kitId: 'ssq2xec',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>


  <title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>

  </head>

