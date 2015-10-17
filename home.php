<?php

/*
  Template Name: Home Page Template
*/

get_header(); ?>

  <div class="section group">
    <div id="hero" class="col span_12_of_12">
      <h2><?php the_field('main_headline'); ?></h2>
      <picture id="stars">
        <source srcset="<?php echo get_template_directory_uri(); ?>/_images/stars.png">
        <img src="<?php echo get_template_directory_uri(); ?>/_images/stars.png" alt="four gold stars">
      </picture><br>
    <a href="#" id="bookBtn"><?php the_field('call_to_action_button'); ?></a>
    </div>
  </div>

  <div class="section group">
    <div id="signIn" class="col span_12_of_12">
      <form action="#">
        <label for="username">Username: </label>
        <input type="text">
        <label for="password">Password: </label>
        <input type="password"><br>
        <input type="submit" value="Login" id="submit"><br>
        <p>Don't have a username and password? <a href="#" id="registerLink">Register here</a></p>
      </form>
    </div>
  </div>

<!-- Begin WP Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="section-group">
      <?php dynamic_sidebar( 'promo1' ); ?>
      <?php dynamic_sidebar( 'promo2' ); ?>
      <?php dynamic_sidebar( 'promo3' ); ?>
  </div>

<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<!-- End WP Loop -->

<?php get_footer(); ?>
