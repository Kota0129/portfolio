<?php get_header(); ?>

<<<<<<< HEAD
<?php if ( function_exists('status_header') ) { status_header(404); } ?>

<main class="page error404" role="main" aria-labelledby="page-title" aria-describedby="page-desc">
  <div class="container">
    <h1 id="page-title" class="page__title" tabindex="-1">404 Not Found</h1>
    <p id="page-desc" class="error404__text">
      申し訳ありません。お探しのページは存在しないか、移動された可能性があります。
    </p>

    <a href="<?php echo esc_url(home_url('/')); ?>" class="error404__link"
       aria-label="トップページへ戻る（ホーム）">
      トップページへ戻る
    </a>

    <section role="search" aria-label="サイト内検索" class="error404__search">
      <?php get_search_form(); ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>

<?php 
<script>
  window.addEventListener('load', function () {
    var t = document.getElementById('page-title');
    if (t) t.focus();
  });
</script>
=======
<main class="page error404">
    <div class="container">
        <h1 class="page__title">404 Not Found</h1>
        <p class="error404__text">申し訳ありません。お探しのページは存在しないか、移動された可能性があります。</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="error404__link">トップページへ戻る</a>
    </div>
</main>

<?php get_footer(); ?>
>>>>>>> 7a5becf (はじめてのアップ)
