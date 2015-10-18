<?php get_header(); ?>

<!-- Begin WP Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="section group">
		<div class="col span_12_of_12 blogPost">
			<h1><?php the_title(); ?></h1>
			<h2><?php the_date(); ?></h2>
			<h3><?php the_time(); ?></h3>
			<h4>Posted by <?php the_author(); ?></h4>
			<p><?php the_content(); ?></p>
		</div>
	</div>

<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<!-- End WP Loop -->

<?php get_footer(); ?>
