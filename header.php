<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
    <header class="header clearfix">
        <a class="logo" href="<?php echo get_home_url(); ?>"><img src="<?php 
        
        bloginfo('template_url'); ?>/img/logo.png" alt="logo"></a>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </header>