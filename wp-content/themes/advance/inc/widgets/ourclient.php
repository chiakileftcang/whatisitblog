<?php

/**************************/
/******Our Client widget */
/************************/



class advance_ourclient extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'ctUp-ads-advanceclietwidget',
			__( 'Advance - Our Client/Team', 'advance' )
		);
	}

    function widget($args, $instance) {
		

        extract($args);
		$content_bg = isset( $instance['content_bg'] ) ? $instance['content_bg'] : '#ccc';
		
		$tilte_color = isset( $instance['tilte_color'] ) ? $instance['tilte_color'] : '';
		$subtilte_color = isset( $instance['subtilte_color'] ) ? $instance['subtilte_color'] : '';
		

        echo $before_widget;

        ?> 
          <div id="advance-client" style="background-color:<?php echo $content_bg ;?>;">
		 <div class="row">
        	<?php if (!empty($instance['title']) || !empty($instance['sub_title'])): ?>
 					<div class="section-header wow fadeIn animated " data-wow-duration="1s">
 
						 <?php if (!empty($instance['title'])): ?>
                            	<h2 class="section-title wow fadeIn" style=" color:<?php echo $tilte_color ;?>"  >
							
									<?php echo apply_filters('widget_title', $instance['title']); ?>
  								</h2>
						<?php endif; ?>
                         <?php if (!empty($instance['sub_title'])): ?>
                            <div class="colored-line"></div>
								<div class="section-description">
                                	<h4 style="color:<?php echo $subtilte_color ;?>"><?php echo  htmlspecialchars_decode(apply_filters('widget_title', $instance['sub_title'])); ?></h4></div>
                        		<div class="colored-line"></div>
                         <?php endif;?>
       			 </div><!--section head end-->
                       
          <?php endif; ?>


        <div class="clients-advance">
        
        
        <ul>
        
        <?php if( !empty($instance['image_uri1']) ): ?>
				<li class=" wow fadeInRight medium-2  small-5 columns">
                
              <a  href="<?php echo esc_url($instance['client_uri1']);?>"><img src="<?php echo esc_url($instance['image_uri1']);?> "/></a>
                
                
                </li>
                <?php endif; ?>
                
                
         <?php if( !empty($instance['image_uri2']) ): ?>
				<li class="wow fadeInRight medium-2  small-5 columns">
                
             <a  href="<?php echo esc_url($instance['client_uri2']);?>"><img src="<?php echo esc_url($instance['image_uri2']);?> "/></a>
                
                
                </li>
                <?php endif; ?>
          
             <?php if( !empty($instance['image_uri3']) ): ?>
				<li class="wow fadeInRight medium-2  small-5 columns">
                
             <a  href="<?php echo esc_url($instance['client_uri3']);?>"><img src="<?php echo esc_url($instance['image_uri3']);?> "/></a>
                
                
                </li>
                <?php endif; ?>
                
                      
           <?php if( !empty($instance['image_uri4']) ): ?>
				<li class="wow fadeInRight medium-2  small-5  columns">
                
             <a  href="<?php echo esc_url($instance['client_uri4']);?>"><img src="<?php echo esc_url($instance['image_uri4']);?> "/></a>
                
                
                </li>
                <?php endif; ?>

          
           <?php if( !empty($instance['image_uri5']) ): ?>
				<li class="wow fadeInRight medium-2  small-5  columns">
                
             <a  href="<?php echo esc_url($instance['client_uri5']);?>"><img src="<?php echo esc_url($instance['image_uri5']);?> "/></a>
                
                
                </li>
                <?php endif; ?>

		
                
                </ul>
                </div>
                </div>
                </div>
                
                
<?php
        echo $after_widget;}

    function update($new_instance, $old_instance) {

        $instance = $old_instance;
		
		/*Main title */
		        /*heading */
				$instance['title'] = sanitize_text_field($new_instance['title']);
				$instance['sub_title'] = stripslashes(wp_filter_post_kses($new_instance['sub_title']));
				
				$instance['content_bg'] = strip_tags($new_instance['content_bg']);
				$instance['tilte_color'] = strip_tags($new_instance['tilte_color']);
				$instance['subtilte_color'] = strip_tags($new_instance['subtilte_color']);
				
		/*Client 1 */
        
        
		$instance['image_uri1'] = strip_tags( $new_instance['image_uri1'] );
		$instance['client_uri1'] = strip_tags( $new_instance['client_uri1'] );
		
		/*Client 2 */
        
        
		$instance['image_uri2'] = strip_tags( $new_instance['image_uri2'] );
		$instance['client_uri2'] = strip_tags( $new_instance['client_uri2'] );
        
		/*Client 3 */
  		$instance['image_uri3'] = strip_tags( $new_instance['image_uri3'] );
		$instance['client_uri3'] = strip_tags( $new_instance['client_uri3'] );
        
		/*Client 4 */
        

		$instance['image_uri4'] = strip_tags( $new_instance['image_uri4'] );
		$instance['client_uri4'] = strip_tags( $new_instance['client_uri4'] );
        
		/*Client 5 */
        
        
		$instance['image_uri5'] = strip_tags( $new_instance['image_uri5'] );
		$instance['client_uri5'] = strip_tags( $new_instance['client_uri5'] );

	

        return $instance;}
	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */


    function form($instance) {
		/* Set up some default widget settings. */
		$defaults = array(
		
		'content_bg' => '#ffffff',
	    'tilte_color'=>'#2c3e50',
		'subtilte_color'=>'#AAA',
		
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		

		
		
        ?>
        
          <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'advance'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" 
            value="<?php if( !empty($instance['title']) ): echo $instance['title']; endif; ?>" class="widefat">
        </p>
        
        
          <p>
            <label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Sub title ', 'advance'); ?></label><br/>
            <textarea class="widefat" rows="4" cols="10" name="<?php echo $this->get_field_name('sub_title'); ?>" 
            id="<?php echo $this->get_field_id('sub_title'); ?>"><?php if( !empty($instance['sub_title']) ): echo htmlspecialchars_decode($instance['sub_title']); endif; ?></textarea>
        </p>

        <!--- Main title-->
<div class="accordion_advance">
                      
        <!--- Client 1-->
        
       <h4 > <?php _e('Row 1', 'advance') ?></h4>
        <div class="pane_advance">        
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri1' ); ?>"><?php _e('Image 1', 'advance') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri1'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri1']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri1' ); ?>" name="<?php echo $this->get_field_name( 'image_uri1' ); ?>" value="<?php if( !empty($instance['image_uri1']) ): echo $instance['image_uri1']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri1' ).'mpick'; ?>"><?php _e('Select Image', 'advance') ?></a>
                </div>
                    </div>


        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri1'); ?>"><?php _e('Link 1','advance'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri1'); ?>" id="<?php echo $this->get_field_id('client_uri1'); ?>" value="<?php if( !empty($instance['client_uri1']) ): echo esc_url($instance['client_uri1']); endif; ?>" class="widefat">
		</p>
            </div>    
       
         
        

        <!--- Client 2-->
       <h4><?php _e('Row 2', 'advance') ?></h4>
        

