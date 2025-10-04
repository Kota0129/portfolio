<?php
/*
Template Name: プロフィールページ
*/
get_header();
?>

<<<<<<< HEAD
<main id="main" class="profile" role="main" tabindex="-1">
=======
<main class="profile">
>>>>>>> 7a5becf (はじめてのアップ)
    <div class="profile__inner wrapper">

        <h1 class="page__title"><?php the_title(); ?></h1>

        <p class="profile__lead">
<<<<<<< HEAD
            “ちゃんと伝わる”を大切に。<br>誠実対応で安心のWeb制作を。
=======
            “ちゃんと伝わる”を大切に。誠実対応で安心のWeb制作を。
>>>>>>> 7a5becf (はじめてのアップ)
        </p>
        <p class="profile__intro">
            Kota_WebOfficeは、神奈川県を拠点に活動するWebコーダー／個人制作者です。<br>
            主にWebサイト制作における「コーディングパート」を請け負っており、HTML/CSS、jQuery、WordPress対応など、幅広い技術に対応可能です。<br>
            顔や雰囲気が見えにくいWebでのやりとりだからこそ、丁寧で誠実なコミュニケーションが何より大切だと考えています。
        </p>

<<<<<<< HEAD
        <section class="profile__promise" role="region" aria-labelledby="promise-heading">
            <h3 id="promise-heading" class="profile__sub-title">お約束する3つのこと</h3>
            <ul class="promise__list">
=======
        <section class="profile__promise">
            <h3 class="profile__sub-title">お約束する3つのこと</h3>
            <ul>
>>>>>>> 7a5becf (はじめてのアップ)
                <li><strong>納期厳守：</strong>スケジュールをしっかり管理し、計画通りに納品します</li>
                <li><strong>迅速なレスポンス：</strong>原則24時間以内のご返信</li>
                <li><strong>最後まで責任対応：</strong>納品後のご質問・修正も柔軟に対応します</li>
            </ul>
        </section>

<<<<<<< HEAD
        <h2 class="section-title" id="profile-section-heading">
=======
        <h2 class="section-title">
>>>>>>> 7a5becf (はじめてのアップ)
            <span class="ja">私のこと</span>
            <span class="divider"></span>
            <span class="en">Profile</span>
        </h2>

<<<<<<< HEAD
        <div class="profile__content" role="region" aria-labelledby="profile-section-heading">
            <div class="profile__image-area">
                <img src="<?php echo esc_url( get_theme_file_uri('img/profile.png') ); ?>" alt="Kotaのプロフィール写真" class="profile__img">
            </div>

            <div class="profile__info">
                <h2 class="profile__name">Kota_WebOffice</h2>

                <table class="profile__table" aria-label="プロフィール情報一覧">
                    <tr>
                        <th scope="row">代表者</th>
                        <td>山岸 洸太（やまぎし こうた）</td>
                    </tr>
					<tr>
                        <th scope="row">年齢</th>
                        <td>33歳</td>
                    </tr>
                    <tr>
                        <th scope="row">所在地</th>
                        <td>神奈川県横浜市（自宅兼事務所のため非公開）</td>
                    </tr>
                    <tr>
                        <th scope="row">業務内容</th>
                        <td>HP/LP制作、WordPress構築などのコーディング業務</td>
                    </tr>
                    <tr>
                        <th scope="row">URL</th>
                        <td>
                            <a href="https://kotaweboffice.com/"
                               target="_blank" rel="noopener noreferrer"
                               aria-label="Kota_WebOffice 公式サイト（新しいタブで開きます）">
                                https://kotaweboffice.com/
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">GitHub</th>
                        <td>
                            <a href="https://github.com/Kota0129"
                               target="_blank" rel="noopener noreferrer"
                               aria-label="GitHub: Kota0129（新しいタブで開きます）">
                               https://github.com/Kota0129
=======
        <div class="profile__content">
            <div class="profile__image-area">
                <img src="<?php echo get_theme_file_uri('img/profile.png'); ?>" alt="プロフィール画像" class="profile__img">
            </div>

            <div class="profile__info">
                <h2 class="profile__name">Kota</h2>

                <table class="profile__table">
                    <tr>
                        <th>代表者</th>
                        <td>Kota</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>神奈川県（自宅兼事務所のため非公開）</td>
                    </tr>
                    <tr>
                        <th>業務内容</th>
                        <td>HP/LP制作、WordPress構築などのコーディング業務</td>
                    </tr>
                    <tr>
                        <th>URL</th>
                        <td><a href="https://kotaweboffice.com/" target="_blank">https://kotaweboffice.com/</a></td>
                    </tr>
                    <tr>
                        <th>SNS</th>
                        <td>
                            <a href="https://twitter.com/KOO86079816" target="_blank" rel="noopener noreferrer" class="x-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.684 10.296L22.309 2h-1.825l-6.538 7.036L8.537 2H2.25l8.074 11.525L2.25 22h1.825l6.99-7.522L15.463 22h6.288l-7.067-11.704Zm-2.479 2.67l-.81-1.15L4.43 3.296h2.923l5.25 7.447.81 1.15 6.998 9.92h-2.923l-5.283-7.847Z" />
                                </svg>
                                <span>@KOO86079816</span>
