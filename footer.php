<footer>

    <?php if ( is_active_sidebar( 'special-announcements' ) ) : ?>

    <div class="announcement">

        <div class="container">

            <div class="span12">
                
              <?php dynamic_sidebar( 'special-announcements' ); ?>

            </div>

        </div>
        
    </div>

  <?php endif; ?>

  <div class="footer">

  <div class="container">
    
    <div class="footerwidgets clearfix">

      <div class="footerwrapper">

        <div class="footer-left">

          <ul>

            <?php dynamic_sidebar( 'footer-1' ); ?>

          </ul>

        </div> <!-- End Footer-Left -->

        <div class="footer-middle">

          <ul> 

            <?php dynamic_sidebar( 'footer-2' ); ?>

          </ul>

        </div> <!-- End Footer-Middle -->

        <div class="footer-right">

          <ul> 

            <?php dynamic_sidebar( 'footer-3' ); ?>

          </ul>

         </div> <!-- End Footer-Right -->

       </div> <!-- End Footer Wrapper -->

    </div> <!-- End Footer-Widgets -->

  </div> <!-- End Container -->

  <img src="<?php print IMAGES; ?>/bubbles.png" alt="Bubbles" class="bubbles">

</div> <!-- End Footer -->

</footer> <!-- End Footer -->

<div class="afterfooter">
  
</div>

<?php
  if ( is_front_page()) {?>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.carousel').carousel({
          interval: 3000  
        })
    });
    </script>

<?php }?>

<?php wp_footer(); ?>

</body>

</html>