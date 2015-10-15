<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="section-group">
		<div class="col span_12_of_12">
			<?php get_template_part( 'content', 'page' );?>
			<?php the_title( '<h1 class="pageTitle">', '</h1>' ); ?>
			<?php the_content( '<p class="pageContent">', '</p>' ); ?>
	    </div>
	</div>

<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>