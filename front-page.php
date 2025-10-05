<?php get_header(); ?>

<a href="#main" class="skip-link">本文へスキップ</a>

<main id="main" class="main" role="main">
	<section class="hero" role="region" aria-labelledby="hero-title"> <picture aria-hidden="true"> <!-- SP --> <source type="image/avif" media="(max-width: 767px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hero_visual-sp.avif" sizes="100vw"> <!-- PC --> <source type="image/avif" media="(min-width: 768px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hero_visual-pc.avif" sizes="100vw"> <!-- JPEG フォールバック --> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hero_visual-pc.jpg" alt="" class="hero__bg-image" width="1600" height="1067" decoding="async" fetchpriority="high"> </picture>

    <div class="hero__inner">
      <div class="hero__text">
        <p class="hero__role">Webコーダー / WordPress対応</p>
        <h1 id="hero-title" class="hero__catch-wrap fadein">
          <span class="hero__catch-line">“ちゃんと伝わる”を大切に。</span>
          <span class="hero__catch-line">誠実対応で安心のWeb制作を。</span>
        </h1>

        <p class="hero__desc">
          「デザインはあるけどコーディングだけ頼みたい」<br>
          「WordPress化だけお願いしたい」など、<br>
          まずはお気軽にご相談ください。
        </p>

        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="contact__btn" aria-label="お問い合わせフォームへ">
          ご相談はこちら <span class="contact__btn-arrow" aria-hidden="true">▶︎</span>
        </a>

        <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>#price" class="price__link-subtle">
          料金の目安も見る
          <img src="<?php echo get_template_directory_uri(); ?>/img/price_arrow.png" alt="" class="price__arrow" aria-hidden="true">
        </a>
      </div>
    </div>
  </section>

  <!-- ========== PORTFOLIO ========== -->
	<section class="portfolio fadein" id="portfolio" role="region" aria-labelledby="portfolio-title">
    <div class="section-inner">
      <h2 id="portfolio-title" class="section-title" aria-level="2" role="heading">
        <span class="ja">制作実績</span>
        <span class="divider" aria-hidden="true"></span>
        <span class="en">Portfolio</span>
      </h2>

      <div class="portfolio__slider">
<?php
$posts = [
  [
    'slug' => 'maripro',
    'img'  => 'portforio1.png',
    'title'=> 'Marriage Project様_HP',
    'tags' => ['デザイン支給', 'HTML/CSSコーディング', 'WordPress', 'ハンバーガーメニュー・スクロール演出', 'レスポンシブ対応']
  ],
  [
    'slug' => 'yui',
    'img'  => 'yui.png',
    'title'=> '日本酒専門店_HP',
    'tags' => ['自主制作', 'デザイン作成', 'HTML/CSSコーディング', 'スライダー', 'レスポンシブ対応']
  ],
  [
    'slug' => 'video',
    'img'  => 'video-school-main.png',
    'title'=> '動画編集スクール_LP',
    'tags' => ['自主制作', 'デザイン作成', 'HTML/CSSコーディング', 'アコーディオン', 'レスポンシブ対応']
  ],
  [
    'slug' => 'brightai',
    'img'  => 'ai-corporate-main.png',
    'title'=> 'AIスタートアップ企業_HP',
    'tags' => ['自主制作', 'デザイン作成', 'HTML/CSSコーディング', 'ハンバーガーメニュー', 'レスポンシブ対応']
  ], // ← このカンマが必須！
  [
    'slug' => 'beauty-clinic-ebisu', // 空白はハイフンに
    'img'  => 'medical-clinic-main.avif',
    'title'=> '医療脱毛クリニック_HP',
    'tags' => ['自主制作', 'デザイン作成', 'HTML/CSSコーディング', 'スライダー', 'レスポンシブ対応']
  ],
];

  foreach ($posts as $p) :
    $post = get_page_by_path($p['slug'], OBJECT, 'works');
    if ($post) :
  ?>
    <a
      href="<?php echo esc_url(get_permalink($post->ID)); ?>"
      class="portfolio__item"
      aria-label="制作実績『<?php echo esc_attr($p['title']); ?>』の詳細ページへ"
    >
      <figure>
  <div class="portfolio__thumb">
    <img
      src="<?php echo esc_url( get_theme_file_uri( 'img/' . $p['img'] ) ); ?>"
      alt="<?php echo esc_attr( $p['title'] ); ?>"
      loading="lazy"
      decoding="async"
    >
  </div>

  <figcaption>
    <p class="portfolio__title"><?php echo esc_html( $p['title'] ); ?></p>
    <ul class="portfolio__tags">
      <?php foreach ( $p['tags'] as $tag ) : ?>
        <li><?php echo esc_html( $tag ); ?></li>
      <?php endforeach; ?>
    </ul>
  </figcaption>
