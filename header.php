<?php
/**
 * The header for the Hillcrest theme.
 *
 *
 * @since Hillcrest 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php wp_title("|", true, "right"); ?> Hillcrest Windows & Remodeling LLC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="dns-prefetch" href="//kit.fontawesome.com">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <script src="https://kit.fontawesome.com/233735cc67.js" crossorigin="anonymous"></script>
    <?php wp_head();?>
  </head>
  <body <?php echo body_class();?>>
    <div class="container-fluid whole-page no-gutters">
        <header class="container page-header">
          <div class="row">
            <div class="col-12">
              <h1 class="site-title"><a href="<?php $url = home_url( '/', 'https' ); echo esc_url( $url );?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo_medium.png" alt="Hillcrest logo" id="logo" /></a><a href="<?php $url = home_url( '/', 'https' ); echo esc_url( $url );?>"><span class="title-text">Hillcrest Windows &amp; Remodeling LLC</span></a></h1><!-- class="hidden-md-up" -->
            </div>
          </div>
        </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
      </div>
    </nav>