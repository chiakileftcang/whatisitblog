<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package advance
 */

get_header(); ?>

			<!-- head select -->   
  <?php $advance_slider_enabel = get_theme_mod('advance_slider_enabel',1);?>
	<?php if( isset($advance_slider_enabel) && $advance_slider_enabel == 1 ):?> 
       <?php $advance_header_checkbox = get_theme_mod('advance_header_checkbox',1);?>
       
       		<?php if( isset($advance_header_checkbox) && $advance_header_checkbox == 1){ ?>
      			 <?php get_template_part('headers/part','head1'); ?>
        		<?php } ?>
        
             <?php if( isset($advance_header_checkbox) && $advance_header_checkbox == 0){ ?>
          <?php get_template_part('headers/part','headsingle'); ?>
        <?php } ?> 
     <?php else:?> 
  <?php get_template_part('headers/part','headsingle'); ?>
  <div class="clearfix"></div>
 <?php endif?> 
<!-- / head select --> 

	<?php if (  is_front_page() || is_home() ) { ?>
  			<?php $advance_slider_enabel = get_theme_mod('advance_slider_enabel',1);?>
    			<?php if( isset($advance_slider_enabel) && $advance_slider_enabel == 1 ):?>

					 <!--Slider-->
			<div class="clearfix"></div>
		<?php endif?>
	<?php } ?> 

		<div class="clearfix"></div>	

	<?php if ( is_active_sidebar( 'sidebar_frontpage' ) ) :?>
		<div id="front-widget">
			<?php	dynamic_sidebar( 'sidebar_frontpage' );?>
         </div>
	<?php endif;?>
    
    <?php if ( !is_active_sidebar( 'sidebar_frontpage' ) ) : ?>
     <?php if(is_customize_preview()){ ?>
                                        <div class="replace_widgets">
										<?php _e('You can add Advance front page Widgets Here for service block,welcome , latest post etc.','advance'); ?> <?php _e('Customize => theme option => Frontpage widget area','advance'); ?></a>
                                        </div>
                                <?php } ?> 
                                <?php endif; ?>
                                

 <?php if(is_customize_preview()){ ?>
  <?php $value = get_theme_mod( 'advance_latest_post', true ); ?>
 <div class="<?php echo ( $value ) ? 'advance-latest-on' : 'advance-latest-off '; ?> ">
                                        <div class="replace_widgets ">
										<?php _e('You can remove latest Post section','advance'); ?>
                                         <?php _e('Customize => theme option => General setting=>Disable Latest post in front page','advance'); ?>
                                         </div>
                                        </div>
                                <?php } ?> 
                                
                                
                                
 <?php $value = get_theme_mod( 'advance_latest_post', true ); ?>
 <div class="<?php echo ( $value ) ? 'advance-latest-on' : 'advance-latest-off '; ?> ">
		<div id="content  ">
  		<div class="row">
    		<div class="large-9 columns <?php if ( !is_active_sidebar( 'sidebar' ) ){ ?> nosid <?php }?>">	
  					<?php if ( have_posts() ) : ?>
			
						<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php
								/*
							 	* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
					 		 	* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 			*/
								get_template_part( 'content', get_post_format() );
								?>

						 <?php endwhile; ?>

			 		<?php get_template_part('pagination'); ?>  

				<?php else : ?>
               
			<?php get_template_part( 'content', 'none' ); ?>
			
		<?php endif; ?>
		</div><!--POST END--> 
 
 			<div class=" wow fadeIn large-3 small-12 columns"> 
   
   				<?php get_sidebar();?>

			</div><!--sidebar END--> 
	 </div><!--row END-->
</div><!--content END-->
</div>		

<?php get_footer(); ?>