<div class="pane_advance">
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri2' ); ?>"><?php _e('Image 2', 'advance') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri2'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri2']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri2' ); ?>" name="<?php echo $this->get_field_name( 'image_uri2' ); ?>" value="<?php if( !empty($instance['image_uri2']) ): echo $instance['image_uri2']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri2' ).'mpick'; ?>"><?php _e('Select Image', 'advance') ?></a>
                </div>
            </div>
        

        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri2'); ?>"><?php _e('Link 2','advance'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri2'); ?>" id="<?php echo $this->get_field_id('client_uri2'); ?>" value="<?php if( !empty($instance['client_uri2']) ): echo esc_url($instance['client_uri2']); endif; ?>" class="widefat">
		</p>
                
        </div>                
   
       

<h4 > <?php _e('Row 3', 'advance') ?></h4>
<div class="pane_advance"> 
		
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri3' ); ?>"><?php _e('Image 3', 'advance') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri3'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri3']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri3' ); ?>" name="<?php echo $this->get_field_name( 'image_uri3' ); ?>" value="<?php if( !empty($instance['image_uri3']) ): echo $instance['image_uri3']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri3' ).'mpick'; ?>"><?php _e('Select Image', 'advance') ?></a>
                </div>
            </div>
        

        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri3'); ?>"><?php _e('Link 3','advance'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri3'); ?>" id="<?php echo $this->get_field_id('client_uri3'); ?>" value="<?php if( !empty($instance['client_uri3']) ): echo esc_url($instance['client_uri3']); endif; ?>" class="widefat">
		</p>
