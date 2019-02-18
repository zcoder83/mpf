<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,600i" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
    <header class="header clearfix">
        <a class="logo" href="<?php echo get_home_url(); ?>">
<!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 117.81 106.06" style="enable-background:new 0 0 117.81 106.06;" xml:space="preserve">
<path d="M117.66,0h-4.23h-7.77h-4.23L58.9,74.2L16.23,0H12H4.23H0v105.81h0.03v0.25l14.49-0.25h2.46V31.46l34.56,59.69h2.72
	l4.62-8.04l4.66,8.04h2.72l34.44-59.9l0.12,74.57h4.99l-0.12-83.24l6.98-12.14l0.15,95.38h4.99L117.66,0z M52.91,84.65L16.99,22.18
	V10.73l39.34,67.95L52.91,84.65z"/>
</svg></a>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </header>