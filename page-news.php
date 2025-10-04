<?php
/*
Template Name: ニュース一覧ページ
*/
get_header();
?>

<<<<<<< HEAD
<main id="main" class="page" role="main">
    <div class="container">
        <h1 class="page__title" id="page-title"><?php the_title(); ?></h1>
=======
<main class="page">
    <div class="container">
        <h1 class="page__title"><?php the_title(); ?></h1>
>>>>>>> 7a5becf (はじめてのアップ)

        <ul class="news-list">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
<<<<<<< HEAD
                'post_type'      => 'post',
                'posts_per_page' => 5,
                'paged'          => $paged,
=======
                'post_type' => 'post',
                'posts_per_page' => 5,
                'paged' => $paged,
>>>>>>> 7a5becf (はじめてのアップ)
            );
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
<<<<<<< HEAD

                    $title_attr = the_title_attribute(array('echo' => false));
            ?>
                <li class="news-item">
                    <a href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( $title_attr ); ?>">
                        <div class="news-meta">
                            <time datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>">
                                <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                                <?php echo esc_html( get_the_date('Y年n月j日') ); ?>
                            </time>
                            <?php
                            $cat = get_the_category();
                            if ($cat) :
                                $cat_name = $cat[0]->name;
                                $cat_slug = $cat[0]->slug;
                            ?>
                                <span class="category category--<?php echo esc_attr($cat_slug); ?>">
                                    <?php echo esc_html($cat_name); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <span class="news-title"><?php the_title(); ?></span>
                    </a>
                </li>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
=======
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
>>>>>>> 7a5becf (はじめてのアップ)
                <li class="news-item">現在、お知らせはありません。</li>
            <?php endif; ?>
        </ul>

<<<<<<< HEAD
        <?php if (function_exists('pagination')) : ?>
            <nav class="pagination-nav" role="navigation" aria-label="ニュースのページ移動">
                <?php pagination($news_query->max_num_pages); ?>
            </nav>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
=======
        <?php
        if (function_exists("pagination")) {
            pagination($news_query->max_num_pages);
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>
>>>>>>> 7a5becf (はじめてのアップ)
