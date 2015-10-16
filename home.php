<?php

/*
  Template Name: Home Page Template
*/

get_header(); ?>

  <div class="section-group">
      <?php dynamic_sidebar( 'promo1' ); ?>
      <?php dynamic_sidebar( 'promo2' ); ?>
      <?php dynamic_sidebar( 'promo3' ); ?>
  </div>

<?php get_footer(); ?>
