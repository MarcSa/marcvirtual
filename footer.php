    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
            <?php echo get_theme_mod( 'mv_footer_copyright_text' ) ?><br>

            <?php 
            
            if( get_theme_mod( 'mv_report_file' ) ){
              ?>
              <a href="<?php echo get_theme_mod( 'mv_report_file' )  ?>" ><?php _e( 'Download Report', 'marcvirtual' ); ?></a><br>
              <?php 
            }
            ?>
            <div class="copyright-links">

              <?php if ( get_theme_mod( 'mv_footer_tos_page' ) ): ?>
                <a href="<?php the_permalink( get_theme_mod( 'mv_footer_tos_page' ) ); ?>"><?php _e( 'Terms of Use', 'marcvirtual' ); ?></a>
              <?php endif; ?>
              <?php if (get_theme_mod( 'mv_footer_privacy_page' )): ?>
                <a href="<?php the_permalink( get_theme_mod( 'mv_footer_privacy_page' ) ); ?>"><?php _e( 'Privacy Policy', 'marcvirtual' ); ?></a>
              <?php endif; ?>
              
            </div>
          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">

            <?php  
              
              if( get_theme_mod( 'mv_facebook_handle' ) ){
                ?>
                <a href="https://facebook.com/<?php echo get_theme_mod( 'mv_facebook_handle' ); ?>" class="social-icon si-small si-borderless si-facebook">
                  <i class="icon-facebook"></i>
                  <i class="icon-facebook"></i>
                </a>
                <?php
              }

              if( get_theme_mod( 'mv_twitter_handle' ) ){
                ?>
                <a href="https://twitter.com/<?php echo get_theme_mod( 'mv_twitter_handle' ); ?>" class="social-icon si-small si-borderless si-twitter">
                  <i class="icon-twitter"></i>
                  <i class="icon-twitter"></i>
                </a>
                <?php
              }
              
              if( get_theme_mod( 'mv_instagram_handle' ) ){
                ?>
                <a href="https://instagram.com/<?php echo get_theme_mod( 'mv_instagram_handle' ); ?>" class="social-icon si-small si-borderless si-instagram">
                  <i class="icon-instagram2"></i>
                  <i class="icon-instagram2"></i>
                </a>
                <?php
              }

            ?>

            </div>

            <div class="clear"></div>
            <?php

              if( get_theme_mod( 'mv_phone_number' ) ){
                ?>

                <i class="icon-envelope2"></i> <a href="tel:<?php echo get_theme_mod( 'mv_phone_number' ); ?>"><?php echo get_theme_mod( 'mv_phone_number' ); ?></a> <span class="middot">&middot;</span>
                
                <?php
              }

              if( get_theme_mod( 'mv_email' ) ){
                ?>

                <i class="icon-headphones"></i> <a href="tel:<?php echo get_theme_mod( 'mv_email' ); ?>"><?php echo get_theme_mod( 'mv_email' ); ?></a> 
                <?php
              }
              
            ?>

          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->
  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
  ============================================= -->

  <?php wp_footer(  ); ?>

</body>

</html>