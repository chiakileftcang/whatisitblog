	<div id="sidebar" role="complementary">
		<!-- Search Start -->
		<div id="search">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<span class="st"><input type="text" value="" name="s" id="s" class="searchtxt" /></span><span class="ss"><input type="submit" name="submit" value="" class="searchsm" /></span>
			</form>
		</div>
		<div class="clear"></div>
		<!-- Search End -->
		<ul>
			<?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> 
		<?php }?>
			<?php endif; ?>
					</ul>
  </div>
