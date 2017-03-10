<?php get_header(); ?>

	<div id="post">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-title"><?php the_title(); ?></div>
		<div id="post-content">
			<?php the_content(); ?>
			<div id="post-nav">
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

		<div id="post-time">
			<p><?php the_time('Y / m / d'); ?></p>
		</div>
		<div id="post-pagination"><?php pagenavi(); ?></div>
		<div id="post-btm">
			<img src="<?php bloginfo('template_url'); ?>/image/whale2.png">
		</div>
	</div>

<?php get_footer(); ?>