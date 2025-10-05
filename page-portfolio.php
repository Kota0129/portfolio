<?php
/*
Template Name: 制作実績ページ
*/
get_header();
?>

<main id="main" class="works" role="main">
    <div class="works__inner">
        <h1 class="page__title"><?php the_title(); ?></h1>
        <p class="works-note">
            ✏️ 今後も実績を順次追加予定です。掲載許可のある案件から随時アップしていきます！
        </p>

        <div class="works-grid fadein" role="list">
            <?php
            $args = [
                'post_type'      => 'works',
                'posts_per_page' => -1,
            ];
            $works_query = new WP_Query($args);

            if ($works_query->have_posts()):
                while ($works_query->have_posts()): $works_query->the_post();
                    // a11y: リンクの aria-label 用タイトル
                    $title_attr = the_title_attribute(['echo' => false]);
            ?>
                <article class="works-card" role="listitem">
                    <a href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr($title_attr); ?>">
                        <div class="works-card__image">
                            <?php if (has_post_thumbnail()):
                                // a11y: サムネイルの alt はメディアの代替テキスト、未設定なら空
                                $thumb_id = get_post_thumbnail_id();
                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                the_post_thumbnail('large', ['alt' => esc_attr($alt ?: '')]);
                            else: ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('img/no-image.png')); ?>"
                                     alt=""
                                     aria-hidden="true"
                                     role="presentation">
                            <?php endif; ?>
                        </div>
                        <div class="works-card__body">
                            <h2 class="works-card__title"><?php the_title(); ?></h2>
                            <p class="works-card__desc">
                                <?php echo esc_html( wp_trim_words(get_the_content(), 50, '…') ); ?>
                            </p>
                        </div>
                    </a>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else: ?>
                <p>現在、制作実績は準備中です。</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
