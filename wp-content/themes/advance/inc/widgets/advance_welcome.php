<?php

/**************************/
/******Call out with 2 buttons */
/************************/



class advance_welcome_widgets extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'ctUp-ads-welcomewidgets',
			__( 'Advance -Welcome Widget ', 'advance' )
		);
	}

    function widget($args, $instance) {

        extract($args);
			$cat1 = isset( $instance['cat_block1'] ) ? $instance['cat_block1'] : '';
			$content_bg = isset( $instance['content_bg'] ) ? $instance['content_bg'] : 'rgb(255, 255, 255)';
			$padtopbottom = isset( $instance['padtopbottom'] ) ? $instance['padtopbottom'] : '';
			

        echo $before_widget;

        ?>
       
  
  <?php if (!empty($instance['cat_block1']) ): ?>
      
		<?php   
 	 $args = array(
										'post_type' => 'page',
										'page_id' => $cat1,
										'posts_per_page'=>1,
										'order'=>'ASC',);
			$wp_query_advance = new WP_Query($args);
			?>
            
		<div id="welcome-widgets" style="<?php if (!empty($instance['content_bg'])): ?> background-color:<?php echo esc_attr($instance['content_bg']); ?> ;<?php endif; ?>  
		<?php if (!empty($padtopbottom)): ?>padding-top:<?php echo $padtopbottom ;?>%; padding-bottom:<?php echo $padtopbottom ;?>%;  <?php endif; ?>">
 			<div class="row">
 				<div class="vertical">
 					<?php if (!empty($instance['cat_block1'])): ?>
 						<div class="actionbox-text-two">
                        	<?php  if($wp_query_advance->have_posts()) {?>
        						<?php  while ($wp_query_advance->have_posts()) {$wp_query_advance->the_post();?>
									<?php the_content(); ?>
                            	<?php } ?>
							<?php } ?> 
 						</div>
 					<?php endif; ?>
 
 				</div>
 			</div>
 		</div>

 <?php endif; ?>

		
<?php
        echo $after_widget;
		

    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;
       
				
		/*Content */
        
        
		$instance['cat_block1'] = strip_tags($new_instance['cat_block1']);
		
		
		/* Color */
		$instance['content_bg'] = advance_sanitize_hex($new_instance['content_bg']);
	   $instance['button_textcolor'] = advance_sanitize_hex($new_instance['button_textcolor']);
	   $instance['padtopbottom'] = strip_tags($new_instance['padtopbottom']);
	   
	  
        return $instance;

    }

    function form($instance) {
		
		
		/* Set up some default widget settings. */
		$defaults = array(
		'cat_block1'=> 'sample-page' ,
		'content_bg' => '#666',
		'padtopbottom' =>'2',
		
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		
        

 			<p>
					<label>
						<?php _e( 'Select Page for welcome content','advance' ); ?>:
						<?php wp_dropdown_pages( array(  'name' => $this->get_field_name("cat_block1"), 'selected' => $instance["cat_block1"] ) ); ?>
					</label>
				</p>
        
        
         <!-- Text Content Background Color Field -->
<p>
			<label for="<?php echo $this->get_field_id( 'content_bg' ); ?>"><?php _e('Background Color', 'advance') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'content_bg' ); ?>" name="<?php echo $this->get_field_name( 'content_bg' ); ?>" value="<?php echo $instance['content_bg']; ?>" type="text" />
		</p>
         
        
        
        <!-- Text Content Padding top/bottom Field -->
		<p>
			<label for="<?php echo $this->get_field_id( 'padtopbottom' ); ?>"><?php _e('Top &amp; Bottom Padding', 'advance') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'padtopbottom' ); ?>" name="<?php echo $this->get_field_name( 'padtopbottom' ); ?>" value="<?php echo $instance['padtopbottom']; ?>"  min="0" max="80" type="range" />
		</p>
        
        <!-- Text Content size Field -->
		
        
 <?php
	}
		//ENQUEUE CSS
   }   
		
			

			
			
	
			
			
		
	



