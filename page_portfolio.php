<?php
/*
Template Name: Portfolio
*/
?>

<?php 

/**

 * Theme Page Section for our theme.

 *

 * @package ThemeGrill

 * @subpackage Spacious

 * @since Spacious 1.0

 */

?>



<?php get_header(); ?>



	<?php do_action( 'spacious_before_body_content' ); ?>



	<div id="primary">

		<div id="content" class="clearfix">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php 

				$posts = get_field('projects');

				if( $posts ): ?>
    				<ul>
    				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
    					<?php setup_postdata($post); ?>
        				<li>
            				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        				</li>
    				<?php endforeach; ?>
    				</ul>
    				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

								<?php

					do_action( 'spacious_before_comments_template' );

					// If comments are open or we have at least one comment, load up the comment template

					if ( comments_open() || '0' != get_comments_number() )

						comments_template();					

	      		do_action ( 'spacious_after_comments_template' );

				?>



			<?php endwhile; ?>



		</div><!-- #content -->

	</div><!-- #primary -->

	

	<?php spacious_sidebar_select(); ?>



	<?php do_action( 'spacious_after_body_content' ); ?>



<?php get_footer(); ?>