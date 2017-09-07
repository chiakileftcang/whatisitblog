<?php


$advance_facebook = get_theme_mod ('fbsoc_text_advance');
$advance_twitter =  get_theme_mod ('ttsoc_text_advance');
$advance_googleplus = get_theme_mod ('gpsoc_text_advance');
$advance_pinterest =  get_theme_mod ('pinsoc_text_advance');
$advance_youtube =  get_theme_mod ('ytbsoc_text_advance');
$advance_linkedin = get_theme_mod ('linsoc_text_advance');
$advance_vimeo = get_theme_mod ('vimsoc_text_advance');
$advance_flickr = get_theme_mod ('flisoc_text_advance');
$advance_rss = get_theme_mod ('rsssoc_text_advance');
$advance_instagram =  get_theme_mod ('instagram_text_advance');

?> 

<div class="social-advance">
				
                
				<?php if( !empty($advance_facebook) ):?>

         <a  href="<?php echo esc_url($advance_facebook);?>" target="_blank" title="<?php echo esc_attr__('facebook','advance')?>"><i class="fa fa-facebook "></i></a><?php endif; ?>
         
                <?php if( !empty($advance_twitter) ):?>
               <a  href="<?php echo esc_url($advance_twitter);?>" target="_blank" title="<?php echo esc_attr__('twitter','advance')?>"><i class="fa fa-twitter"></i></a><?php endif; ?>
                
                 <?php if( !empty($advance_googleplus) ):?>
                <a href="<?php echo esc_url($advance_googleplus);?>" title="<?php echo esc_attr__('Google Plus','advance')?> " target="_blank"> <i class="fa fa-google-plus"></i></a><?php endif; ?>
                
                 <?php if( !empty($advance_pinterest) ):?>
                <a href="<?php echo esc_url($advance_pinterest);?>" title="<?php echo esc_attr__('Pinterest','advance')?> " target="_blank"><i class="fa fa-pinterest-p"></i> </a><?php endif; ?>

                
                 <?php if( !empty($advance_youtube) ):?>
                <a href="<?php echo esc_url($advance_youtube);?>" title="<?php echo esc_attr__('Youtube','advance')?> " target="_blank"> <i class="fa fa-youtube"></i></a><?php endif; ?>
                
                <?php if( !empty($advance_linkedin) ):?>
               <a href="<?php echo esc_url($advance_linkedin);?>" title="<?php echo esc_attr__('linkedin','advance')?> " target="_blank"> <i class="fa fa-linkedin"></i></a><?php endif; ?>
                
                <?php if( !empty($advance_vimeo) ):?>
                <a href="<?php echo esc_url($advance_vimeo);?>" title=" <?php echo esc_attr__('Vimeo','advance')?>" target="_blank"> <i class="fa fa-vimeo"></i></a><?php endif; ?>                
                 <?php if( !empty($advance_flickr) ):?>
                 <a href="<?php echo esc_url($advance_flickr);?>" title="<?php echo esc_attr__('flickr','advance')?> " target="_blank"> <i class="fa fa-flickr"></i></a><?php endif; ?>                
                
                 <?php if( !empty($advance_rss) ):?>
                 <a href="<?php echo esc_url($advance_rss);?>" title="<?php echo esc_attr__('rss','advance')?>" target="_blank"> <i class="fa fa-rss"></i></a><?php endif; ?>                          
                
                <?php if( !empty($advance_instagram) ):?>
                 <a href="<?php echo esc_url($advance_instagram);?>" title="<?php echo esc_attr__('instagram','advance')?>" target="_blank"> <i class="fa fa-instagram"></i></a><?php endif; ?>
                 
        
   </div>