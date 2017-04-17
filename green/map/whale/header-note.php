<?php
/**
 * @package WordPress
 * @subpackage Note
 * @since Note 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' * '; } ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-note.css" type="text/css" />
	<link rel="icon" href="http://missia.tk/ico.gif" type="image/x-icon">
	<script src="http://missia.tk/plugin/js/jquery.min.js" type="text/javascript"></script>
	<script src="http://missia.tk/plugin/js/jquery.nicescroll.js" type="text/javascript"></script>
	<script>
		$(document).ready(
			function() { 
				$("html").niceScroll({cursorcolor:"#043491",cursorborder:"0px solid #000",cursorborderradius:"5px"});
	  		}
		);
	</script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="note-wrapper">
	<div id="note-header">
		<div id="note-banner">
			<img src="<?php bloginfo('template_url'); ?>/image/avatar.jpg">
		</div>
		<div id="note-nav">
			<p>
				<a href="<?php echo get_option('home'); ?>">DIARY</a> / 
				<a href="/category/note/">NOTE</a>
			</p>
		</div>
	</div>