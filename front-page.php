<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<div class="main">

  <div class="carousel-container">

  <div id="myCarousel" class="carousel slide">

    <div class="carousel-inner">
      <?php
      $the_query = new WP_Query(array(
        'category_name' => 'Home Slider',
        'posts_per_page' => 1
        ));
      while ( $the_query->have_posts() ) :
        $the_query->the_post();
      ?>
      <div class="item active">
        <?php the_post_thumbnail('large'); ?>
      </div> <!-- End Slide 1 -->
      <?php 
        endwhile;
        wp_reset_postdata();
      ?>

      <?php
      $the_query = new WP_Query(array(
        'category_name' => 'Home Slider',
        'posts_per_page' => 5,
        'offset' => 1
        ));
      while ( $the_query->have_posts() ) :
        $the_query->the_post();
      ?>
      <div class="item">
        <?php the_post_thumbnail('large');?>
      </div> <!-- End Slide 2 -->
      <?php
      endwhile;
      wp_reset_postdata();
      ?>
   </div> <!-- End Carousel-Inner -->

     <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>

     <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>

  </div> <!-- End MyCarousel -->

</div> <!-- End carousel-container -->


  <div class="row">

    <div class="container">

      	<div class="introduction">

      		<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

		</div> <!-- End Introduction -->

    </div> <!-- end Container -->

  </div> <!-- End row  -->

</div> <!-- End Main -->

<?php get_footer(); ?>