>>>>>>> 7a5becf (はじめてのアップ)
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
<<<<<<< HEAD
		
		<div class="profile__social" role="region" aria-labelledby="social-heading">
  <h3 id="social-heading" class="profile__sub-title">日々の発信</h3>
  <p class="profile__note">X（旧Twitter）で Web制作の案件・実装の気づきを<strong>毎日発信中</strong>です。</p>

  <blockquote class="twitter-tweet" data-theme="light">
    <p lang="ja" dir="ltr">📌【ポートフォリオ＆成長の記録】<br><br>学習を積み重ね、案件挑戦を経て <br>WordPressオリジナルテーマでポートフォリオを公開しました。 <br><br>継続力とアウトプット力を強みに、 <br>ご依頼にも丁寧かつ迅速に対応しています。 <br><br>（学習初期→案件挑戦→現在の流れを3枚でまとめました👇） <a href="https://t.co/bVsP1QJWmR">pic.twitter.com/bVsP1QJWmR</a></p>&mdash; Kota @ Webコーダー (@KOO86079816) <a href="https://twitter.com/KOO86079816/status/1957744348684251647?ref_src=twsrc%5Etfw">August 19, 2025</a>
  </blockquote>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>

		<div class="profile__career" role="region" aria-labelledby="career-heading">
            <h3 id="career-heading" class="profile__sub-title">経歴</h3>
            <ul class="career__list">
                <li>長野県出身</li>
                <li>私立大学文系卒業</li>
                <li>神奈川県横浜市にて医療系営業職に従事</li>
                <li>同業界にて転職、メーカー営業として通算10年勤務</li>
                <li>2025年2月〜　本業と並行してWeb制作の学習を開始（独学）</li>
                <li>MENTAにて現役エンジニアから学習サポートを受け、HTML・CSS・JavaScript・PHP・WordPressを習得</li>
                <li>学習期間中はX（旧Twitter）にて毎日学習内容を発信し、継続力を強化</li>
                <li>現在も日々の気づきやお知らせを継続投稿中</li>
            </ul>
        </div>

        <div class="profile__story" role="region" aria-labelledby="story-heading">
            <h3 id="story-heading" class="profile__sub-title">コーダーになったきっかけ</h3>
=======

        <div class="profile__story">
            <h3 class="profile__sub-title">コーダーになったきっかけ</h3>
>>>>>>> 7a5becf (はじめてのアップ)
            <p>
                大学卒業後、約10年間、医療系メーカーで営業職として勤めてきました。<br>
                営業の現場では、どんなに良い商品でも、魅力が伝わらなければ広まらないという現実に何度も直面。<br>
                「伝える力」や「わかりやすい表現」の大切さを強く実感しました。<br>
                そんな中で、一生モノのスキルを身につけたいと思い、独学でWeb制作を学び始めました。<br>
                現在はコーディングを通して、「伝わるWebサイトづくり」をご提案できるよう日々取り組んでいます。
            </p>
            <p>
                現在はHTML/CSSコーディングを中心に、WordPressやjQueryの実装も対応しています。<br>
                営業職で培ったヒアリング力・提案力を活かしながら、「伝わるWebサイトづくり」に取り組んでいます。
            </p>
        </div>
<<<<<<< HEAD

        <div class="works-link">
            <p class="works-note">🌱これまでに制作した実績は以下にまとめています。ぜひご覧ください！</p>
            <a href="<?php echo esc_url(home_url('/portfolio')); ?>"
               class="btn"
               aria-label="制作実績一覧ページへ移動">
               制作実績はこちら
            </a>
        </div>

    </div>

    <section class="contact fadein" id="contact" role="region" aria-labelledby="contact-heading">
        <div class="section-inner">
            <h2 class="section-title" id="contact-heading">
=======
        <div class="works-link">
            <p class="works-note">🌱これまでに制作した実績は以下にまとめています。ぜひご覧ください！</p>
            <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn">制作実績はこちら</a>
        </div>

    </div>
    <section class="contact fadein" id="contact">
        <div class="section-inner">
            <h2 class="section-title">
>>>>>>> 7a5becf (はじめてのアップ)
                <span class="ja">お問い合わせ</span>
                <span class="divider"></span>
                <span class="en">Contact</span>
            </h2>
            <p class="contact__text">制作のご依頼やその他ご相談は、お問い合わせフォームにて受け付けております。</p>

<<<<<<< HEAD
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="contact__btn"
               aria-label="お問い合わせフォームへ移動">
                <span class="contact__btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true" focusable="false">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
=======
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="contact__btn">
                <span class="contact__btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
>>>>>>> 7a5becf (はじめてのアップ)
                    </svg>
                </span>
                お問い合わせフォーム
            </a>
        </div>
    </section>
</main>

<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> 7a5becf (はじめてのアップ)
