<?php


function footer_enqueue_scripts()
{
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    //remove_action('wp_head','wp_enqueue_scripts',1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}

add_action('after_setup_theme', 'footer_enqueue_scripts');


/**
 * загружаемые скрипты и стили
 */
function load_style_script()
{
    wp_enqueue_style('polclean-css', get_template_directory_uri() . '/style.css', array(), time(), 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-easing', plugins_url('accordeon-menu-ck/assets/jquery.easing.1.3.js'), array('jquery'), null, true);
    wp_enqueue_script('jquery-accordeonmenuck', plugins_url('accordeon-menu-ck/assets/accordeonmenuck.js'), array('jquery'), null, true);
    wp_enqueue_script('jquery_ui_local', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery_ui_touch', get_template_directory_uri() . '/js/jquery.ui.touch-punch.min.js', array('jquery'), null, true);
    wp_enqueue_script('my_scripts', get_template_directory_uri() . '/js/common.js', array('jquery'), null, true);
    wp_enqueue_script('lazy_scripts', get_template_directory_uri() . '/js/lazy.js', array(), null, true);
}

/**
 * загружаем скрипты и стили
 */
add_action('wp_enqueue_scripts', 'load_style_script');
/**
 * добавляем виджеты
 */
register_sidebar(array(
        'name' => 'Меню',
        'id' => 'menu_header',
        'before_widget' => '',
        'after_widget' => '')
);


register_sidebar(array(
        'name' => 'Шапка страницы Услуги для физлиц/юрлиц',
        'id' => 'index_services_list',
        'before_widget' => '',
        'after_widget' => '')
);


register_sidebar(array(
        'name' => 'Одна уборка это сколько',
        'id' => 'widgetkit_clean_fizlico',
        'before_widget' => '',
        'after_widget' => '')
);

register_sidebar(array(
        'name' => 'Наши преимущества/форма/отзывы',
        'id' => 'our_advantages',
        'class' => '',
        'before_widget' => '',
        'after_widget' => '')
);

register_sidebar(array(
        'name' => 'Вопросы и ответы',
        'id' => 'question_answers',
        'class' => '',
        'before_widget' => '',
        'after_widget' => '')
);

register_sidebar(array(
        'name' => 'СЕО текст на страницах',
        'id' => 'seo_text',
        'class' => '',
        'before_widget' => '',
        'after_widget' => '')
);

register_sidebar(array(
        'name' => 'Меню в футере',
        'id' => 'footer_menu',
        'class' => '',
        'before_widget' => '',
        'after_widget' => '')
);

/**
 * добавляем поддержку миниатюр
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(190, 190, true);

/* Отключаем админ панель для всех. */
//show_admin_bar(false);
add_filter('show_admin_bar', '__return_false');

function my_breadcrumb()
{
    echo '<div class="breadcrumb"><a href="/"><span>Главная страница</span></a>&nbsp;»&nbsp;</div>
<div class="breadcrumb">';
    $categories = get_the_category();
    if ($categories[0]) {
        echo '<a href="' . get_category_link($categories[0]->term_id) . '">
  <span>' . $categories[0]->name . '</span></a>&nbsp;»&nbsp;';
    }
    echo '</div>
   <div class="breadcrumb">
    <span>';
    echo the_title();
    echo '</span></div>';
}

add_filter('excerpt_more', function ($more) {
    return '...';
});

//разрешаем все элементы тега НЕ РАБОТАЕТ
function wph_add_all_elements($init)
{
    if (current_user_can('unfiltered_html')) {
        $init['extended_valid_elements'] = 'span[*]';
    }
    return $init;
}

add_filter('tiny_mce_before_init', 'wph_add_all_elements', 20);
//разрешаем все элементы тега img end


?>
