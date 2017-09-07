<?php get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">
		<div class="content_top conleft"></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content(__('More &raquo;', 'kubrick')); ?>
				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
				<div class="content_date">
					<div class="datebg">
						<span class="day"><?php the_time('d') ?></span>
						<span><?php the_time('F') ?></span>
						<span><?php the_time('Y') ?></span>
					</div>
				</div>
				<div class="pageedit">
					<span><?php edit_post_link(__('Edit', 'kubrick')); ?></span>
				</div>
		</div>
		<?php endwhile; endif; ?>

	<?php comments_template(); ?> 
	<div class="content_foot conleft"></div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
 