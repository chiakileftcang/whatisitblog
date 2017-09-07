<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">
		<div class="content_top conleft"></div>
	<div class="links">

<h2><?php _e('Archives by Month:', 'kubrick'); ?></h2>
	<ul class="archives">
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

</div>

<div class="content_foot conleft clear"></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>