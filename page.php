<?php get_header(); ?>

<main id="main" class="main-page">
    <section class="page">
        <div class="container">
            <h1 class="page__title"><?php the_title(); ?></h1>

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