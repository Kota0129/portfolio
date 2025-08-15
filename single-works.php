<?php get_header(); ?>

<main id="main" class="portfolio-detail" role="main" tabindex="-1">
    <section class="portfolio-detail__header" role="region" aria-labelledby="work-title">
        <h1 class="portfolio-detail__title" id="work-title"><?php the_title(); ?></h1>

        <?php
        $skills = get_field('work_skills');
        if ($skills):
        ?>
            <ul class="portfolio__tags" aria-label="使用スキル">
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo esc_html($skill); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="portfolio-detail__content" role="region" aria-labelledby="overview-title">
        <?php if (has_post_thumbnail()): ?>
            <?php
            // アイキャッチの代替テキストを安全に補完
            $thumb_id = get_post_thumbnail_id();
            $thumb_alt = trim(get_post_meta($thumb_id, '_wp_attachment_image_alt', true));
            if ($thumb_alt === '') {
                $thumb_alt = get_the_title() . ' のメインビジュアル';
            }
            echo wp_get_attachment_image(
                $thumb_id,
                'large',
                false,
                array(
                    'class' => 'portfolio-detail__image',
                    'alt'   => esc_attr($thumb_alt)
                )
            );
            ?>
        <?php endif; ?>

        <!-- 見出しはh2に変更（ページ内にh1は1つ） -->
        <h2 class="page__title" id="overview-title">🛠️制作概要</h2>

        <div class="portfolio-detail__text">
            <?php the_content(); ?>
        </div>

        <div class="mockup-images" role="region" aria-label="デバイス別モックアップ">
            <?php
            $tablet_img     = get_field('mockup_tablet');
            $smartphone_img = get_field('mockup_smartphone');

            if ($tablet_img) {
                $tablet_alt = isset($tablet_img['alt']) && $tablet_img['alt'] !== '' ? $tablet_img['alt'] : 'タブレット表示のモックアップ';
                echo '<img src="' . esc_url($tablet_img['url']) . '" alt="' . esc_attr($tablet_alt) . '" loading="lazy">';
            }
            if ($smartphone_img) {
                $sp_alt = isset($smartphone_img['alt']) && $smartphone_img['alt'] !== '' ? $smartphone_img['alt'] : 'スマートフォン表示のモックアップ';
                echo '<img src="' . esc_url($smartphone_img['url']) . '" alt="' . esc_attr($sp_alt) . '" loading="lazy">';
            }
            ?>
        </div>

        <div class="portfolio-detail__info" role="region" aria-label="制作情報">
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
                        <?php $url = get_field('work_url'); ?>
                        <?php if ($url): ?>
                            <a href="<?php echo esc_url($url); ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="制作サイトを新しいタブで開く">
                                <?php echo esc_html($url); ?>
                            </a>
                        <?php endif; ?>
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn">制作実績一覧に戻る</a>
</main>

<?php get_footer(); ?>
