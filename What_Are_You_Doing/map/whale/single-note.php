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
		<div class="note-title"><?php the_title(); ?></div>
		<div id="note-content">
			<?php the_content(); ?>
		</div>
		
		<div id="note-nav">
			<?php
			$categories = get_the_category();
			        $categoryIDS = array();
			        foreach ($categories as $category) {
			            array_push($categoryIDS, $category->term_id);
			        }
			        $categoryIDS = implode(",", $categoryIDS);
			?>
			<p class="next"><?php if (get_next_post($categoryIDS)) { next_post_link(' %link','%title',true);} ?></p><p class="prev"><?php if (get_previous_post($categoryIDS)) { previous_post_link(' %link','%title',true);} ?></p>
		</div>
		<?php if ( ! post_password_required() ) comments_template('', true); ?>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>