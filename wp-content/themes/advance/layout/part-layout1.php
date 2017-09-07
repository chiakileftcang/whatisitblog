  <div class="lay1 wow fadeInup"> 
  
 
  
  <?php if(is_front_page()) { 
      $args_advancepost = array(
                     
                     'post_type' => 'post',
                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
					 
                  
                     );
      
     new WP_Query( $args_advancepost ); 
     
  } ?>
  
<?php wp_reset_postdata(); ?>
  			<?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                  <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                      
                       
                  <div class="matchhe post_warp large-4 medium-6 columns  ">
                   					<div class="single_latest_news">
              
                  						<div class="latest_news_image">
                       <!--CALL TO POST IMAGE-->
                             
                       <?php  if ( get_the_post_thumbnail() != '' ) {
						        
								 echo '<div class=" imgwrap">';
    
                                 echo '<a href="'; the_permalink(); echo '" >';
                                 the_post_thumbnail();
                                 echo '</a>';
                                 echo '</div>';
                                 } else {
    
                                echo '<div class=" imgwrap">';
                                echo '<a href="'; the_permalink(); echo '">';
     							echo '<img src="';
     							echo esc_url (advance_catch_that_image());
     							echo '" alt="" />';
     							echo '</a>';
    							echo '</div>';
    					};?>
													</div><!-- post image -->
                  
                  
                  <div class=" latest_news_desc">
               						<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                      				<h4><?php the_author(); ?> | <?php the_time( get_option('date_format') ); ?></h4>
             						<?php the_excerpt(); ?>
             						<a class="read_more" href="<?php echo esc_url(get_permalink());?>"><?php echo esc_attr__('Read more','advance');?></a>
                   			  </div><!-- latest_news_desc-->
                 		</div>
               		</div>
                    </div>
              <?php endwhile ?> 
  
              <?php endif ?>
          <?php get_template_part('pagination'); ?>  
  </div><!-- lay-->
              
                    
       