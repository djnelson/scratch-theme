<?php get_header(); ?>

<!-- Begin WP Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="section-group">
		<div class="col span_12_of_12">
			<?php the_title( '<h1 class="pageTitle">', '</h1>' ); ?>
			<?php the_content( '<p class="pageContent">', '</p>' ); ?>
	  </div>
	</div>

<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<!-- End WP Loop -->

<?php get_footer(); ?>
