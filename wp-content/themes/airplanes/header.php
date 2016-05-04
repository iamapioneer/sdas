<!DOCTYPE html>
<html>
<head>
    <title>San Diego Airplane Sales</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>
<body>
    <div class="header-banner">
        <div class="container">
            <ul>
                <li><i class="ion-email"></i><span><a href="mailto:sales@sandiegoaircraftsales.com">sales@sandiegoaircraftsales.com</a></span></li>
                <li><i class="ion-ios-telephone"></i><a href="tel:6195610990">619-562-0990</a></li>
                <div class="clear"></div>
            </ul>
            <div class="clear"></div>
        </div>    
    </div>

    <nav class="navigation-container">
        <div class="container">
            <a href="/">
                <div class="logo-container">
                    <img src="<?php bloginfo('template_directory') ?>/img/logo.png">
                </div>
            </a>
            <!-- <div class="navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/sales">Sales</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div> -->
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
    </nav>

    
    





