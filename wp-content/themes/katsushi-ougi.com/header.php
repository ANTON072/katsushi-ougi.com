<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<?php wp_head(); ?>
		<title><?php bloginfo( 'name' ); ?></title>
	</head>
	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<div id="wrapper">

		<header id="global_header" class="p-globalHeader u-font-title-en">
			<div class="p-globalHeader__contents">
				<div class="p-globalHeader__head">
					<h1><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<p><?php bloginfo( 'description' ); ?></p>
				</div>
				<ul class="p-globalHeader__nav">
					<li><a href="<?php echo esc_url( home_url() ); ?>">home</a></li>
					<li><a href="<?php echo esc_url( get_year_link( '' ) ); ?>">articles</a></li>
					<li><a href="/about">about</a></li>
				</ul>
			</div>
		</header>

		<div id="main_contents">