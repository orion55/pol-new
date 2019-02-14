<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="inner_page">
	<div class="banner flex" style="background:url( <?php bloginfo('template_url'); ?>/images/bg/404-1.jpg) center top">

	 </div>

	<div class="block_notfullsize">
		<div class="content">
			<h2><i>Извините</i>, но такой страницы не существует :(</h2>
			<p>Возможно вы ошиблись в адресе, а возможно что то пошло не так у нас. В любом случае, мы приносим Вам свои извинения.</p>
			<p>Попробуйте начать с <a href="/">главной страницы</a></p>
		</div>
	</div>
</div>
<?php get_footer();
