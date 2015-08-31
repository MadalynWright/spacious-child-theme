<?php
/*
Template Name: Project
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



				<?php get_template_part( 'content', 'page' ); ?>

				<?php 

					$image = get_field('preview_image');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

				<?php echo "<h1>" . the_field("project_name") . "</h1>"; ?>

				<?php echo the_field("description"); ?>
				<br>
				<?php echo the_field("url"); ?>

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