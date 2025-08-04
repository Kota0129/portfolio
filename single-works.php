<?php get_header(); ?>

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