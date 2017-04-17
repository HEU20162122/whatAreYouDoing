<?php
/**
 * @package WordPress
 * @subpackage Whale
 * @since Whale 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' * '; } ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="icon" href="http://missia.tk/ico.gif" type="image/x-icon">
	<script src="http://missia.tk/plugin/js/jquery.min.js" type="text/javascript"></script>
	<script src="http://missia.tk/plugin/js/jquery.nicescroll.js" type="text/javascript"></script>
	<script>
		$(document).ready(
			function() { 
				$("#post-content").niceScroll({cursorcolor:"#043491",cursorborder:"0px solid #000",cursorborderradius:"5px"});
			}
		);
	</script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="nav">
			<div id="nav-title">
				<h4><a href="">温柔的围困</a></h4>
			</div>
			<div id="nav-menu">
				<ul>
					<!--li><a href="/about/">关&nbsp; &nbsp;于</a></li-->
					<li><a href="<?php echo get_option('home'); ?>">日&nbsp; &nbsp;记</a></li>
					<li><a href="/category/note/" target="_blank">技&nbsp; &nbsp;术</a></li>
					<li><a href="/tw/">碎&nbsp; &nbsp;语</a></li>
					<li><a href="/message/">留&nbsp; &nbsp;言</a></li>
					<li><a href="/friend/">友&nbsp; &nbsp;链</a></li>
				</ul>
			</div>
			<div id="nav-img"><img src="<?php bloginfo('template_url'); ?>/image/whale.png"></div>
		</div>