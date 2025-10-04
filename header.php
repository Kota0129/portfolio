<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Mobile用 LCP 先読み -->
<link rel="preload" as="image"
  imagesrcset="<?php echo get_template_directory_uri(); ?>/img/hero_visual-sp.avif 800w,
               <?php echo get_template_directory_uri(); ?>/img/hero_visual-sp.jpg 800w"
  imagesizes="100vw"
  media="(max-width:767px)">

<!-- Desktop用 LCP 先読み -->
<link rel="preload" as="image"
  imagesrcset="<?php echo get_template_directory_uri(); ?>/img/hero_visual-pc.avif 1600w,
               <?php echo get_template_directory_uri(); ?>/img/hero_visual-pc.jpg 1600w"
  imagesizes="100vw"
  media="(min-width:768px)">
	<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "sur85d2cmt");
</script>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <a href="#main" class="skip-link">本文へスキップ</a>
	
	<div id="loadingWrap">
    <div class="loading__inner">
      <div class="loading__bar">
        <div class="loading__bar-progress"></div>
      </div>
      <div class="loading__percent">0%</div>
      <div class="loading__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/site-title.avif" alt="Loading Logo">
      </div>
    </div>
  </div>
    <header id="header" class="site-header" role="banner">
        <div class="site-header__bar">
            <p class="site-header__catchphrase">
                “ちゃんと伝わる”を大切に。誠実対応で安心のWeb制作を。
            </p>
        </div>

        <div class="site-header__inner">
            <?php if (is_front_page()) : ?>
                <h1 class="site-header__title">
                    <a href="<?php echo esc_url(home_url()); ?>" class="site-header__title-link">
                        <span class="site-header__title--accent">Kota</span>_<span class="site-header__title--base">WebOffice</span>
                    </a>
                </h1>
            <?php else : ?>
                <div class="site-header__title">
                    <a href="<?php echo esc_url(home_url()); ?>" class="site-header__title-link">
                        <span class="site-header__title--accent">Kota</span>_<span class="site-header__title--base">WebOffice</span>
                    </a>
                </div>
            <?php endif; ?>

            <nav class="site-header__nav" id="site-global-nav" role="navigation" aria-label="グローバルナビゲーション">
                <div class="menu-heading">MENU</div>
                <ul class="site-header__nav-list">
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('profile'))); ?>">Kota_WebOfficeについて</a></li>
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">サービス内容</a></li>
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio'))); ?>">制作実績</a></li>
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>">お知らせ</a></li>
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">お問い合わせ</a></li>
                </ul>
            </nav>

            <button class="hamburger" id="js-hamburger"
                    type="button"
                    aria-label="メニューを開閉"
                    aria-controls="site-global-nav"
                    aria-expanded="false">
                <span class="hamburger__line" aria-hidden="true"></span>
                <span class="hamburger__line" aria-hidden="true"></span>
                <span class="hamburger__line" aria-hidden="true"></span>
            </button>

            <div class="mask" aria-hidden="true" tabindex="-1"></div>
        </div>
    </header>

    <header class="fixed-header" aria-hidden="true">
        <div class="fixed-header__inner">
            <?php if (is_front_page()) : ?>
                <h1 class="site-header__title">
                    <a href="<?php echo esc_url(home_url()); ?>" class="site-header__title-link">
                        <span class="site-header__title--accent">Kota</span>_<span class="site-header__title--base">WebOffice</span>
                    </a>
                </h1>
            <?php else : ?>
                <div class="site-header__title">
                    <a href="<?php echo esc_url(home_url()); ?>" class="site-header__title-link">
                        <span class="site-header__title--accent">Kota</span>_<span class="site-header__title--base">WebOffice</span>
                    </a>
                </div>
            <?php endif; ?>
            <nav class="fixed-header__nav" role="navigation" aria-label="グローバルナビゲーション（固定）">
                <ul class="site-header__nav-list">
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('profile'))); ?>">Kota_WebOfficeについて</a></li>
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">サービス内容</a></li>
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio'))); ?>">制作実績</a></li>
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>">お知らせ</a></li>
                    <li class="site-header__nav-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>