
<div class="branding-single" <?php if ( function_exists( 'header_image' ) && header_image() ) : ?>style="background:url(<?php header_image(); ?>)no-repeat center center /cover;" <?php endif; ?>>
 <div class="row"> 
 
 
     	
    	<!--LOGO START-->
        <div id="site-title">
        <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
        	<?php advance_the_custom_logo(); ?>
       		 <?php else : ?>
   			<h1 class="site-title">	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	    	
        	<?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
         <?php endif;?>
       
        
        </div>
        
       
       
       <div id="menu_wrap">
       <?php $advance_search_checkbox = get_theme_mod('advance_search_box',1);?>
<?php if( isset($advance_search_checkbox) && $advance_search_checkbox == 1):?>

 <div class="social-advance">
						<div class="search-toggle">
                			 <div class="search-icon">
                        <i class="fa fa-search"></i>
                        <div class="advance-search">
                            <div class="close">&times;</div>
                                 <?php get_search_form(); ?>
                         <div class="overlay-search"> </div> 
                        </div>
                    </div> 
            			</div>
                 	</div>
        <?php endif; ?>
  
  
    <?php $advance_social1_checkbox = get_theme_mod('advance_social1_checkbox',1);?>
<?php if( isset($advance_social1_checkbox) && $advance_social1_checkbox == 1 ):?>

     
       <!--social-->    
          <?php get_template_part('parts/social','loop'); ?>
                 
                 <?php endif?>
                 
         <!--LOGO END-->
         <!--MENU STARTS-->
       <h3 class="menu-toggle"><?php _e( 'Menu', 'advance' ); ?></h3>
        <div id="navmenu">
        
		
		<?php 
		wp_nav_menu( array( 
		
		  'container_class' => 'menu-header', 
		  'theme_location' => 'primary' 
		  ) ); 
		 
		 ?> 
       
    </div>
         
    </div>
        
      </div>
      </div>
      
      

             <!--MENU END-->
<a id="showHere"></a>