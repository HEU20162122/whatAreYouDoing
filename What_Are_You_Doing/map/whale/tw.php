<?php /*
Template Name: tw
*/
?>
<?php get_header(); ?>

<div id="main">
	<div id="tweet">
		<ul class="archives-monthlisting">
			<?php 
				query_posts("post_type=tw&post_status=publish&posts_per_page=-1");if (have_posts()) : while (have_posts()) : the_post(); 
			?>
			<li>
				<span class="tw-time"><?php the_time('Y/m/d H:i:s'); ?></span>
				<div class="tw-content"><?php the_title(); ?><?php the_content(); ?></div>
			</li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
</div>

<?php get_footer();?>