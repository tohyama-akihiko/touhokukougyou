<?php get_header(); ?>


<main>
  <div class="requirements__header">
    <div class="requirements__header-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/requirements/background-image.jpg" alt="工場内での作業風景が集められた写真コラージュ：機械を操作する作業員や、商品の梱包、フォークリフトでの移動など、工場の製造過程に関わる様々な様子" class="js-rellax">
    </div>
    <div class="page__header">
      <div class="inner">
        <h1 class="page__titlewrap section-title">
          <span class="page__subtitle section__subtitle">●募集要項</span>
          <span class="page__title section__main">Requirements</span>
        </h1>
        <div class="breadcrumb"></div>
      </div>
    </div>

    <section class="merit">
      <div class="inner">
        <div class="merit__header">
          <h2 class="merit__title page__h2">東北工業で「働く」メリット</h2>
        </div>
        <div class="merit__content">
          <ul class="merit__list">
            <li class="merit__item">
              <p class="merit__order">01</p>
              <p class="merit__summary">仕事もプライベートも<span class="line-break">両立できます！</span></p>
              <p class="merit__text">年間のシフトがあらかじめ決まっているため、趣味やレジャーなど、プライベートの予定も立てやすくなっています。</p>
            </li>
            <li class="merit__item">
              <p class="merit__order">02</p>
              <p class="merit__summary">転勤もなし！地域密着の<span class="line-break">安心感。</span></p>
              <p class="merit__text">勤務地は福島県郡山市内で、転勤もありません。営業エリアもほぼ福島県内の地元密着企業です。</p>
            </li>
            <li class="merit__item">
              <p class="merit__order">03</p>
              <p class="merit__summary">ワークライフバランスを<span class="line-break">重視！</span></p>
              <p class="merit__text">定時退社・有給休暇完全消化を奨励しております。女性の産休・育休消化率は100%です。もちろん、復帰率も100%です。</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>

  <section class="requirements">
    <div class="inner">
      <div class="requirements__header">
        <h2 class="requirements__title page__h2">募集要項</h2>
      </div>
      <div class="box-page-a">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/circle05.png" alt="" class="js-rellax" />
      </div>
      <div class="requirements__content">
        <ul class="tab__menu">
          <li class="tab__menu-item js-tab-menu is-active" data-number="tab01">営業<br class="pc-none">（正社員）</li>
          <li class="tab__menu-item js-tab-menu" data-number="tab02">製造<br class="pc-none">（正社員）</li>
          <li class="tab__menu-item js-tab-menu" data-number="tab03">パート</li>
        </ul>
        <ul class="tab__content">
          <li id="tab01" class="tab__content-item js-tab-content is-active">
            <dl class="requirements__list">
              <div class="requirements__item">
                <dt class="requirements__term">業務内容</dt>
                <dd class="requirements__description">・テキストダミーテキストダミーテキストダミー<br>
                  ・テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
              <div class="requirements__item">
                <dt class="requirements__term">応募資格</dt>
                <dd class="requirements__description">テキストダミーテキストダミーテキストダミー<br>
                  テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
              <div class="requirements__item">
                <dt class="requirements__term">試用期間</dt>
                <dd class="requirements__description">テキストダミーテキストダミー</dd>
              </div>
            </dl>
          </li>
          <li id="tab02" class="tab__content-item js-tab-content">
            <dl class="requirements__list">
              <div class="requirements__item">
                <dt class="requirements__term">業務内容</dt>
                <dd class="requirements__description">・テキストダミーテキストダミーテキストダミー<br>
                  ・テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
              <div class="requirements__item">
                <dt class="requirements__term">応募資格</dt>
                <dd class="requirements__description">テキストダミーテキストダミーテキストダミー<br>
                  テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
              <div class="requirements__item">
                <dt class="requirements__term">試用期間</dt>
                <dd class="requirements__description">テキストダミーテキストダミー</dd>
              </div>
            </dl>
          </li>
          <li id="tab03" class="tab__content-item js-tab-content">
            <dl class="requirements__list">
              <div class="requirements__item">
                <dt class="requirements__term">業務内容</dt>
                <dd class="requirements__description">・テキストダミーテキストダミーテキストダミー<br>
                  ・テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
              <div class="requirements__item">
                <dt class="requirements__term">応募資格</dt>
                <dd class="requirements__description">テキストダミーテキストダミーテキストダミー<br>
                  テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
              <div class="requirements__item">
                <dt class="requirements__term">試用期間</dt>
                <dd class="requirements__description">テキストダミーテキストダミー</dd>
              </div>
            </dl>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="occupation">
    <div class="inner">
      <div class="occupation__header">
        <h2 class="occupation__title page__h2">募集職種</h2>
      </div>
      <div class="occupation__content">
        <ul class="occupation__list">
          <!-- 記事のループ処理開始 -->
          <?php
          if (wp_is_mobile()) {
            $num = 2; // スマホの表示数(全件は-1)
          } else {
            $num = 2; // PCの表示数(全件は-1)
          }
          $args = [
            'post_type' => 'job',
            'posts_per_page' => $num,
          ];
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <li class="occupation__item">
                <a href="<?php the_permalink(); ?>">
                  <p class="job__tag navy">
                    <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'occupation');
                    foreach ($taxonomy_terms as $taxonomy_term) {
                      echo '<span class="' . $taxonomy_term->slug . '">' . $taxonomy_term->name . '</span>';
                    }
                    ?>
                  </p>
                  <h3 class="job__title">
                    <?php the_title(); ?>
                  </h3>
                  <p class="job__status red">募集中</p> <!-- カスタムフィールドで行けるでしょうか？ -->
                </a>
              </li>
            <?php endwhile;
          else: ?>
            <p>まだ記事がありません</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          <!-- 記事のループ処理終了 -->
        </ul>

        <div class="occupation__more">
          <div class="button">
            <a href="<?php echo esc_url( home_url( '/job/' ) ); ?>" class="button__link button__link--occupation">募集職種一覧</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="more-touhokukougyo">
    <div class="box-page-b">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/circle03.png" alt="" class="js-rellax" />
    </div>
    <div class="inner">
      <div class="more-touhokukougyo__header">
        <h2 class="more-touhokukougyo__title page__h2">もっと知りたい！東北工業</h2>
      </div>
      <div class="recruit__content">
        <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="recruit__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/requirements/requirements01.png" alt="スタッフQ&A" class="recruit__image">
          <span class="recruit__link">スタッフQ&A</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" class="recruit__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit04.png" alt="応募者の皆さんへ" class="recruit__image">
          <span class="recruit__link">会社概要</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/data/' ) ); ?>" class="recruit__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit03.png" alt="数字で見る東北工業" class="recruit__image">
          <span class="recruit__link">数字で見る東北工業</span>
        </a>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="inner">
      <div class="contact__content">
        <div class="contact__text-wrap">
          <h2 class="contact__title">Contact Us</h2>
          <p class="contact__message">応募前の気になる点のお問い合わせも<span class="line-break">お気軽に</span></p>
          <p class="contact__text">検討段階でもお問い合わせは歓迎いたします。不安なことや分からないことがございましたらお気軽にお問い合わせ下さい。</p>
        </div>
        <div class="button contact__button">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button__link contact-button__link">お問い合わせ</a>
        </div>
      </div>
    </div>
  </section>
  <style>
    .header {
      background: transparent;
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const header = document.querySelector('.header');
      const requirementsSection = document.querySelector('.requirements');

      window.addEventListener('scroll', function() {
        const requirementsSectionTop = requirementsSection.getBoundingClientRect().top;
        const headerHeight = header.offsetHeight;
        console.log(requirementsSectionTop);
        console.log(headerHeight);

        if (requirementsSectionTop <= headerHeight) {
          header.style.background = 'rgba(255, 255, 255, .8)';
        } else {
          header.style.background = 'transparent';
        }
      });
    });
  </script>

</main>


<?php get_footer(); ?>