<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?> class="no-js no-svg">            <!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <?php
    include get_template_directory() . '/inc/tag_manager.php';
  ?>
  <!-- End Google Tag Manager (noscript) -->
  	<header id="masthead" class="clearfix">
      <div id="site-logo" class="masthead__logo">
        <a href="<?php echo get_option('home'); ?>">
          <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );   
            if ( has_custom_logo() ) {
                    echo '<img src="'. esc_url( $logo[0] ) .'">';
            } else {
                    echo '<div>'. get_bloginfo( 'name' ) .'</div>';
            }
          ?>
        </a>
      </div>
      <div></div>
      <div class="masthead__nav">
        <?php wp_nav_menu( array(
          'theme_location' => 'primary-menu',
          'container' => 'nav',
          'menu_class' => 'nav'
           ) 
          ); ?>
      </div>
  	</header>

  <div class="site-content-contain">
    <div id="content" 
    <?php if (!is_front_page()&&!is_page_template('template-landing-page.php')) {
      echo 'class="site-content"';
      }?>
    >