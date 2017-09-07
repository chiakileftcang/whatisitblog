<?php
/*
Template Name: Page with No sidebar
*/
?>
<?php get_header(); ?>
 <!-- head select -->   
	
        <?php get_template_part('headers/part','headsingle'); ?>
<!-- / head select --> 

<div class='h-line'></div>

</div>

<!--Content-->

	<div id="content">
		<div class="row">
			<div class="large-12 columns ">

                   <?php if(have_posts()): ?>
				   	<?php while(have_posts()): ?>
						<?php the_post();?>
               				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                
                				<div class="post_content">
                   
                    				<a class="postimg"><?php the_post_thumbnail('medium');?></a>
                   
                   
                   						<div class="metadate"> 
				  
				   							<?php
												edit_post_link(
												sprintf(
												/* translators: %s: Name of current post */
												__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'advance' ),
												get_the_title()
												),
												'<span class="edit-link">',
												'</span>'
												);
											?>
                                       </div>  
                    			</div>
                    				<div style="clear:both"></div>	
                    				<div class="post_info_wrap">
									<?php
										the_content();

										wp_link_pages( array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'advance' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '<span>',
										'link_after'  => '</span>',
										'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'advance' ) . ' </span>%',
										'separator'   => '<span class="screen-reader-text">, </span>',
										) );
									?>
                                    
                                    </div>
                    				<div style="clear:both"></div>	
             		<?php endwhile ?> 
            
               </div>   
				<div class="comments_template">
					<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					}?>
               </div>
            	<?php endif ;?>
			</div>

      
    <!--PAGE END-->
    
	</div>
   </div>

<?php get_footer(); ?>