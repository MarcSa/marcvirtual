
<?php
/**
 * Template Name: Experimental Page
 */

get_header( ); 

?>

<!-- Page Title
============================================= -->
<section id="page-title">
  <div class="container clearfix">
    <h1>Experimental Code</h1>
    <span>
      
      <?php
      if ( function_exists( 'the_subtitle' ) ) {
        the_subtitle();
      }

      ?>
    
    </span>
  </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="container clearfix">

			<?php 
			
			// wp_loginout();
			
			single_post_title();

			?>

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>