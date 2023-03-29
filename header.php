<?php
/** 
*
*  The Header file
*
*  @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*  @package Doula
*  @since 2022
*
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_bloginfo('template_url') ?>/assets/images/logo-galaxy.png">
  <?php wp_head(); ?>
  <title>Robyn Leah Nalty</title>
  
</head>
<body <?php body_class(); ?> >
<nav class="navbar">
      <div class="navbar__logo">
        <img class="navbar__logo-img" src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo-galaxy.png" alt="Robyn logo">
        <div class="navbar__logo-text">
          Robyn<br>Leah Nalty
        </div>
      </div>

      <!-- <ul class="navbar__list">
        <li class="navbar__item"><a href="about.html" class="link link--dark">About</a></li>
        <li class="navbar__item"><a href="offerings.html" class="link link--dark">Offerings</a></li>
        <li class="navbar__item"><a href="testimonials.html" class="link link--dark">Testimonials</a></li>
        <li class="navbar__item"><a href="contact.html" class="link link--dark">Contact</a></li>
        <div class="navbar__contact">
          <a href="book.html" class="btn btn--dark">Book a session</a>
        </div>
      </ul> -->

      <?php

        wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container'       => false,
            'depth'           => 1,
            'fallback_cb'     => false,
            'items_wrap'      => '
              <ul class="navbar__list">%3$s<div class="navbar__contact">
              <a href="book" class="btn btn--dark">Book a session</a></div></ul>',
            'add_li_class'    => 'navbar__item'
          )
          );
      ?>

      <div class="navbar__burger">
        <div class="navbar__burger-icon"></div>
      </div>
      <div class="navbar__overlay"></div>
    </nav>

    <?php if (is_front_page()){ ?>
      <header class="header">
      <div class="header__content">
      <div class="header__title">
        <p><span class="background background--mint">Would you like a calm, gentle and reassuring presence?</span></p>
        <p><span class="background background--mint">My role as a doula is to provide you with a knowledgeable voice, safely hold your space and offer an empathic listening ear.</span></p>
      </div>
    </div>
  </header>
    <?php } ?>
  
    
    