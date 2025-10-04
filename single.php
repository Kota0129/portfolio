<?php get_header(); ?>

<<<<<<< HEAD
<main id="main" class="main-page" role="main" tabindex="-1">
    <section class="page" role="region" aria-labelledby="page-title">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1 class="page__title" id="page-title"><?php the_title(); ?></h1>

                <div class="page__content">
                    <?php the_content(); ?>

                    <?php
                    wp_link_pages( array(
                        'before'      => '<nav class="page-links" role="navigation" aria-label="ページ内ページ送り">',
                        'after'       => '</nav>',
                        'link_before' => '<span class="page-link__item">',
                        'link_after'  => '</span>',
                    ) );
                    ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
=======
<main class="page">
    <div class="container">
        <article class="single">
            <h1 class="page__title"><?php the_title(); ?></h1>
            <time class="single__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('Y年n月j日'); ?>
            </time>
            <div class="page__content">
                <?php the_content(); ?>
            </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>
>>>>>>> 7a5becf (はじめてのアップ)