</div>     
 
 
   <!--- Client 4-->


<h4 > <?php _e('Row 4', 'advance') ?></h4>
<div class="pane_advance"> 
		
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri4' ); ?>"><?php _e('Image 4', 'advance') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri4'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri4']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri4' ); ?>" name="<?php echo $this->get_field_name( 'image_uri4' ); ?>" value="<?php if( !empty($instance['image_uri4']) ): echo $instance['image_uri4']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri4' ).'mpick'; ?>"><?php _e('Select Image', 'advance') ?></a>
                </div>
            </div>
        

        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri4'); ?>"><?php _e('Link 4','advance'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri4'); ?>" id="<?php echo $this->get_field_id('client_uri4'); ?>" value="<?php if( !empty($instance['client_uri4']) ): echo esc_url($instance['client_uri4']); endif; ?>" class="widefat">
		</p>
</div>          
           
           <!--- Client 5-->
          
        
            <h4 > <?php _e('Row 5', 'advance') ?></h4>
         
<div class="pane_advance">		
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri5' ); ?>"><?php _e('Image 5', 'advance') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri5'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri5']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri5' ); ?>" name="<?php echo $this->get_field_name( 'image_uri5' ); ?>" value="<?php if( !empty($instance['image_uri5']) ): echo $instance['image_uri5']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri5' ).'mpick'; ?>"><?php _e('Select Image', 'advance') ?></a>
                </div>
            </div>
        

        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri5'); ?>"><?php _e('Link 5','advance'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri5'); ?>" id="<?php echo $this->get_field_id('client_uri5'); ?>" value="<?php if( !empty($instance['client_uri5']) ): echo esc_url($instance['client_uri5']); endif; ?>" class="widefat">
		</p>
        </div>
     
     
     
      </div> <!---end accordino---->
      
      <!-- Text Content Background Color Field -->
    
    <p>
			<label for="<?php echo $this->get_field_id( 'content_bg' ); ?>"><?php _e('Background Color', 'advance') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'content_bg' ); ?>" name="<?php echo $this->get_field_name( 'content_bg' ); ?>" value="<?php echo $instance['content_bg']; ?>" type="text" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'tilte_color' ); ?>"><?php _e('Main Title Color', 'advance') ?></label>
			<input class="widefat color-picker" data-alpha="true" id="<?php echo $this->get_field_id( 'tilte_color' ); ?>" name="<?php echo $this->get_field_name( 'tilte_color' ); ?>" value="<?php echo $instance['tilte_color']; ?>" type="text" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'subtilte_color' ); ?>"><?php _e('Main Sub Color', 'advance') ?></label>
			<input class="widefat color-picker" data-alpha="true" id="<?php echo $this->get_field_id( 'subtilte_color' ); ?>" name="<?php echo $this->get_field_name( 'subtilte_color' ); ?>" value="<?php echo $instance['subtilte_color']; ?>" type="text" />
		</p>
        
       
     <?php

    }

}