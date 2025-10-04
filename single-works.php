<?php get_header(); ?>

<<<<<<< HEAD
<main id="main" class="portfolio-detail" tabindex="-1">
  <!-- ここから記事本体 -->
  <article class="portfolio-detail__article" itemscope itemtype="https://schema.org/CreativeWork">

    <section class="portfolio-detail__header" aria-labelledby="work-title">
      <h1 class="portfolio-detail__title" id="work-title" itemprop="name"><?php the_title(); ?></h1>

      <?php if ($skills = get_field('work_skills')): ?>
        <ul class="portfolio__tags" aria-label="使用スキル">
          <?php foreach ($skills as $skill): ?>
            <li itemprop="keywords"><?php echo esc_html($skill); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </section>

    <section class="portfolio-detail__content" aria-labelledby="overview-title">
      <?php if (has_post_thumbnail()):
        $thumb_id  = get_post_thumbnail_id();
        $thumb_alt = trim(get_post_meta($thumb_id, '_wp_attachment_image_alt', true)) ?: get_the_title().' のメインビジュアル';
        echo wp_get_attachment_image($thumb_id, 'large', false, [
          'class' => 'portfolio-detail__image',
          'alt'   => esc_attr($thumb_alt),
          'itemprop' => 'image'
        ]);
      endif; ?>

      <h2 class="page__title" id="overview-title">🛠️制作概要</h2>

      <div class="portfolio-detail__text" itemprop="description">
        <?php the_content(); ?>
      </div>

      <div class="mockup-images" aria-label="デバイス別モックアップ">
        <?php
        $tablet_img     = get_field('mockup_tablet');
        $smartphone_img = get_field('mockup_smartphone');

        if ($tablet_img) {
          $tablet_alt = $tablet_img['alt'] !== '' ? $tablet_img['alt'] : 'タブレット表示のモックアップ';
          echo '<img src="'.esc_url($tablet_img['url']).'" alt="'.esc_attr($tablet_alt).'" loading="lazy">';
        }
        if ($smartphone_img) {
          $sp_alt = $smartphone_img['alt'] !== '' ? $smartphone_img['alt'] : 'スマートフォン表示のモックアップ';
          echo '<img src="'.esc_url($smartphone_img['url']).'" alt="'.esc_attr($sp_alt).'" loading="lazy">';
        }
        ?>
      </div>

      <div class="portfolio-detail__info" aria-label="制作情報">
        <dl>
          <div class="portfolio-detail__row">
            <dt>対応範囲</dt>
            <dd itemprop="about"><?php the_field('work_scope'); ?></dd>
          </div>
          <div class="portfolio-detail__row">
            <dt>制作期間</dt>
            <dd itemprop="timeRequired"><?php the_field('work_period'); ?></dd>
          </div>
          <div class="portfolio-detail__row">
            <dt>金額</dt>
            <dd><?php the_field('work_price'); ?></dd>
          </div>
          <div class="portfolio-detail__row">
            <dt>URL</dt>
            <dd>
              <?php if ($url = get_field('work_url')): ?>
                <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer"
                   aria-label="制作サイトを新しいタブで開く" itemprop="url">
                  <?php echo esc_html($url); ?>
                </a>
              <?php endif; ?>
            </dd>
          </div>
        </dl>
      </div>
    </section>

  </article>
  <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn">制作実績一覧に戻る</a>
  <section class="contact fadein" id="contact" role="region" aria-labelledby="contact-heading">
        <div class="section-inner">
            <h2 class="section-title" id="contact-heading">
                <span class="ja">お問い合わせ</span>
                <span class="divider"></span>
                <span class="en">Contact</span>
            </h2>
            <p class="contact__text">御社の要件に合わせて最適なサイトを制作します。まずはお気軽にご相談ください。</p>

            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="contact__btn"
               aria-label="お問い合わせフォームへ移動">
                <span class="contact__btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true" focusable="false">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </span>
                お問い合わせフォーム
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
=======
<main class="portfolio-detail">
    <section class="portfolio-detail__header">
        <h1 class="portfolio-detail__title"><?php the_title(); ?></h1>
        <?php
        $skills = get_field('work_skills');
        if ($skills):
        ?>
            <ul class="portfolio__tags">
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo esc_html($skill); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="portfolio-detail__content">
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large', ['class' => 'portfolio-detail__image']); ?>
        <?php endif; ?>

        <h1 class="page__title">🛠️制作概要</h1>
        <div class="portfolio-detail__text">
            <?php the_content(); ?>
        </div>
        <div class="mockup-images">
            <img src="<?php echo esc_url(get_theme_file_uri('img/tablet-maripro.png')); ?>" alt="タブレット表示例">
            <img src="<?php echo esc_url(get_theme_file_uri('img/smartfone-maripro.png')); ?>" alt="スマホ表示例">
        </div>
        <div class="portfolio-detail__info">
            <dl>
                <div class="portfolio-detail__row">
                    <dt>対応範囲</dt>
                    <dd><?php the_field('work_scope'); ?></dd>
                </div>
                <div class="portfolio-detail__row">
                    <dt>制作期間</dt>
                    <dd><?php the_field('work_period'); ?></dd>
                </div>
                <div class="portfolio-detail__row">
                    <dt>URL</dt>
                    <dd>
                        <a href="<?php the_field('work_url'); ?>" target="_blank" rel="noopener noreferrer">
                            <?php the_field('work_url'); ?>
                        </a>
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn">制作実績一覧に戻る</a>
</main>

<?php get_footer(); ?>
>>>>>>> 7a5becf (はじめてのアップ)
