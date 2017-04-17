<?php if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) ) return; ?>
<section id="comments">
	<?php if ( comments_open() ): ?>
		<div id="comment-to-post">
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?>
		<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" name="commentform">
				<textarea name="comment" id="comment"  rows="5" tabindex="1" ></textarea>
			<?php if ( $user_ID ) : ?>
				<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>"><?php _e('Log out &raquo;'); ?></a></p>
			<?php else : ?>
				<div id = "commenter-meta">
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" placeholder="NAME" autocomplete="off" tabindex="2" />/<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" placeholder="MAIL" autocomplete="off"  tabindex="3" />/<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" placeholder="SITE" autocomplete="off"  tabindex="4" />
				</div>
			<?php endif; ?>		<!--end of the comment to post meta-->
				<div id="reply-btn">
					<div id="cancel_comment_reply"><?php cancel_comment_reply_link(' CANCEL ') ?></div>
					<div id="comment_reply"><input type="submit" id="submit" tabindex="5" value="<?php echo attribute_escape(__(' POST ')); ?>" /></div>
				</div>
			<?php comment_id_fields(); ?>	<!--support for nested reply-->
			<?php do_action('comment_form', $post->ID); ?>
			<!--do not know the function of two above-->
			</form>
		<?php endif; // If registration required and not logged in ?>
		</div>
	<?php endif; ?>

	<?php 
		if ( have_comments() ) : 
			global $comments_by_type;
			$comments_by_type = &separate_comments( $comments );
			if ( ! empty($comments_by_type['comment']) ) : 
	?>
		<div id="comments-list">
			<ul>
				<?php wp_list_comments('type=comment&callback=my_comments_list');?>
			</ul>
			<?php if ( get_comment_pages_count() > 1 ) : ?>
			<nav id="comments-nav-below" class="comments-navigation">
				<div class="paginated-comments-links">
					<?php paginate_comments_links('prev_text=&next_text='); ?>
				</div>
			</nav>
			<?php endif; ?>
		</div>
	<?php endif; //end of if have comments ?>
<?php endif; ?>
</section>