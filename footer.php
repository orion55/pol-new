<footer class="lazy">
    <link rel='stylesheet' href='/wp-content/themes/polclean/jquery-ui.theme.min.css' type='text/css' media='all'/>
    <div class="container flex between">
        <div class="left">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="lazy">
            </div>
            <div>
                ООО "Чистота с любовью +"<br>
                ИНН: 7726392488
            </div>
            <div>
                <a href="#">Соглашение о конфиденциальности</a>
            </div>
        </div>
        <div class="right flex wrap">
            <div class="top">
                <?php if (!dynamic_sidebar('footer_menu')): ?><?php endif; ?>
            </div>
            <div class="bottom flex between align_center">
                <div class="left">
                    <a href="https://www.facebook.com/polclean.ru/" target="_blank"><img
                                src="<?php bloginfo('template_url'); ?>/images/icons/fb.png"></a>
					 <a href="https://twitter.com/polclean" target="_blank"><img
                                src="<?php bloginfo('template_url'); ?>/images/icons/tvitter2.png"></a>
                    <a href="https://vk.com/polcleanru" target="_blank"><img
                                src="<?php bloginfo('template_url'); ?>/images/icons/vk.png"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icons/ok.png"></a>
                    <a href="https://www.instagram.com/polclean/" target="_blank"><img
                                src="<?php bloginfo('template_url'); ?>/images/icons/inst.png"></a>
                    <a href="https://plus.google.com/+PolClean" target="_blank"><img
                                src="<?php bloginfo('template_url'); ?>/images/icons/google.png"></a>
                </div>
                <div class="center">
                    Разработка и продвижение <a href="http://www.smartsolutions.today" target="_blank">smartsolutions.today</a>
                </div>
                <div class="right">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/tinkoff.png">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/yandex.png">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/visa.png">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/mastercard.png">
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
