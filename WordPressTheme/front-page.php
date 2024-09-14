<?php get_header(); ?>
<main>
<section class="hero">
  <div class="hero__main">
    <div class="hero__sidebar">
      <div class="hero__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo01.svg" alt="東北工業株式会社ロゴ">
      </div>
      <nav class="hero__nav">
        <div class="box01">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/circle01.png" alt="" class="js-rellax" />
        </div>
        <a href="/company" class="hero__nav-item">会社概要</a>
        <a href="#" class="hero__nav-item">事業案内</a>
        <a href="#" class="hero__nav-item">お知らせ</a>
        <a href="#" class="hero__nav-item">お問い合わせ</a>
      </nav>
      <div class="hero__button">
        <a href="/recruit" class="hero-button__link">採用情報</a>
      </div>
    </div>
    <div class="hero__image-container">
      <div class="slider">
        <div class="slick-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mv.png" alt="東北工業株式会社の建物" class="hero__image">
        </div>
        <div class="slick-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mv.png" alt="東北工業株式会社の建物" class="hero__image">

        </div>
        <div class="slick-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mv.png" alt="東北工業株式会社の建物" class="hero__image">
        </div>
      </div>

      <div class="hero__content">
        <p class="hero__text">梱包資材や包装紙材にとどまらない、<br>“トータルパッケージメーカー”へ</p>
        <div class="hero__bottom-btn button">
          <a href="#" class="button__link">会社概要</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- お知らせ -->
<section class="news">
  <div class="inner">
    <div class="news__header">
      <h2 class="news__titlewrap section-title">
        <span class="news__subtitle section__subtitle">●お知らせ</span>
        <span class="news__title section__main">News</span>
      </h2>
    </div>
    <ul class="news__list">
      <li class="news__item">
        <div class="news__wrap">
          <span class="news__date">2024/07/01</span>
          <a href="#" class="news__tag">お知らせ</a>
        </div>
        <p class="news__post">お知らせタイトルメニューお知らせタイトルメニューお知らせタイトルメニューお知らせタイトルメニューお知らせ</p>
      </li>
    </ul>
    <div class="news__more">
      <div class="button">
        <a href="#" class="button__link">お知らせ一覧</a>
      </div>
    </div>

  </div>
  <div class="box03">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/circle02.png" alt="" class="js-rellax" />
  </div>
</section>

<!-- 事業案内 -->
<section class="business">
  <div class="inner">
    <div class="business__header">
      <h2 class="business__titlewrap section-title"">
        <span class=" business__subtitle section__subtitle"">●事業案内</span>
        <span class="business__title section__main">Business</span>
      </h2>
      <p class="business__description">
        お客様と一緒にパッケージングを中心とした川上から川下までの課題解決に取り組み、トータルなパッケージングソリューションをご提案いたします。
      </p>
    </div>
    <div class="business__content">
      <a href="" class="business__item">
        <div class="business__image-container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business01.png" alt="段ボール事業" class="business__image">
          <div class="business__info">
            <h3 class="business__name">段ボール事業</h3>
            <p class="business__subtext">Cardboard</p>
          </div>
        </div>
      </a>
      <a href="" class="business__item">
        <div class="business__image-container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business02.png" alt="パッケージング受託事業" class="business__image">
          <div class="business__info business__info-right">
            <h3 class="business__name ">パッケージング<br>受託事業</h3>
            <p class="business__subtext">Packaging</p>
          </div>
        </div>
      </a>
    </div>
    <div class="business__more button">
      <a href="#" class="button__link">詳しく見る</a>
    </div>

  </div>
</section>

<!-- 採用情報 -->
<section class="recruit">
  <div class="box02">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/circle01.png" alt="" class="js-rellax" />
  </div>
  <div class="inner">
    <div class="recruit__header">
      <h2 class="recruit__titlewrap section-title">
        <span class="recruit__csubtitle section__subtitle">●採用情報</span>
        <span class="recruit__subtitle section__main">Recruit</span>
      </h2>
      <p class="recruit__description">
        段ボールで「見える場」、「働く場」から「作る場」、「販売場」へ。<br>
        段ボールを通してあなたのライフスタイルを変えてみませんか？
      </p>
    </div>
    <div class="recruit__content">
      <a href="" class="recruit__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit01.png" alt="応募者の皆さんへ" class="recruit__image">
        <span class="recruit__link">応募者の皆さんへ</span>
      </a>
      <a href="" class="recruit__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit02.png" alt="スタッフQ&A" class="recruit__image">
        <span class="recruit__link">スタッフQ&A</span>
      </a>
      <a href="" class="recruit__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit03.png" alt="数字で見る東北工業" class="recruit__image">
        <span class="recruit__link">数字で見る東北工業</span>
      </a>
    </div>

  </div>
</section>
<style>
.header{
  opacity: 0;
}

</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    const newsSection = document.querySelector('.news');

    window.addEventListener('scroll', function() {
      const newsSectionTop = newsSection.getBoundingClientRect().top;
      const headerHeight = header.offsetHeight;

      if (newsSectionTop <= headerHeight) {
        header.style.opacity = '1';
      } else {
        header.style.opacity = '0';
      }
    });
  });
</script>
</main>
<?php get_footer(); ?>