<!doctype html>
<!-- Add attributes language -->
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Remove title -->
	<!--    <title>Course WP</title>-->
    <!-- Add functions to functions.php file into header.php file -->
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<div id="page" class="site">
	<!-- Header -->
	<header>

		<section class="top-bar">
            <div class="container">
                <div class="logo">
                    Logo
                </div>
                <div class="searchbox">
                    Form Search
                </div>
            </div>
		</section>

		<section class="menu-area">
            <div class="container">
                <nav class="main-menu">
                    <!-- Here will be our menu using wp_nav_menu that receive array key->value -->
                        <?php wp_nav_menu( array(
                                'theme_location'    =>  'miscapu_main_menu',
                                'depth'             =>  2,
                        ) )?>
                    <!-- End Menu -->
                </nav>
            </div>
		</section>
	</header>
	<!-- End Header -->