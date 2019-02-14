<?php
/*
 * Template name: blog
 */
  ?>
 <?php get_header(); ?>
 
 <div class="banner flex">
	<div class="content">
		<h1 class="title"><?php wp_title(''); ?></h1>
	</div>
 </div>
 

 <div class="block_notfullsize">
 <?php 
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
$args = array(
	'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
	'paged'          => $current_page // текущая страница
);
query_posts( $args );
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
while(have_posts()): the_post();
	?>
	 <div class="blog_item">
		<a href="<?php the_permalink()?>" class="blog_item_title"><?php the_title()?></a>
		<div class="blog_item_date"><?php the_time('d.m.Y')?></div>
		<div class="flex between">
			<div class="blog_item_pic"><?php the_post_thumbnail() ?></div>
			<div class="blog_item_text">
				<p><?php the_excerpt()?></p>
				<a href="<?php the_permalink()?>" class="btn">Подробнее</a>
			</div>
		</div>
	</div>
	<?php
endwhile;
  ?>
  <div class="pagination">
	<?php echo paginate_links( $args ) ?>

	<!-- <a href="#">В начало</a>
	<span class="active" >1</span>
	<a href="#">2</a>
	<a href="#">3</a>
	<a href="#">4</a>
	<a href="#">В конец</a> -->
</div>
</div>
<?php get_footer(); ?>