<?php get_header(); ?>

<!-- Begin WP Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<!-- End WP Loop -->

<?php get_footer(); ?>
