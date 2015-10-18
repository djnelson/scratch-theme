<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $blog_title = get_bloginfo() . ' | ' . get_the_title(); ?></title>
	<link rel="stylesheet" href="styles.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>

	<header class="section group">
		<div id="companyName" class="col span_8_of_12">
			<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
				<div class='site-logo'>
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				</div>
			<?php else : ?>
				<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
      <?php endif; ?>
		</div>
		<div id="companyContact" class="col span_4_of_12">
			<?php dynamic_sidebar( 'right_header' ); ?>
		</div>
	</header>

	<div class="section group">
		<div id="menuToggle" class="col span_12_of_12">
			<p>Menu</p>
		</div>
	</div>

	<nav id="mainNavLinks" class="section group hideElement">
		<div id="mainNav" class="col span_12_of_12">
			<?php wp_nav_menu(); ?>
		</div>
	</nav>
