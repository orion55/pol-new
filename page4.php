<?php
/*
Template Name: Уборка помещений
*/
?>

<?php get_header('page'); ?>


<div style="width:100%; height:100%; padding: 20px 15px; background-color:#fff;">
	<div style="width:720px; height:100%; padding: 20px 15px;float:left;background-color:#fff;">
	

		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
			</div>
</div>
<div style="position:fixed; left:770px; top:120px; width:350px;background-color:#F85D96;float:right;color:#fff; padding: 20px 15px;"></div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<div class="block_notfullsize">
	<?php if(!dynamic_sidebar('seo_text')): ?><?php endif; ?>
</div>
 
<?php get_footer(); ?>