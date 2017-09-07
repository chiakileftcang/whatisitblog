<?php
/*
 *FRONTPAGE - POSTS SECTION WIDGET
 */

 
add_action( 'widgets_init', 'advance_register_front_posts' );

/*
 * Register widget.
 */
function advance_register_front_posts() {
	register_widget( 'advance_front_posts' );
}


/*
 * Widget class.
 */
class advance_front_Posts extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */

	function __construct() {
		parent::__construct( 'advance_front_posts', __( 'Advance Posts Widget', 'advance' ), array(
			'classname'   => 'advance_front_posts postsblck',
			'description' => __( 'This Widget lets you display WordPress Posts, Pages and Woocommerce Products.', 'advance' ),
		) );
		
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {

		
		extract( $args );
		/* Our variables from the widget settings. */
		$title = isset( $instance['title'] ) ? $instance['title'] : __('Our Work', 'advance');
		$subtitle = isset( $instance['subtitle'] ) ? $instance['subtitle'] : __('Check Out Our Portfolio', 'advance');
	    $count = isset( $instance['count'] ) ? absint($instance['count']) : '6';
		$category = isset( $instance['category'] ) ? $instance['category'] : '';
		$content_bg = isset( $instance['content_bg'] ) ? $instance['content_bg'] : '#edf3f4';
		$subtitle_textcolor = isset( $instance['subtitle_textcolor'] ) ? $instance['subtitle_textcolor'] : '';
		$padtopbottom = isset( $instance['padtopbottom'] ) ? $instance['padtopbottom'] : '';
		
		

		/* Before widget (defined by themes). */
		echo $before_widget;?>
		
<div class="widgets-post-advance" style=" background-color:<?php echo esc_attr($instance['content_bg']); ?> ;  <?php if (!empty($padtopbottom)): ?>padding-top:<?php echo $padtopbottom ;?>%; padding-bottom:<?php echo $padtopbottom ;?>%;  <?php endif; ?>">	
 	
    	<div class="row">
			<?php if (!empty($instance['title']) || !empty($instance['subtitle'])): ?>
 				<div class="section-header wow fadeIn animated animated">
 
 						<?php if (!empty($instance['title'])): ?>
                         	<h2 class="section-title wow fadeIn"  >
								<?php echo apply_filters('widget_title', $instance['title']); ?>
  						 	</h2>
						<?php endif; ?>
                       		
						<?php if (!empty($instance['subtitle'])): ?>
                            <div class="colored-line" style="background:<?php echo $subtitle_textcolor ;?>;"></div>
								<div class="section-description">
                                    <h4><?php echo  htmlspecialchars_decode(apply_filters('widget_title', $instance['subtitle'])); ?></h4>
                                </div>
                           <div class="colored-line" style="background:<?php echo $subtitle_textcolor ;?>;"></div>
                        <?php endif;?>
       			</div><!--section head end-->
                       
           <?php endif; ?>
           <?php   
  	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

    $advance_args=array(
             'post_type' => 'post',
             'posts_per_page'=>$count,
			 'cat' => $category,
			 'orderby' => 'ID',
			 'order'=>'ASC',
			 'paged' => $paged,
             
         );
    $wp_query = new WP_Query($advance_args);

			?>
           <?php if ( $wp_query->have_posts() ) : ?>
			
						<?php /* Start the Loop */ ?>
							<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
<div class="matchhe post_warp large-4 medium-6 columns wow fadeInLeft page-delay  ">
                   					<div class="single_latest_news">
              
                  						<div class="latest_news_image">
                          					<!--CALL TO POST IMAGE-->
                             
                       						<?php  if ( get_the_post_thumbnail() != '' ) {
						        				echo '<a href="';esc_url( get_permalink()); echo '" >';
							         			the_post_thumbnail();
									  			echo '</a>';
									
                                 				} else {
    							 				echo '<a href="';esc_url( get_permalink()); echo '" >';
                         						echo '<img src="';
     											echo  esc_url (advance_catch_that_image());
     											echo '" alt="" />';
								 				echo '</a>';
     							
    							
    										};?>
                     		</div><!--end POST IMAGE-->
                  
                  
                  				<div class=" latest_news_desc">
               						<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                      				<h4><?php the_author(); ?> | <?php the_time( get_option('date_format') ); ?></h4>
             						<p><?php the_excerpt(); ?></p> 
             						<a class="read_more" href="<?php echo esc_url(get_permalink());?>"><?php echo esc_attr__('Read more','advance');?></a>
                   			  </div><!-- latest_news_desc-->
                 		</div>
               		</div>
                     <?php endwhile; ?>

			 		 <!--PAGINATION -->
                <div class="advance_nav">
                    <?php
                        global $wp_query;

    					$big = 999999999; // need an unlikely integer

   						 echo paginate_links( array(
        					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        					'format' => '?paged=%#%',
        					'current' => max( 1, get_query_var('paged') ),
        					'total' => $wp_query->max_num_pages
    					) );
                    ?>
                </div>
            <!--PAGINATION END-->  

				<?php else : ?>
               
			 <?php wp_reset_postdata(); ?>
			
		<?php endif; ?>

   </div>   
</div> <!-- latest POST section-->
		
		
		<?php
		/* After widget (defined by themes). */
		echo $after_widget;
		
		
	}
	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = wp_kses_post( $new_instance['title'] );
		
		/* No need to strip tags */
		$instance['subtitle'] = wp_kses_post( $new_instance['subtitle'] );
		$instance['count'] = strip_tags($new_instance['count']);
		$instance['category'] = wp_kses_post($new_instance['category']);
		
		/* Color */
		$instance['content_bg'] = advance_sanitize_hex($new_instance['content_bg']);
	   $instance['subtitle_textcolor'] = advance_sanitize_hex($new_instance['subtitlecolor']);
	   $instance['padtopbottom'] = strip_tags($new_instance['padtopbottom']);

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => __('Our Work','advance'),
		'subtitle' => __('Check Out Our Work','advance'),
		'count' => '6',
		'category' => array(),
		'content_bg' => '#edf3f4',
	    'subtitle_textcolor'=>'#176079',
		'padtopbottom' =>'2',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

        
		<!-- Posts Title Field -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'advance') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo htmlspecialchars($instance['title'], ENT_QUOTES, "UTF-8"); ?>" type="text" />
		</p>
        
        <!-- Posts subtitle Field -->
		<p>
			<label for="<?php echo $this->get_field_id( 'subtitle' ); ?>"><?php _e('Subtitle:', 'advance') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'subtitle' ); ?>" name="<?php echo $this->get_field_name( 'subtitle' ); ?>" value="<?php echo htmlspecialchars($instance['subtitle'], ENT_QUOTES, "UTF-8"); ?>" type="text" />
		</p>
        
        <!-- Posts Category Field -->
		<p>
			<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e('Categories', 'advance') ?></label>
			<span class="category_multicheck">
			<?php
				$categories = get_terms(array( 'category' ), array( 'fields' => 'ids' ));

                foreach($categories as $cat) {
            ?>
            <label><input id="<?php echo $this->get_field_id( 'category' ) . $cat; ?>" name="<?php echo $this->get_field_name('category'); ?>[]" type="checkbox" value="<?php echo $cat; ?>" <?php if(!empty($instance['category'])) { ?><?php foreach ( $instance['category'] as $checked ) { checked( $checked, $cat, true ); } ?><?php } ?>><?php echo get_cat_name($cat); ?></label><br>
            <?php
                }
            ?>
        	</span>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e('Number of Posts:', 'advance') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" value="<?php echo $instance['count']; ?>" type="text" />
		</p>


 <!-- Text Content Background Color Field -->
<p>
			<label for="<?php echo $this->get_field_id( 'content_bg' ); ?>"><?php _e('Background Color', 'advance') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'content_bg' ); ?>" name="<?php echo $this->get_field_name( 'content_bg' ); ?>" value="<?php echo $instance['content_bg']; ?>" type="text" />
		</p>
         
         <p>
			<label for="<?php echo $this->get_field_id( 'subtitle_textcolor' ); ?>"><?php _e('Subtitle text  color', 'advance') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'button_textcolor' ); ?>" name="<?php echo $this->get_field_name( 'subtitle_textcolor' ); ?>" value="<?php echo $instance['subtitle_textcolor']; ?>" type="text" />
		</p>
        
       
        
        <!-- Text Content Padding top/bottom Field -->
		<p>
			<label for="<?php echo $this->get_field_id( 'padtopbottom' ); ?>"><?php _e('Top &amp; Bottom Padding', 'advance') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'padtopbottom' ); ?>" name="<?php echo $this->get_field_name( 'padtopbottom' ); ?>" value="<?php echo $instance['padtopbottom']; ?>"  min="0" max="80" type="range" />
		</p>
        
           
        
<?php
	}
		
}
