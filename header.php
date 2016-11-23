<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); bloginfo(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    	<div id="container">
        	<header>
            	<div class="content">
                
                </div>
				<?php
				/*
				Menu follows pattern:
				<nav><ul class="navigation"><li><a></a></li></ul></nav>
				*/
				wp_nav_menu( array(
					'menu' => 'main-menu',
					'menu_class' => 'navigation',
					'container' => 'nav'
				) );
				?>
            </header>
        	<div id="main">
            	<section id="content">