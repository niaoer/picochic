<?php get_header(); ?>

	<div id="content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format()); ?>

			<?php comments_template('', true); ?>

		<?php endwhile; ?>
		<?php 
		if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
		else { 
		?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo;  Older articles', 'picochic')); ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer articles &raquo;', 'picochic')); ?></div>
		</div>

		
		<?php } ?>

	<?php else : ?>

		<article class="page" >
			<h2><?php _e('Sorry, nothing found.', 'picochic'); ?></h2>
			<div class="entry">		
				<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'picochic' );?>.</p>
			</div>
		</article>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
