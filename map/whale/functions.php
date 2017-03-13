<?php
function my_comments_list($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">

		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
			<div class="comment-author vcard">
				<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
				<?php printf(__('<cite class="fn">%s</cite>&nbsp;&nbsp;*&nbsp;'), get_comment_author_link()) ?>
				<div class="comment-meta commentmetadate">
				<?php
					printf( __('%1$s'), get_comment_time('H:i:s  M j, Y', false, false)) ?><?php edit_comment_link(__('(Edit)'),'  ','' );
				?>
				&nbsp;*&nbsp;
				<?php
				comment_reply_link( array_merge( $args, array(
					'add_below' => $add_below,
					'depth'     => $depth,
					'max_depth' => $args['max_depth'],
					'before'    => '<div class="reply">',
					'after'     => '</div>',
					'reply_text'    => __( 'Re' )
				) ) );
				?>
			</div>
		</div>
		<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
		<br />
		<?php endif; ?>

		<?php comment_text( get_comment_id(), array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
        }

/* 评论链接新窗口打开 */
function my_get_comment_author_link($url)
{
	$return=$url;
	$p1="/^<a .*/i";
	$p2="/^<a ([^>]*)>(.*)/i";
	if(preg_match($p1,$return))
	{
		$return=preg_replace($p2,"<a $1 target='_blank'>$2",$return);
	}
	return $return;
}
add_filter('get_comment_author_link','my_get_comment_author_link');

/* pagenavi for index */
if ( !function_exists('pagenavi') ) {
	function pagenavi( $p = 5 ) { // 取当前页前后各 2 页
		if ( is_singular() ) return; // 文章与插页不用
		global $wp_query, $paged;
		$max_page = $wp_query->max_num_pages;
		if ( $max_page == 1 ) return; // 只有一页不用
		if ( empty( $paged ) ) $paged = 1;
		// echo '<span class="pages">Page: ' . $paged . ' of ' . $max_page . ' </span> '; // 显示页数
		if ( $paged > 1 ) p_link( $paged - 1, '上一页', '«' );/* 如果当前页大于1就显示上一页链接 */
		if ( $paged > $p + 1 ) p_link( 1, '最前页' );
		if ( $paged > $p + 2 ) echo '... ';
		for( $i = $paged - $p; $i <= $paged + $p; $i++ ) { // 中间页
			if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<span class='page-numbers current'>{$i}</span> " : p_link( $i );
		}
		if ( $paged < $max_page - $p - 1 ) echo '... ';
		if ( $paged < $max_page - $p ) p_link( $max_page, '最后页' );
		if ( $paged < $max_page ) p_link( $paged + 1,'下一页', '»' );/* 如果当前页不是最后一页显示下一页链接 */
	}
	function p_link( $i, $title = '', $linktype = '' ) {
		if ( $title == '' ) $title = "第 {$i} 页";
		if ( $linktype == '' ) { $linktext = $i; } else { $linktext = $linktype; }
		echo "<a class='page-numbers' href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$linktext}</a> ";
	}
}

/* comment_mail_notify v1.0 by willin kan. (所有回复都发邮件) */
function comment_mail_notify($comment_id) {
	$comment = get_comment($comment_id);
	$parent_id = $comment->comment_parent ? $comment->comment_parent : '';
	$spam_confirmed = $comment->comment_approved;
	if (($parent_id != '') && ($spam_confirmed != 'spam')) {
		$wp_email = 'no-reply@' . preg_replace('#^www.#', '', strtolower($_SERVER['SERVER_NAME'])); //e-mail 发出点, no-reply 可改为可用的 e-mail.
		$to = trim(get_comment($parent_id)->comment_author_email);
		$subject = '您在「' . get_the_title($comment->comment_post_ID) . '」的留言有了回复';
		$message = '
			<div style="background-color:#EEE; border:1px dashedd #7f0019; color:#000; padding:15px; -moz-border-radius:15px; -webkit-border-radius:15px; -khtml-border-radius:15px; border-radius:15px;">
				<p style="color:#000; line-height:1.5em; margin:0;">Hi, ' . trim(get_comment($parent_id)->comment_author) . ' : )</p>
				<p style="color:#000; line-height:1.5em; margin:0;">您曾在「' . get_the_title($comment->comment_post_ID) . '」的留言:</p><div style="margin:10px; padding-left:10px; border-left:4px solid #CCC;">'
				. trim(get_comment($parent_id)->comment_content) . '</div>
				<p style="color:#000; line-height:1.5em; margin:0;">' . trim($comment->comment_author) . ' 给您的回复:</p><div style="margin:10px; padding-left:10px; border-left:4px solid #CCC;">'
				. trim($comment->comment_content) . '</div>
				<p style="color:#000; line-height:1.5em; margin:0;">点击查看<a style="text-decoration:none;color:#7f0019;" href="'. htmlspecialchars(get_comment_link($parent_id,array("type" => "all"))) . '">完整內容</a>。</p>
				<p style="color:#000; line-height:1.5em; margin:0;">欢迎再来「<a href="'.home_url().'" style="color:#7f0019; text-decoration:none;">'. get_option('blogname') . '</a>」</p>
			</div>';
		$from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
		$headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
		wp_mail( $to, $subject, $message, $headers );
	}
}
add_action('comment_post', 'comment_mail_notify');

/* 首页分类显示 */
add_action( 'pre_get_posts', 'wpdit_pre_get_posts' );
function wpdit_pre_get_posts( $wp_query ) {
    if ( is_home() || is_front_page() ){
        $wp_query->set( 'category__in', array(1) );
    }
    return $wp_query;
}

/* tweettest */
add_action('init', 'my_custom_tw'); 
function my_custom_tw() { 
	$labels = array( 'name' => '碎语', 'singular_name' => 'singularname', 'add_new' => '发表碎语', 'add_new_item' => '发表碎语', 'edit_item' => '编辑碎语', 'new_item' => '新碎语', 'view_item' => '查看碎语', 'search_items' => '搜索碎语', 'not_found' => '暂无碎语', 'not_found_in_trash' => '没有已遗弃的碎语', 'parent_item_colon' => '', 'menu_name' => '碎语' ); 
	$args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true, 'show_in_menu' => true, 'query_var' => true, 'rewrite' => true, 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false, 'menu_position' => null, 'supports' => array('title','editor','author') ); 
	register_post_type('tw',$args); 
}