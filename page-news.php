<?php
/*
Template Name: ニュース一覧ページ
*/
get_header();
?>

<main class="page">
    <div class="container">
        <h1 class="page__title"><?php the_title(); ?></h1>

        <ul class="news-list">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'paged' => $paged,
            );
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>
                    <li class="news-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-meta">
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                    <i class="fa-regular fa-calendar"></i>
                                    <?php echo get_the_date('Y年n月j日'); ?>
                                </time>
                                <?php
                                $cat = get_the_category();
                                if ($cat) :
                                    $cat_name = $cat[0]->name;
                                    $cat_slug = $cat[0]->slug;
                                ?>
                                    <span class="category category--<?php echo esc_attr($cat_slug); ?>"><?php echo esc_html($cat_name); ?></span>
                                <?php endif; ?>
                            </div>
                            <span class="news-title"><?php the_title(); ?></span>
                        </a>
                    </li>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <li class="news-item">現在、お知らせはありません。</li>
            <?php endif; ?>
        </ul>

        <?php
        if (function_exists("pagination")) {
            pagination($news_query->max_num_pages);
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>