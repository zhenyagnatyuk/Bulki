<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title><?php the_title(); ?></title>
		<?php wp_head(); ?>
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<div class = 'container'>
				<div class = "row">
					<div class="logo-section col-xl-5 col-md-4 col-8">
						<?php the_custom_logo( $blog_id ); ?>
					</div>
					
					<div class="menu-section col-xl-7 col-md-8 col-4">
						<?php wp_nav_menu( array(
							'theme_location' => 'header_menu_place',
							'container' => 'div',
							'container_id' => 'header_menu',
							'menu_class' => 'menu'
						) ); ?>
						<img id="btn_menu" src ='<?= THEME_URI; ?>/images/hamburger.png'>
					</div>
				</div>
			</div>
		</header>