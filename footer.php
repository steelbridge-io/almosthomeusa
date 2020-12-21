<?php

/**
 * Footer Template
 *
 * @package WP Pro Real Estate 4
 * @subpackage Template
 */

global $ct_options;

?>
      <footer class="sixteen columns marT20">

          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Footer') ) :else: endif; ?>

          <nav class="right">
              <?php wp_nav_menu( array( 'container_id' => 'footer-nav', 'theme_location' => 'footer') ); ?>
          </nav>

          <?php if($ct_options['ct_footer_text']) { ?>

              <p class="left"><?php echo stripslashes($ct_options['ct_footer_text']); ?>.</p>

          <?php } else { ?>

              <p class="left">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, <?php _e( 'All Rights Reserved.', 'contempo' ); ?> </p>

          <?php } ?>

      </footer>
    </section>
  </div>
</div>

<?php wp_footer(); ?>

		<?php if($ct_options['ct_tracking_code']) { ?>

      <?php echo stripslashes($ct_options['ct_tracking_code']); ?>

    <?php } ?>


<!-- ###### MODAL ##### -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="10 columns request-quote-display-desktop">
          <div id="advanced-search-inner" class="quote-form">
            <?php echo do_shortcode('[gravityform id="4" name="Request A Quote" title="true" description="false"]'); ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




</body>
</html>
