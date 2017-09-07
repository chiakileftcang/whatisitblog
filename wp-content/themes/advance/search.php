<?php get_header(); ?>
 
 <!-- head select -->   
	
        <?php get_template_part('headers/part','headsingle'); ?>
<!-- / head select --> 

<div class="row ">
 
<div id="search_term">
<h2 class="postsearch"><?php printf( __( 'Search Results for: %s', 'advance' ), '<span>' . esc_html( get_search_query() ) . '</span>'); ?></h2>
<div class="h-line"></div>
            
      <h5 class="search_count"><?php _e('Total posts found - ', 'advance'); ?> <?php global $wp_query; echo $wp_query->found_posts; wp_reset_query(); ?></h5>
      <ul class="medium-6 medium-centered columns">
            <?php get_search_form(); ?>
                  </ul>  
            </div>
   
<!--Content-->
  <?php if( get_theme_mod( 'layout_select' )){ ?>

<?php $template_parts_advance = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
        get_template_part('layout/part',''.$template_parts_advance .''); ?>
 <?php }else{ ?>
 
 <?php get_template_part('layout/part','layout1'); ?>
        <?php } ?>  

</div>
<?php get_footer(); ?>