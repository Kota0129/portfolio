<?php get_header(); ?>

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
