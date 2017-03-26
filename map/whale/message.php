<?php
/*
	Template Name: Message
*/
?>

<?php get_header(); ?>

	<div id="post">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		<div id="post-content">
			<?php the_content(); ?>
			<?php if ( ! post_password_required() ) comments_template('', true); ?>
		</div>
		<?php endwhile; endif; ?>
		<div id="post-btm">
			<img src="<?php bloginfo('template_url'); ?>/image/whale2.png">
		</div>
	</div>

<?php get_footer(); ?>