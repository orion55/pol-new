<?php get_header('page'); ?>

<div class="banner flex" style="background:url( <?php echo get_the_post_thumbnail_url( $post->ID, 'full' );?>)">
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