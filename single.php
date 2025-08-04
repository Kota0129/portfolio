<?php get_header(); ?>

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