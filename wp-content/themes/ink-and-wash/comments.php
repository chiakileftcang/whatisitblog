<?php
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	
	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'kubrick'); ?></p> 
	<?php
		return;
	}
?>
<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
<h4 id="comments" class="clear"><?php comments_number(__('No Responses', 'kubrick'), __('One Response', 'kubrick'), __('% Responses', 'kubrick'));?> <?php printf(__('to &#8220;%s&#8221;', 'kubrick'), the_title('', '', false)); ?></h4>
	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
	</ol>
 <?php else : ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php else : ?>
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>

<div class="comments-navi"><?php paginate_comments_links('prev_text=Prev&next_text=Next');?></div>

<?php if ( comments_open() ) : ?>

<div id="respond">
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<h4 class="clear"><?php comment_form_title( __('Leave a Reply', 'kubrick'), __('Leave a Reply for %s' , 'kubrick') ); ?></h4>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'kubrick'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>

<?php if ( is_user_logged_in() ) : ?>
<p class="smilies"><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.', 'kubrick'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'kubrick'); ?>"><?php _e('Log out &raquo;', 'kubrick'); ?></a></p>
<?php else : ?>

<?php if ( $comment_author != "" ) : ?>
	<script type="text/javascript">function setStyleDisplay(id, status){document.getElementById(id).style.display = status;}</script>
<?php printf(__('Welcome <strong>%s</strong> '), $comment_author) ?>
	<span id="show_author_info"><a href="javascript:setStyleDisplay('author_info','');setStyleDisplay('show_author_info','none');setStyleDisplay('hide_author_info','');">[change]</a></span>
	<span id="hide_author_info"><a href="javascript:setStyleDisplay('author_info','none');setStyleDisplay('show_author_info','');setStyleDisplay('hide_author_info','none');">[off]</a></span>
<?php endif; ?>
<div id="author_info">
<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><?php _e('Name', 'kubrick'); ?> <?php if ($req) _e(" ", "kubrick"); ?></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><?php _e('Mail (will not be published)', 'kubrick'); ?> <?php if ($req) _e(" ", "kubrick"); ?></label></p>

<p><input type="text" name="url" id="url" value="<?php echo  esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
<label for="url"><?php _e('Website', 'kubrick'); ?></label></p>
	</div>
<?php if ( $comment_author != "" ) : ?>
	<script type="text/javascript">setStyleDisplay('hide_author_info','none');setStyleDisplay('author_info','none');</script>
<?php endif; ?>
	
<?php endif; ?>
<p><textarea name="comment" id="comment" cols="5" rows="10" tabindex="4" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" class="subin" value="<?php _e('','kubrick'); ?>" />
 <?php comment_id_fields(); ?> 
</p><div id="cancel_reply"><?php cancel_comment_reply_link() ?></div>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>
