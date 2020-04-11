<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @since Behavioral Play Therapy 1.0
 */

  get_header(); ?>
    <div class="container-fluid page-wrap ">
      <div class="row" id="hero">
        <?php dynamic_sidebar('Hero'); ?>
      </div>
      <?php
      if (!is_front_page()){
        if (!is_page(12)){
          echo "<div class=\"row\">";
          echo "<div class=\"page-title\"><div class=\"container\"><h2>";
          the_title();
          echo "</h2></div></div>";
          echo "</div>";
        }
      }?>
      <div class="row">
        <div class="container">
          <div class="row main-body">
            <?php 
            if (is_front_page() || is_page(12)){
              echo "<div class=\"col-12 content\">";
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                  get_template_part( 'content', get_post_format() );
                endwhile; endif;
              echo "</div>";
            } 
            else {
              echo "<aside class=\"col-12 col-md-3 col-md-pull-9 bpt-sidebar\">";
              dynamic_sidebar('Sidebar');
              echo "</aside>";
              echo "<div class=\"col-12 col-md-9 col-md-push-3 content\">";
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                  get_template_part( 'content', get_post_format() );
                endwhile; endif;
              echo "</div>";
            } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row footer-row">
      <?php get_footer(); ?>
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/tether.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
      <?php wp_footer(); ?>
    </body>
  </html>