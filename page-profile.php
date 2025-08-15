<?php
/*
Template Name: プロフィールページ
*/
get_header();
?>

<main id="main" class="profile" role="main" tabindex="-1">
    <div class="profile__inner wrapper">

        <h1 class="page__title"><?php the_title(); ?></h1>

        <p class="profile__lead">
            “ちゃんと伝わる”を大切に。誠実対応で安心のWeb制作を。
        </p>
        <p class="profile__intro">
            Kota_WebOfficeは、神奈川県を拠点に活動するWebコーダー／個人制作者です。<br>
            主にWebサイト制作における「コーディングパート」を請け負っており、HTML/CSS、jQuery、WordPress対応など、幅広い技術に対応可能です。<br>
            顔や雰囲気が見えにくいWebでのやりとりだからこそ、丁寧で誠実なコミュニケーションが何より大切だと考えています。
        </p>

        <section class="profile__promise" role="region" aria-labelledby="promise-heading">
            <h3 id="promise-heading" class="profile__sub-title">お約束する3つのこと</h3>
            <ul>
                <li><strong>納期厳守：</strong>スケジュールをしっかり管理し、計画通りに納品します</li>
                <li><strong>迅速なレスポンス：</strong>原則24時間以内のご返信</li>
                <li><strong>最後まで責任対応：</strong>納品後のご質問・修正も柔軟に対応します</li>
            </ul>
        </section>

        <h2 class="section-title" id="profile-section-heading">
            <span class="ja">私のこと</span>
            <span class="divider"></span>
            <span class="en">Profile</span>
        </h2>

        <div class="profile__content" role="region" aria-labelledby="profile-section-heading">
            <div class="profile__image-area">
                <img src="<?php echo esc_url( get_theme_file_uri('img/profile.png') ); ?>" alt="Kotaのプロフィール写真" class="profile__img">
            </div>

            <div class="profile__info">
                <h2 class="profile__name">Kota</h2>

                <table class="profile__table" aria-label="プロフィール情報一覧">
                    <tr>
                        <th scope="row">代表者</th>
                        <td>Kota</td>
                    </tr>
                    <tr>
                        <th scope="row">所在地</th>
                        <td>神奈川県（自宅兼事務所のため非公開）</td>
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
                        <th scope="row">SNS</th>
                        <td>
                            <a href="https://twitter.com/KOO86079816"
                               target="_blank" rel="noopener noreferrer"
                               class="x-link"
                               aria-label="X（旧Twitter）アカウント @KOO86079816（新しいタブで開きます）">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     fill="currentColor" viewBox="0 0 24 24"
                                     aria-hidden="true" focusable="false">
                                    <path d="M14.684 10.296L22.309 2h-1.825l-6.538 7.036L8.537 2H2.25l8.074 11.525L2.25 22h1.825l6.99-7.522L15.463 22h6.288l-7.067-11.704Zm-2.479 2.67l-.81-1.15L4.43 3.296h2.923l5.25 7.447.81 1.15 6.998 9.92h-2.923l-5.283-7.847Z" />
                                </svg>
                                <span>@KOO86079816</span>
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
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="profile__story" role="region" aria-labelledby="story-heading">
            <h3 id="story-heading" class="profile__sub-title">コーダーになったきっかけ</h3>
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
                <span class="ja">お問い合わせ</span>
                <span class="divider"></span>
                <span class="en">Contact</span>
            </h2>
            <p class="contact__text">制作のご依頼やその他ご相談は、お問い合わせフォームにて受け付けております。</p>

            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="contact__btn"
               aria-label="お問い合わせフォームへ移動">
                <span class="contact__btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true" focusable="false">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </span>
                お問い合わせフォーム
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
