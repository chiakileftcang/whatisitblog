<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<div id="content" >
	<div class="content_top conleft"></div>
	<div class="links">
<ul>
<?php wp_list_bookmarks(); ?>
</ul>
</div>

<div class="content_foot conleft clear"></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
 