<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-wide.css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<a href="<?php echo home_url(); ?>  "></a><span class="image avatar48"><img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name') ?>" /></span>
							<h1 id="title">Taeho Kim</h1>
							<span class="byline">Web Developer</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<?php 
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => '',
								'menu_class' => 'inline'
							));

							 ?>
							<ul>
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Portfolio</span></a></li>
								<li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-user">About Me</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-envelope">Contact</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
							<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
							<li><a href="#" class="fa fa-github solo"><span>Github</span></a></li>
							<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
							<li><a href="#" class="fa fa-envelope solo"><span>Email</span></a></li>
						</ul>
				
				</div>
			
			</div>
