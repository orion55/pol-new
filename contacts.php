<?php
/*
 * Template name: contacts_template
 */
  ?>

<?php get_header('page'); ?>

<div class="banner flex">
	<div class="map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaafbfff4cb0652b8a1b77d6dc657ac610f56fa04d341dcd070f3378ee273c6b6&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>
	<div class="content">	
		<h1><?php the_title();?></h1>
	</div>
 </div>

<div class="block_notfullsize">
	<div class="content">
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
 
 
<?php get_footer(); ?>