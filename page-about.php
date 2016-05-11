<?php
/*
Template Name: About
*/

get_header(); ?>

<div class="main about">

  	<div class="about-wrapper">

  		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

	</div>

</div>

<?php get_footer(); ?>
