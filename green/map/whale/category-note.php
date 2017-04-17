<?php
	$post = $wp_query->post;
	include(TEMPLATEPATH . '/header-note.php');
?>

<div id="note-main">
	<div id="note">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="note-meta">
			<div class="note-time">
				<h5 class="designline"><?php echo date('jS M, Y',get_the_time('U')); ?></h5>
			</div>
		</div>
		<div class="note-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		<div id="note-content">
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
		<div class="note-pagination"><?php pagenavi(); ?></div>
	</div>
</div>

<?php get_footer(); ?>