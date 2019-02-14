<?php get_header('single'); ?>

<div class="banner flex" style="background:url( <?php echo get_the_post_thumbnail_url( $post->ID, 'full' );?>)">
	<div class="content">	
		<h1><?php the_title();?></h1>
	</div>
 </div>

<div class="breadcrumbs">
	<?php /* my_breadcrumb(); */?>
</div>

<div class="block_notfullsize">
	<div class="content">
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<div class="blog_navi flex around wrap">
				<div><i class="fa fa-arrow-circle-left"></i><?php previous_post_link('<strong>%link</strong>'); ?></div>
				<div><?php next_post_link('<strong>%link</strong>'); ?><i class="fa fa-arrow-circle-right"></i></div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>