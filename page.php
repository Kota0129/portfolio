<?php get_header(); ?>

<main id="main" class="main-page" role="main" tabindex="-1">
    <section class="page" role="region" aria-labelledby="page-title">
        <div class="container">
            <h1 class="page__title" id="page-title"><?php the_title(); ?></h1>

            <div class="page__content">
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
