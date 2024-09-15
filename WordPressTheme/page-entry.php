<?php get_header(); ?>
<section class="page__header">
  <div class="inner">
    <h1 class="page__titlewrap section-title">
      <span class="page__subtitle section__subtitle">●エントリーフォーム</span>
      <span class="page__title section__main">Entry</span>

    </h1>
    <div class="breadcrumb"></div>

  </div>
</section>

<section class="entry__contents">
  <div class="inner">
    <p class="entry__header-text">
      エントリーにつきましては、弊社プライバシーポリシーをご確認いただき、必要事項をご入力後、個人情報の取り扱いに同意のうえ送信してください。
      トラブル等により送信できない場合は、お手数ですが時間をおいて再度送信いただくか、お電話にてお問い合わせください。
    </p>
    <?php echo do_shortcode('[contact-form-7 id="c16f526" title="entry"]'); ?>

  </div>
</section>
<?php get_footer(); ?>