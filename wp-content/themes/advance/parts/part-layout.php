<?php global $advance;?>

<div class="latest-post-advance" id="latset-postsaf">
<div class="row "> 


<?php $advance_latest_blog = esc_html( get_theme_mod('advance_latest_blog',__('Latest Post ','advance')) );?>
<div id="advance-latest">
<div class="text-center">
                            <h2 class="wow fadeIn" ><?php if( !empty($advance_latest_blog) ):?>
                            
                            <?php echo $advance_latest_blog ?>
                            
                            <?php endif;?>
                     

                            </h2>
                            <div  class="small-border wow flipInY" ></div>
                        </div>
</div>	
<?php if( get_theme_mod( 'layout_select' )){ ?>

<?php $template_parts_advance = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
        get_template_part('layout/part',''.$template_parts_advance .''); ?>
   
  <?php }else{ ?>
 
 <?php get_template_part('layout/part','layout1'); ?>
        <?php } ?>  	
 </div></div>