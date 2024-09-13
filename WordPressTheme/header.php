<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <div class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo02.svg" alt="東北工業株式会社ロゴ">
      </div>
      <nav class="header__nav">
        <a href="/company" class="header__nav-item">会社概要</a>
        <a href="#" class="header__nav-item">事業案内</a>
        <a href="#" class="header__nav-item">お知らせ</a>
        <a href="#" class="header__nav-item">お問い合わせ</a>
        <div class="header__button">
          <a href="/recruit"" class="header__button-link">採用情報</a>
        </div>
      </nav>
    </div>
    <section class="sp-menu top-sp-menu">
      <div class="sp-menu-icon js-menu hamburger" id="MenuButton">
        <div class="sp-menu-icon__bars">
          <div class="sp-menu-icon__bar1"></div>
          <div class="sp-menu-icon__bar2"></div>
          <div class="sp-menu-icon__bar3"></div>
        </div>
      </div>

      <div class="sp-menu-content">
        <div class="sp-menu-content__inner">
          <nav>
            <div class="sp-menu-content__item">
              <a class="sp-menu-content__link" href="/">HOME</a>
            </div>
            <div class="sp-menu-content__item">
              <a class="sp-menu-content__link " href="/company">会社概要</a>
            </div>
            <div class="sp-menu-content__item">
              <a class="sp-menu-content__link " href="//sim">格安携帯SIM</a>
            </div>
            <div class="sp-menu-content__item">
              <a class="sp-menu-content__link " href="/x-wimax">エックスWiMAX</a>
            </div>
            <div class="sp-menu-content__item">
              <a class="sp-menu-content__link" href="/horie-wifi">ホリエのWiFi</a>
            </div>
            <div class="sp-menu-content__item">
              <a class="sp-menu-content__link" href="" target="_blank">スマートWiFi</a>
            </div>
            <div class="sp-menu-content__item">
              <a class="sp-menu-content__link" href="https://support.xmobile.ne.jp/hc/ja" target="_blank">Q&A</a>
            </div>
            <div class="sp-menu-content__item"><a class="sp-menu-content__link" href="/x-repair">修理</a></div>
            <div class="sp-menu-content__item">
              <a class="sp-menu-content__link" href="/shop">SHOP</a>
            </div>
          </nav>
        </div>
      </div>

      <div class="sp-menu-background"></div>
    </section>

  </header>