<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/siteLogo.jpg" type="image/png">
  <title>Hikikomori - Лучший сайт по аниме</title>

  <?php wp_head(); ?>
</head>
<!-- banner -->
<div class="top">
  <div class="container syncContainer">
  <?php wp_nav_menu(array(
      'theme_location'  => 'loginSyncMenu',
      'container'       => false,
      'menu_class'      => 'syncMenu',
    )); ?>
  </div>
</div>


<!-- nav list -->
<header class="header">
  <nav class="menuConteiner container">

    <a href="<?php echo get_home_url(); ?>" class="menu_logo">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoOnMenu.png" alt="Logo">
    </a>

    <?php wp_nav_menu(array(
      'theme_location'  => 'headerMenu',
      'container'       => false,
      'menu_class'      => 'topMenu',
    )); ?>
  </nav>
</header>
