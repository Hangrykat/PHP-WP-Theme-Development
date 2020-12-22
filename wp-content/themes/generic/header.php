<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width" />
     <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Fredoka+One&display=swap" rel="stylesheet">
     <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   
     <div id="wrapper" class="hfeed">
          <header id="header" role="banner">
               <div id="menu" role="navigation">
                    <button type="button" class="menu-toggle"><span class="menu-icon">&#9776;</span><span class="menu-text screen-reader-text"><?php esc_html_e(' Menu', 'generic'); ?></span></button>
                    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
               </div>
          </header>
          <div id="container">