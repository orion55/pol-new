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


<!--<script type="text/javascript" src="<?php /*bloginfo('template_url'); */?>/js/jquery.nicescroll.min.js"></script>
<script>
    jQuery(window).load(function () {

        doc_w = jQuery(document).width();
        if (doc_w > 800) {
            jQuery(".menu_block .container").niceScroll({
                smoothscroll: false,
                cursorcolor: "#c2c2c2",
                cursorborder: "1px solid #c2c2c2",
                autohidemode: "scroll",
                cursorfixedheight: "100"
            });
        }
    });
</script>-->
<?php wp_footer(); ?>
<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P59PRL3"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i, cid) {
        w[l] = w[l] || [];
        w.pclick_client_id = cid;
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P59PRL3', '1002428');</script>
<!-- End Google Tag Manager -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter45570192 = new Ya.Metrika({
                    id: 45570192,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/45570192" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-104346290-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+79160021512", // WhatsApp number
            viber: "+79160021512", // Viber number
            vkontakte: "polcleanru", // VKontakte page name
            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Здравствуйте, чем мы можем Вам помочь? Просто отправьте нам сообщение.", // Text of greeting message
            call_to_action: "Ваш вопрос?", // Call to action
            button_color: "#FF318E", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,viber,vkontakte" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

</body>
</html>
