<?php
/**
 * Template Name: Map + Jobs
 *
 * @package Jobify
 * @since Jobify 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="homepage-content" role="main">
			<?php do_action( 'jobify_output_map' ); ?>

			<div class="container">
				<div class="entry-content">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php if ( '' == get_post()->post_content ) : ?>

							<?php echo do_shortcode( '[jobs]' ); ?>

						<?php else : ?>

							<?php the_content(); ?>

						<?php endif; ?>

					<?php endwhile; ?>
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>