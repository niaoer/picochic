<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	


	<?php
		if (has_post_format('link')) { ?>
			<div class="title">
				<h2><a href="<?php echo picochic_first_link(get_the_content()) ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> &raquo;</a></h2>
			</div>
		<?php }

		else { ?>
			<div class="title">
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			</div>
		<?php }
	?>

	<div class="meta">
		<?php
			picochic_show_post_format();
		?>
		<a href="<?php the_permalink() ?>"><?php the_time('Y-m-d') ?></a> &middot; <?php comments_popup_link(__('Write a comment', 'picochic'), __('1 comment', 'picochic'), __('% comments', 'picochic')); ?>
		<?php
			picochic_show_categories();
			picochic_show_tags();
		?>
		<?php edit_post_link( __( '(Edit)', 'picochic' ), '<span class="edit-link">', '</span>' ); ?>
	</div>

	<div class="entry">
		<?php if (!is_single()) { ?>
			<?php if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) { ?>
				<div class="thumbnail">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
				<div class="indexexzerpt">
					<?php the_content(__('More &raquo;', 'picochic')); ?>
				</div>
				<?php }
				else {
					the_content(__('More &raquo;', 'picochic'));
				} 
		}
		else {
			the_content(__('More &raquo;', 'picochic'));
		}
		?>
		<?php if(wp_link_pages('echo=0') != "") { 
			echo '<div class="pagelinks">';
			wp_link_pages();
			echo '</div>';
		} ?>
	</div>
	
</article>
