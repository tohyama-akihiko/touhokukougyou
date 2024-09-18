<?php get_header(); ?>

<main class="single-job__main">
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <article class="single-job">
        <div class="inner">
          <div class="single-job__title-block">
            <h1 class="single-job__title">
              <?php the_title(); ?>
            </h1>
            <div class="single-job__information">
              <p class="job__tag navy">
                <?php
                $taxonomy_terms = get_the_terms($post->ID, 'occupation');
                if ($taxonomy_terms) {
                  echo '<span>' . $taxonomy_terms[0]->name . '</span>';
                }
                ?>
              </p>
              <p class="job__status red">募集中</p> <!-- カスタムフィールドで行けるでしょうか？ -->
            </div>
          </div>
          <div class="single-job__text">
            <?php the_content(); ?>
          </div>

          <div class="single-job__list"> <!-- ボタン以外カスタムフィールドで行けるでしょうか？ -->
            <dl class="requirements__list">
              <div class="requirements__item">
                <dt class="requirements__term">項目</dt>
                <dd class="requirements__description">・テキストダミーテキストダミーテキストダミー<br>
                  ・テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
              <div class="requirements__item">
                <dt class="requirements__term">項目</dt>
                <dd class="requirements__description">・テキストダミーテキストダミーテキストダミー<br>
                ・テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
              <div class="requirements__item">
                <dt class="requirements__term">項目</dt>
                <dd class="requirements__description">・テキストダミーテキストダミーテキストダミー<br>
                ・テキストダミーテキストダミーテキストダミーテキストダミー</dd>
              </div>
            </dl>
            <div class="single-job__apply">
              <div class="button">
                <a href="#" class="button__link button__link--apply">応募する</a>
              </div>
            </div>
          </div>
        </div>
      </article>
  <?php endwhile;
  endif; ?>
</main>

<?php get_footer(); ?>