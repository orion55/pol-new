<!DOCTYPE html>
<html dir="ltr" lang="ru-RU">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <title><?php bloginfo('name');
        wp_title(); ?></title>
    <?php wp_head(); ?>
    <meta name="yandex-verification" content="1ef1b4e3e07ef0fb"/>
</head>

<body class="<?php echo(get_post_meta($post->ID, 'my_classes', true)); ?>">
<div class="menu_block flex wrap align_center center">
    <i class="fa fa-times close"></i>
    <div class="container">
        <div class="center">
            <a href="/"><img alt="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
        </div>
        <div class="phone">
            <i class="fa fa-phone"></i><a href="tel:+74952114504">8(495)211-45-04</a><br>
            <i class="fa fa-envelope-o"></i><a href="mailto:info@polclean.ru">info@polclean.ru</a><br>
            <i class="fa fa-clock-o"></i><span>с 7:00 до 23:00 без выходных</span>

        </div>
        <div class="login">
            <?php if (is_user_logged_in()): ?>
                <a href="/account/" class="rcl-login btn">Личный кабинет</a>
                <a class="btn" href="<?php echo wp_logout_url('/'); ?>"><i class="fa fa-sign-out"
                                                                           aria-hidden="true"></i><span><?php _e('Exit', 'wp-recall'); ?></span></a>
            <?php endif; ?>
            <?php if (!is_user_logged_in()): ?>
                <a href="#" class="rcl-login btn">Войти</a>
                <a href="#" class="rcl-register btn">Регистрация</a>  <?php endif; ?>
        </div>
        <?php if (!dynamic_sidebar('menu_header')): ?><?php endif; ?>
    </div>
</div>
<header class="flex wrap between align_center">
    <div class="left open_menu_btn">
        <i class="fa fa-bars"></i><span>Меню</span>
    </div>
    <div class="center">
        <a href="/"><img alt="logo" src="<?php bloginfo('template_url'); ?>/images/logo-small.png"></a>
    </div>
    <div class="right flex end">
        <div class="phone flex wrap end align_center">
            <i class="fa fa-phone"></i><a href="tel:+74952114504">8(495)211-45-04</a><br>
            <i class="fa fa-clock-o opening_hours"></i><span style="font-size: 12px;" class="opening_hours">с 7:00 до 23:00 без выходных</span>
        </div>

        <div class="login"> <?php if (!is_user_logged_in()): ?>
                <a href="#" class="rcl-login btn">Войти</a>
            <?php endif; ?>
            <?php if (is_user_logged_in()): ?>
                <a href="/account/" class="rcl-login btn">Кабинет</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="phone_mob">
        <i class="fa fa-phone"></i><a href="tel:+74952114504">8(495)211-45-04</a><br>
    </div>
</header>
