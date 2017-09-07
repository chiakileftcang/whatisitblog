
<html <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>
    <?php wp_title('&laquo;', true, 'right'); ?><?php //bloginfo('name'); ?>___道子千秋
</title>
<?php
$description = '';
$keywords = '';

if (is_home() || is_page()) {
   // 将以下引号中的内容改成你的主页description
   $description = "被玩壞的小道童";
   // 将以下引号中的内容改成你的主页keywords
   $keywords = "韻秋,韵秋,小道童,编程,php,黑客,道子千秋";
}
elseif (is_single()) {
   $description1 = get_post_meta($post->ID, "description", true);
   $description2 = str_replace("\n","",mb_strimwidth(strip_tags($post->post_content), 0, 200, "…", 'utf-8'));

   // 填写自定义字段description时显示自定义字段的内容，否则使用文章内容前200字作为描述
   $description = $description1 ? $description1 : $description2;
   
   // 填写自定义字段keywords时显示自定义字段的内容，否则使用文章tags作为关键词
   $keywords = get_post_meta($post->ID, "keywords", true);
   if($keywords == '') {
      $tags = wp_get_post_tags($post->ID);    
      foreach ($tags as $tag ) {        
         $keywords = $keywords . $tag->name . ", ";    
      }
      $keywords = rtrim($keywords, ', ');
   }
}
elseif (is_category()) {
   // 分类的description可以到后台 - 文章 -分类目录，修改分类的描述
   $description = category_description();
   $keywords = single_cat_title('', false);
}
elseif (is_tag()){
   // 标签的description可以到后台 - 文章 - 标签，修改标签的描述
   $description = tag_description();
   $keywords = single_tag_title('', false);
}
$description = trim(strip_tags($description));
$keywords = trim(strip_tags($keywords)).",韻秋,韵秋,小道童,编程,php,黑客,道子千秋";;
?>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link title="RSS 2.0" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" rel="alternate" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/DD_belatedPNG.js"></script>
<script>DD_belatedPNG.fix('.nav li,.searchsm'); </script> 
<![endif]-->
<?php if(is_singular()) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body  itemscope="">

   <div id="fullwrapper">
       <div class="wrap">
           <div class="header">
               <div class="logo"><p><a href="<?php echo get_option('home'); ?>/"><font size="8" face="KaiTi"><?php bloginfo('name'); ?></font></a></p><font size="5" face="KaiTi"><?php bloginfo('description'); ?></font></div>
               	 <ul class="nav">
                 		<li><a title="<?php _e('Home', 'default'); ?>" href="<?php echo get_settings('home'); ?>/"><?php _e('Home', 'default'); ?></a></li>
                 		
	<?php wp_list_pages('title_li=&depth=-1'); ?>
                </ul>
           </div>
       </div>
       <div class="wrap">