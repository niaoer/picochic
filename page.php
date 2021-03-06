<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="pages">
			<div class="title">
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			</div>
			<div class="meta">
				<?php edit_post_link(__('(Edit)', 'picochic')); ?>
			</div>
			
			<div class="entry">
				<?php the_content(__('More...', 'picochic')); ?>

				<?php wp_link_pages(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
		<?php comments_template('', true); ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
