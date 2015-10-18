<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="section-group">
		<div class="col span_8_of_12 mainContent">
			<?php the_title( '<h1 class="pageTitle">', '</h1>' ); ?>
			<?php the_content( '<p>', '</p>' ); ?>
	  </div>
	</div>

	<div class="section-group">
  	<div class="col span_4_of_12 sidebar">
  		<?php dynamic_sidebar( 'right_sidebar' ); ?>
  	</div>
	</div>

<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
