<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo home_url(); ?>">
    <link rel="apple-touch-icon" href="<?php echo home_url(); ?>"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-oi8o31xSQq8S0RpBcb4FaLB8LJi9AT8oIdmS1QldR8Ui7KUQjNAnDlJjp55Ba8FG" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <script defer src="https://pro.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-d84LGg2pm9KhR4mCAs3N29GQ4OYNy+K+FBHX8WhimHpPm86c839++MDABegrZ3gn" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="header">
        <div class="header-content">
          <a class="logo-container" href="<?php echo home_url(); ?>">
            <div class="logo" style="background-image: url(<?=get_field('header_logo', 'option'); ?>);"></div>
          </a>
        </div> <!-- Header Content & Logo -->

        <!-- Button trigger modal -->
        <div class="mobile-button">
          <p>Menu</p>
          <div class="button-container">
            <div class="bar1 bar"></div>
            <div class="bar2 bar"></div>
            <div class="bar3 bar"></div>
          </div>
        </div> <!-- Mobile Menu Button -->
      </div> <!-- Header Inner Container -->

      <!-- Mobile Menu -->
      <div class="mobile-menu" id="mobile-menu">
        <nav class="menu-container">
          <?php wp_nav_menu( array( 'menu' => 'main-menu' ) ); ?>
        </nav>
      </div>

    </header>

    <div class="body-container">
