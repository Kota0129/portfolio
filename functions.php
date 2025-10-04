<?php

function my_enqueue_assets()
{

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap', [], null);
    wp_enqueue_style('google-fonts-jp', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Noto+Serif+JP:wght@200..900&display=swap', [], null);
    wp_enqueue_style('permanent-marker', 'https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap', [], null);

    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', [], null);

    wp_enqueue_style('style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));

    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', ['jquery'], filemtime(get_template_directory() . '/main.js'), true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_assets');

add_theme_support('post-thumbnails');

add_theme_support('menus');

function add_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'add_font_awesome');


function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<ul class="pagination">';

        if ($paged > 1) {
            echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のページ</a></li>';
        }

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                if ($paged == $i) {
                    echo '<li class="active">' . $i . '</li>';
                } else {
                    echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
                }
            }
        }

        if ($paged < $pages) {
            echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a></li>';
        }

        echo '</ul>';
    }
}
function register_custom_post_type()
{
    register_post_type('works', [
        'label' => '制作実績',
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'works'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_custom_post_type');

function add_thanks_redirect_js()
{
    if (is_page('contact')) {
?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (typeof wpcf7 === 'undefined') return;

                document.addEventListener('wpcf7mailsent', function(event) {
                    window.location.href = "<?php echo esc_url(home_url('/thanks')); ?>";
                }, false);
            });
        </script>
<?php
    }
}
add_action('wp_footer', 'add_thanks_redirect_js');
<<<<<<< HEAD

add_filter('script_loader_tag', function($tag,$handle){
  if (is_admin()) return $tag;
  $skip = ['jquery-core','jquery-migrate'];
  if (in_array($handle,$skip)) return $tag;
  return str_replace('<script ', '<script defer ', $tag);
},10,2);

remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
=======
>>>>>>> 7a5becf (はじめてのアップ)
