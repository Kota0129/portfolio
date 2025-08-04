<?php get_header(); ?>

<main class="page error404">
    <div class="container">
        <h1 class="page__title">404 Not Found</h1>
        <p class="error404__text">申し訳ありません。お探しのページは存在しないか、移動された可能性があります。</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="error404__link">トップページへ戻る</a>
    </div>
</main>

<?php get_footer(); ?>