</figure>
    </a>
  <?php
    endif;
  endforeach;
  ?>
      </div>

      <a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio'))); ?>" class="btn" aria-label="制作実績一覧を見る">
        制作一覧を見る <span class="btn__arrow" aria-hidden="true">▶︎</span>
      </a>
    </div>
  </section>

  <!-- ========== SERVICES ========== -->
  <section class="services fadein" id="services" role="region" aria-labelledby="services-title">
    <div class="section-inner">
      <h2 id="services-title" class="section-title" aria-level="2" role="heading">
        <span class="ja">サービス内容</span>
        <span class="divider" aria-hidden="true"></span>
        <span class="en">Services</span>
      </h2>

      <div class="services__grid" role="list">
        <?php
        $services = [
          [
            'title' => 'HTML / CSS コーディング',
            'text' => 'FigmaやXDなどのデザインデータを忠実に再現し、BEM設計を意識した保守性の高いコーディングを行います。スマホやタブレットにも対応したレスポンシブ設計が可能です。',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" /></svg>'
          ],
          [
            'title' => 'jQuery アニメーション',
            'text' => 'ハンバーガーメニュー、スライダー、フェードインなど、視覚的に訴求力のある動きをjQueryで実装。ユーザー体験を高める演出をご提案します。',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09Z" /></svg>'
          ],
          [
            'title' => 'WordPress化対応',
            'text' => '静的サイトをWordPress化し、オリジナルテーマの構築やカスタム投稿・カスタムフィールドにも対応。Cocoon等の既存テーマのカスタマイズも可能です。',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" /></svg>'
          ],
          [
            'title' => '修正・微調整対応',
            'text' => '納品後のテキスト修正や画像差し替えなどの細かなご要望にも柔軟に対応。「ここだけ直したい」といったご相談もお気軽にどうぞ。',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" /></svg>'
          ],
          [
            'title' => '保守・運用サポート',
            'text' => 'WordPressの定期更新、プラグイン管理、バックアップ取得、軽微なトラブルの対応まで、サイト公開後も継続して安心して運用いただけるようサポートします。',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63" /></svg>'
          ]
        ];
        foreach ($services as $service) : ?>
          <div class="service-item" role="listitem">
            <div class="service-icon" aria-hidden="true">
              <?php echo $service['icon']; ?>
            </div>
            <h3 class="service-title"><?php echo esc_html($service['title']); ?></h3>
            <p class="service-text"><?php echo esc_html($service['text']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="btn" aria-label="サービス内容ページを見る">
        サービス内容を見る <span class="btn__arrow" aria-hidden="true">▶︎</span>
      </a>
    </div>
  </section>

  <!-- ========== ABOUT ========== -->
  <section class="about fadein" id="about" role="region" aria-labelledby="about-title">
    <div class="section-inner">
      <h2 id="about-title" class="section-title" aria-level="2" role="heading">
        <span class="ja">Kota_WebOfficeについて</span>
        <span class="divider" aria-hidden="true"></span>
        <span class="en">About</span>
      </h2>

      <div class="about__content about__content--flex">
        <div class="about__text">
          <p class="about__catch">
            “ちゃんと伝わる”を大切にするWebコーダー<br>
            <span class="about__subcatch">─ 誠実対応で、安心できるWebサイト制作を ─</span>
          </p>
          <p class="about__intro">
            Webコーダーの <strong>Kota_WebOffice</strong> は、<br>
            丁寧なヒアリングと誠実なやりとりで、<br>
            理想のWebサイト制作をお手伝いします。
          </p>
          <ul class="about__list">
            <li><span class="about__icon about__icon--hand" aria-hidden="true">&lt;/&gt;</span> デザインはできたけど、コーディングは任せたい</li>
            <li><span class="about__icon about__icon--hand" aria-hidden="true">&lt;/&gt;</span> スマホでも見やすいレイアウトにしてほしい</li>
            <li><span class="about__icon about__icon--hand" aria-hidden="true">&lt;/&gt;</span> WordPressで更新しやすいサイトにしたい</li>
          </ul>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('profile'))); ?>" class="btn" aria-label="プロフィールページへ">
            詳しく知る <span class="btn__arrow" aria-hidden="true">▶︎</span>
          </a>
        </div>
        <div class="about__image">
          <img src="<?php echo esc_url(get_theme_file_uri('img/about-image.png')); ?>" alt="Web制作のイメージ画像">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FLOW ========== -->
  <section class="flow fadein" id="flow" role="region" aria-labelledby="flow-title">
    <div class="section-inner wrapper">
      <h2 id="flow-title" class="section-title" aria-level="2" role="heading">
        <span class="ja">制作の流れ</span>
        <span class="divider" aria-hidden="true"></span>
        <span class="en">Flow</span>
      </h2>

      <ol class="flow__timeline">
        <li class="flow__step">
          <div class="flow__icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
            </svg>
          </div>
          <h3 class="flow__title">お問い合わせ</h3>
          <p class="flow__text">まずはお気軽にご連絡ください。</p>
        </li>

        <li class="flow__step">
          <div class="flow__icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>
          </div>
          <h3 class="flow__title">ヒアリング</h3>
          <p class="flow__text">ご要望や目的を丁寧に伺います。</p>
        </li>

        <li class="flow__step">
          <div class="flow__icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
          </div>
          <h3 class="flow__title">ご提案・お見積り</h3>
          <p class="flow__text">内容に応じてご提案と費用をご案内します。</p>
        </li>

        <li class="flow__step">
          <div class="flow__icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </div>
          <h3 class="flow__title">制作開始</h3>
          <p class="flow__text">デザインに基づきコーディングを進めます。</p>
        </li>

        <li class="flow__step">
          <div class="flow__icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
            </svg>
          </div>
          <h3 class="flow__title">納品</h3>
          <p class="flow__text">納品後のサポートもご相談ください。</p>
        </li>
      </ol>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq fadein" id="faq" role="region" aria-labelledby="faq-title">
    <div class="section-inner">
      <h2 id="faq-title" class="section-title" aria-level="2" role="heading">
        <span class="ja">よくある質問</span>
        <span class="divider" aria-hidden="true"></span>
        <span class="en">FAQ</span>
      </h2>

      <div class="ac-menu">
        <div class="faq-item">
          <button class="label" type="button" aria-expanded="false" aria-controls="faq-a1" id="faq-q1">Q. 納期はどれくらいですか？</button>
          <div class="answer" id="faq-a1" role="region" aria-labelledby="faq-q1" aria-hidden="true">
            A. 内容にもよりますが、目安として2週間〜1ヶ月程度となります。お急ぎの場合もご相談ください。
          </div>
        </div>

        <div class="faq-item">
          <button class="label" type="button" aria-expanded="false" aria-controls="faq-a2" id="faq-q2">Q. 対応エリアはどこですか？</button>
          <div class="answer" id="faq-a2" role="region" aria-labelledby="faq-q2" aria-hidden="true">
            A. 全国対応しております。基本的にオンラインでやり取り可能ですので、遠方のお客様もご安心ください。
          </div>
        </div>

        <div class="faq-item">
          <button class="label" type="button" aria-expanded="false" aria-controls="faq-a3" id="faq-q3">Q. 納品後のサポートはありますか？</button>
          <div class="answer" id="faq-a3" role="region" aria-labelledby="faq-q3" aria-hidden="true">
            A. 納品後1ヶ月は無料で軽微な修正・ご相談を承ります。それ以降の保守契約も可能ですのでご相談ください。
          </div>
        </div>
      </div>
    </div>

    <a href="<?php echo esc_url(get_permalink(get_page_by_path('services')) . '#faq'); ?>" class="btn" aria-label="よくある質問をもっと見る">他の質問も見る</a>
  </section>

  <!-- ========== CONTACT ========== -->
  <section class="contact fadein" id="contact" role="region" aria-labelledby="contact-title">
    <div class="section-inner">
      <h2 id="contact-title" class="section-title" aria-level="2" role="heading">
        <span class="ja">お問い合わせ</span>
        <span class="divider" aria-hidden="true"></span>
        <span class="en">Contact</span>
      </h2>
      <p class="contact__text">制作のご依頼やその他ご相談は、お問い合わせフォームにて受け付けております。</p>

      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="contact__btn" aria-label="お問い合わせフォームへ移動">
        <span class="contact__btn-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" focusable="false">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
          </svg>
        </span>
        お問い合わせフォーム
      </a>
    </div>
  </section>

  <!-- ========== NEWS ========== -->
  <section class="news fadein" id="news" role="region" aria-labelledby="news-title">
    <div class="section-inner">
      <h2 id="news-title" class="section-title" aria-level="2" role="heading">
        <span class="ja">お知らせ・最新情報</span>
        <span class="divider" aria-hidden="true"></span>
        <span class="en">News &amp; Topics</span>
      </h2>

      <ul class="news-list">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        );
        $news_query = new WP_Query($args);
        if ($news_query->have_posts()) :
          while ($news_query->have_posts()) : $news_query->the_post();
            $cat = get_the_category();
            $cat_name = $cat ? $cat[0]->name : '';
            $cat_slug = $cat ? $cat[0]->slug : '';
        ?>
            <li class="news-item">
              <a href="<?php the_permalink(); ?>" aria-label="記事『<?php the_title_attribute(); ?>』を読む">
                <div class="news-meta">
                  <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                    <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                    <?php echo esc_html(get_the_date('Y年n月j日')); ?>
                  </time>
                  <?php if ($cat_name) : ?>
                    <span class="category category--<?php echo esc_attr($cat_slug); ?>" aria-label="カテゴリー：<?php echo esc_attr($cat_name); ?>">
                      <?php echo esc_html($cat_name); ?>
                    </span>
                  <?php endif; ?>
                </div>
                <span class="news-title"><?php the_title(); ?></span>
              </a>
            </li>
          <?php endwhile;
          wp_reset_postdata();
        else : ?>
          <li class="news-item">現在、お知らせはありません。</li>
        <?php endif; ?>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>