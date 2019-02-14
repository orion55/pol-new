<?php
/*
 * Template name: service_cleaning
 */
?>
<?php get_header();
$user = wp_get_current_user();
$userid = $user->ID; ?>
    <script language="javascript">
        jQuery(document).ready(function ($) {
            var a = document.getElementById("user");
            var b = document.getElementById("service");
            a.value = "<?=$userid?>";
            b.value = "<?php the_title();?>";
        });
    </script>

    <script>

        function AjaxFormRequest(result_id, add_pr, url) {

            jQuery.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: jQuery("#" + add_pr).serialize(),
                success: function (response) {

                    document.getElementById(result_id).innerHTML = response;
                },
                error: function (response) {
                    document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
                }
            });


        }
    </script>

    <div class="costs_for_calculator">
        <div class="cost_to_50"><?php echo(get_post_meta($post->ID, 'cost_to_50', true)); ?></div>
        <div class="cost_from_50_to_100"><?php echo(get_post_meta($post->ID, 'cost_from_50_to_100', true)); ?></div>
        <div class="cost_from_100"><?php echo(get_post_meta($post->ID, 'cost_from_100', true)); ?></div>
        <div class="footage_from"><?php echo(get_post_meta($post->ID, 'footage_from', true)); ?></div>
    </div>

    <div class="banner flex" style="background:url( <?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)">
        <div class="content">
            <h1 class="service_page"><?php the_title(); ?></h1>
            <?php if (!dynamic_sidebar('index_services_list')): ?><?php endif; ?>
        </div>
    </div>
    <div class="block_notfullsize">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="block_fullsize questions">
        <h2>Вопросы и <i>ответы</i></h2>
        <div class="fullsize_container">
            <div class="container">
                <?php if (!dynamic_sidebar('question_answers')): ?><?php endif; ?>
            </div>
        </div>
    </div>

    <div class="block_notfullsize">
        <?php if (!dynamic_sidebar('seo_text')): ?><?php endif; ?>
    </div>

<?php get_footer(); ?>