<!DOCTYPE html>
<html dir="ltr" lang="ru-RU">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <title><?php bloginfo('name');
        wp_title(); ?></title>
    <script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-includes/js/jquery/jquery.js?ver=all'></script>
    <script type='text/javascript'
            src='<?php echo get_site_url(); ?>/wp-content/plugins/accordeon-menu-ck/assets/jquery.easing.1.3.js?ver=4.9.7'></script>
    <script type='text/javascript'
            src='<?php echo get_site_url(); ?>/wp-content/plugins/accordeon-menu-ck/assets/accordeonmenuck.js?ver=4.9.7'></script>
    <?php wp_head(); ?>
</head>
<body class="<?php echo(get_post_meta($post->ID, 'my_classes', true)); ?> blog_page">
<div class="menu_block flex wrap align_center center">
    <i class="fa fa-times close"></i>
    <div class="container">
        <div class="center">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
        </div>
        <div class="phone">
            <i class="fa fa-phone"></i><a href="tel:+74952114504">8(495)211-45-04</a><br>
            <i class="fa fa-clock-o"></i><span>с 7:00 до 23:00 без выходных</span>
        </div>
        <div class="login">
            <a href="#" class="btn">Войти</a>
        </div>
        <?php if (!dynamic_sidebar('menu_header')): ?>
            <span>Область меню добавляемая из виджетов</span>
        <?php endif; ?>
    </div>
</div>
<header class="flex wrap between align_center">
    <div class="left open_menu_btn">
        <i class="fa fa-bars"></i><span>Меню</span>
    </div>
    <div class="center">
        <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
    </div>
    <div class="right flex end">
        <div class="phone flex wrap end align_center">
            <i class="fa fa-phone"></i><a href="tel:+74952114504">8(495)211-45-04</a><br>
            <i class="fa fa-clock-o opening_hours"></i><span style="font-size: 12px;" class="opening_hours">с 7:00 до 23:00 без выходных</span>
        </div>
        <div class="login">
            <a href="#" class="btn">Войти</a>
        </div>
    </div>
</header>	