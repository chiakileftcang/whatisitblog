<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
?>

<div class="backend_wrapper">
    	<div class="back_header">
            <div class="center">
            	<h3><a><?php _e('advance','advance'); ?></a><span><?php $the_theme = wp_get_theme(); echo $the_theme->get('Version');?></span></h3>
               
           </div> 
       </div>
         <div id="verticalTab">
<ul class="resp-tabs-list">
<li class="btn btn-4 btn-4c icon-arrow-right"><?php echo esc_attr__('Wellcome','advance');?></li>
<li class="btn btn-4 btn-4c icon-arrow-right"><?php echo esc_attr__('setup static image','advance');?></li>
<li class="btn btn-4 btn-4c icon-arrow-right" style="color:#B70000" ><?php echo esc_attr__('How to make home page like demo !!','advance');?></li>
<li class="btn btn-4 btn-4c icon-arrow-right"><?php echo esc_attr__('Support','advance');?></li>

</ul>
<div class="resp-tabs-container">
<div>
<p> <div class="blocks_wrap">
        	<div class="center">
            
                <!--BLOCK 1-->
                <div class="block">
                <i class="fa fa-cogs fa-4x" aria-hidden="true"></i>
                    <p><?php _e('Customize your website live with our improved customizer, which cuts down the website building time in half.','advance'); ?></p>
                    <a href="<?php echo esc_url(admin_url('/customize.php')); ?>" target="_blank" ><?php _e('Customize','advance'); ?></a>
                </div>
                <!--BLOCK 2-->
                <div class="block">
                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                    <p><?php _e('advance is extensively documented. You will find useful information about the theme ranging from introductions to advanced features.','advance'); ?></p>
                    <a href="<?php echo esc_url('http://advance.imonthemes.com/docs/');?>" target="_blank"  ><?php _e('Documentation','advance'); ?></a>
                </div>
                 <!--BLOCK 1-->
                <div class="block">
                 <i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i>
                    <p><?php _e('Upgrade to Pro for Unlock all Features','advance'); ?></p>
                    <a href="<?php echo esc_url('http://www.imonthemes.com/advance-pro/');?>" target="_blank" ><?php _e('Upgrade to Pro','advance'); ?></a>
                </div>

                
            </div></div></p>
</div>
<div>
<p><h3><?php _e('Set Up setup static image :','advance'); ?></h3>
<ol>
 	<li><?php _e('go to post =&gt; add new =&gt; add your post title and description =&gt; Publish','advance'); ?></li>
 	<li><?php _e('If you dont want to show this post in latest post section .then crate a new category and "static-image" .Put this post into this category','advance'); ?></li>
 	<li><?php _e('Go to customize =&gt; Slider setup =&gt; chose post for slider','advance'); ?></li>
 	<li><?php _e('Upload static slider image','advance'); ?> </li>
</ol>
<?php _e('Thats all !!','advance'); ?>
<ol>
 	<li><?php _e('Setup Post for','advance'); ?> <span class="description customize-control-description"><?php _e('static-image','advance'); ?></span></li>
</ol>
<img class="size-medium wp-image-198 alignleft" src="<?php echo  esc_url(get_template_directory_uri().'/inc/admin/img/1.png');?>" alt="1" width="84" height="300" />
<p style="text-align: center;"><img class="alignleft wp-image-199 size-large" src="<?php echo  esc_url(get_template_directory_uri().'/inc/admin/img/2.png');?>" alt="2" width="630" height="338" />2. <?php _e('Setup static-image from customize','advance'); ?></p>
<img class="aligncenter wp-image-200 size-large" src="<?php echo  esc_url(get_template_directory_uri().'/inc/admin/img/3.png');?>" alt="3" width="500" height="400" style="margin-left:5%;" />
</p>
</div>
<div>
<p>



<ol style="text-align: left;">
<li>
<h3><strong><?php _e('How to replace front page latest post area with Advance widgets ','advance'); ?></strong></h3>
</li>
</ul>
<li style="text-align: left;"><?php _e('Go to customize  =&gt; theme option =&gt; Front Page widgets area  =&gt; Add a widgets =&gt; select advance custome widgets ','advance'); ?></li>
<li style="text-align: left;"><?php _e('Check screenshot','advance'); ?></li>
<img class="alignnone wp-image-16" src="<?php echo  esc_url(get_template_directory_uri().'/inc/admin/img/fron-widgest.jpg');?>" alt="service" width="824" height="375" />


 	
<h3><strong><?php _e('Menu','advance'); ?></strong></h3>
</li>
</ul>
<?php _e('For show menu in mobile and any device you need to set up menu','advance'); ?>
<ul>
 	<li>
<h3><strong><?php _e('How to setup menu ?','advance'); ?></strong></h3>
</li>
</ul>
<?php _e('For tutorial of menu check this link :','advance'); ?> <a href="<?php echo  esc_url('https://codex.wordpress.org/WordPress_Menu_User_Guide');?>" target="_blank"><?php _e('Menu setup','advance'); ?></a>

</p>
</div>
<div>
<p> 
<a href="<?php echo  esc_url('https://wordpress.org/support/theme/advance');?>" target="_blank" class="free_support"><button class="btn btn-2 btn-2e"><?php _e('Free Support','advance'); ?></button></a>
<a href="<?php echo  esc_url('http://www.imonthemes.com/imon-themes-support-forums/');?>" target="_blank" class="free_support"><button class="btn btn-2 btn-2f"><?php _e('Pro Support','advance'); ?></button></a>
</p>
</div>
</div>
</div>
<br />
<div style="height: 30px; clear: both"></div>
</div>
        
        
    </div>