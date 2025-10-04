<?php get_header(); ?>

<<<<<<< HEAD
<main id="main" class="main-page" role="main" tabindex="-1">
    <section class="page" role="region" aria-labelledby="page-title">
        <div class="container">
            <h1 class="page__title" id="page-title"><?php the_title(); ?></h1>
=======
<main id="main" class="main-page">
    <section class="page">
        <div class="container">
            <h1 class="page__title"><?php the_title(); ?></h1>
>>>>>>> 7a5becf (はじめてのアップ)

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

<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> 7a5becf (はじめてのアップ)
