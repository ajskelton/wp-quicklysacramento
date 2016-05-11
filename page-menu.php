<?php
/*
Template Name: Menu
*/

get_header(); ?>

<div class="main">

  	<div class="menu-wrapper">

  		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

	</div>

</div>

<?php get_footer(); ?>
