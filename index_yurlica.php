<?php
/*
 * Template name: index_yurlica_template
 */
  ?>
<?php get_header(); ?>

 <div class="banner flex" style="background:url( <?php echo get_the_post_thumbnail_url( $post->ID, 'full' );?>)">
	<div class="content">
		<?php if(!dynamic_sidebar('index_services_list')): ?><?php endif; ?>
	</div>
 </div>
 <div class="block_notfullsize">
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
 </div>

 <div class="block_fullsize service_block">
	<h2>Как мы будем <i>делать уборку?</i></h2>
	<p class="undertitle">Спорим, вы вряд ли делаете большую часть из нашего списка даже раз в месяц?</p>
	<div class="fullsize_container lazy">
		<div class="container">
			<?php if(!dynamic_sidebar('widgetkit_clean_fizlico')): ?><?php endif; ?>
		</div>
	</div>
 </div>

<div class="block_notfullsize">
	<h2>Наши <i>преимущества</i></h2>
	<div class="content">
		<?php if(!dynamic_sidebar('our_advantages')): ?><?php endif; ?>
	</div>
</div>

<div class="block_fullsize questions">
	<h2>Вопросы и <i>ответы</i></h2>
	<div class="fullsize_container">
		<div class="container">
			<?php if(!dynamic_sidebar('question_answers')): ?><?php endif; ?>
		</div>
	</div>
</div>

<div class="block_notfullsize">
	<?php if(!dynamic_sidebar('seo_text')): ?><?php endif; ?>
</div>

<?php get_footer(); ?>
