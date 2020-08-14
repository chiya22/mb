<?php

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
        array( //HTML5でマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

/*
メニューの登録
*/
function my_menu_init()
{
    register_nav_menus(
        array(
            'globalheader' => 'ヘッダーメニュー',
        )
    );
}
add_action('init', 'my_menu_init');

function prefix_nav_description($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace( '">' . $args->link_before . $item->title, '"><div class="menu-item"><div class="menu-item-text">' . $item->title . '</div><div class="menu-item-description">' . $item->description . '</div>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 4);


/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
    wp_enqueue_style('my', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.37', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * カスタム投稿
 */
function create_post_type()
{
    // キャスト
    register_post_type(
        'cast',
        array(
            'label' => 'キャスト',
            'labels' => array(
                'name' => 'キャスト',
                'singular_name' => 'キャスト',
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 10,
            'show_in_rest' => true, //Gutenbergを有効に
            'supports' => array('thumbnail'), //デフォルト表示のフィールドはアイキャッチ画像のみ表示させる
        )
    );
    // スケジュール
    register_post_type(
        'schedule',
        array(
            'label' => 'スケジュール',
            'labels' => array(
                'name' => 'スケジュール',
                'singular_name' => 'スケジュール',
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 11,
            'show_in_rest' => true, //Gutenbergを有効に
            'supports' => false, //デフォルト表示のフィールドは何も表示しない
        )
    );
    // コメント
    register_post_type(
        'comment',
        array(
            'label' => 'コメント',
            'labels' => array(
                'name' => 'コメント',
                'singular_name' => 'コメント',
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 12,
            'show_in_rest' => true, //Gutenbergを有効に
            'supports' => false, //デフォルト表示のフィールドは何も表示しない
        )
    );
};
add_action('init', 'create_post_type');

function replace_post_title($title)
{
    global $post;

    if ($post->post_type == 'cast') {
        if (!empty($_POST['acf'])) {
            //カスタムフィールドを展開する
            foreach ($_POST['acf'] as $key => $value) {
                if ($key == 'field_5eca1e825ea9e') {
                    $title = $value;
                    break;
                }
            }
        }
    } elseif ($post->post_type == 'schedule') {
        if (!empty($_POST['acf'])) {
            //カスタムフィールドを展開する
            foreach ($_POST['acf'] as $key => $value) {
                if ($key == 'field_5eca228395ccf') {
                    $title = $value;
                    break;
                }
            }
        }
    } elseif ($post->post_type == 'comment') {
        if (!empty($_POST['acf'])) {
            //カスタムフィールドを展開する
            foreach ($_POST['acf'] as $key => $value) {
                if ($key == 'field_5ee1428d492a5') {
                    $title = $value;
                    break;
                }
            }
        }
    }
    return $title;
}
add_filter('title_save_pre', 'replace_post_title');

function create_cast_cate()
{
    register_taxonomy(
        "cast_cate", // 新規カスタムタクソノミー名
        "cast", // 新規カスタムタクソノミーを反映させる投稿タイプの定義名
        array(
            'hierarchical' => true,
            'update_count_callback' => '_update_post_term_count',
            'label' => 'カスタム分類',
            'singular_label' => 'カスタム分類',
            'public' => true,
            'show_ui' => true
        )
    );
}
add_action("init", "create_cast_cate");

function get_cast_list($atts)
{ // 変数の定義
    extract(shortcode_atts(array( // 引数の値を取得
        'num' => '3', // 表示件数の値、引数の指定がなければ指定の値を格納
        'cate' => 'CAST'
    ), $atts));
    global $post;
    $args = array(
        'posts_per_page' => $num, // 表示件数の指定
        'post_type'      => 'cast', // 投稿タイプの指定
        'post_status'    => 'publish', // 投稿ステータスの指定
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'cast_cate',
                'field' => 'slug',
                'terms' => $cate,
            )
        )
    );
    $posts_array = get_posts($args);
    $html = '<ul class="cast__list">';
    foreach ($posts_array as $post) :
        setup_postdata($post);
        $html .= '<li class="cast__item">';
        $html .= '<div class="cast__img">';
        if (has_post_thumbnail()) {
            $html .=  get_the_post_thumbnail();
        } else {
            $html .= '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
        }
        $html .= '</div>';
        $html .= '<div class="cast__content">';
        $html .= '<p class="cast__from">' . get_field('cast_from') . '</p>';
        $html .= '<p class="cast__name">' . get_field('cast_name') . '</p>';
        $html .= '<p class="cast__katagaki">' . get_field('cast_katagaki') . '</p>';
        $html .= '<p class="cast__profile">' . get_field('cast_profile') . '</p>';
        $html .= '</div>';
        $html .= '</li>';
    endforeach; // ループの終了
    $html .= '</ul>';
    wp_reset_postdata(); // 投稿のリセット
    return $html;
}
add_shortcode('cast_list', 'get_cast_list');

function get_schedule_list($atts)
{ // 変数の定義
    extract(shortcode_atts(array( // 引数の値を取得
        'num' => '3', // 表示件数の値、引数の指定がなければ指定の値を格納
    ), $atts));
    global $post;
    $args = array(
        'posts_per_page' => $num, // 表示件数の指定
        'post_type'      => 'schedule', // 投稿タイプの指定
        'post_status'    => 'publish', // 投稿ステータスの指定
        'order' => 'ASC',
    );
    $posts_array = get_posts($args);
    $html = '<ul class="schedule__list">';
    foreach ($posts_array as $post) :
        setup_postdata($post);
        $html .= '<li class="schedule__item">';
        $html .= '<p class="schedule__event">' . get_field('schedule_event') . '</p>';
        $html .= '<a href="' . get_field('schedule_link') . '" class="schedule__link">' . get_field('schedule_text') . '</a>';
        $html .= '</li>';
    endforeach; // ループの終了
    $html .= '</ul>';
    wp_reset_postdata(); // 投稿のリセット
    return $html;
}
add_shortcode('schedule_list', 'get_schedule_list');
