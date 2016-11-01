<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package One Page Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
<script src="https://use.fontawesome.com/0dafd0516e.js"></script>

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a id="brand-name" class="navbar-brand page-scroll" href="#menu-primary"><em><?php bloginfo( 'name' ); ?></em></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
            <?php
            	$args = array(
            		'menu'			=> 'header_menu',
            		'menu_class'	=> 'nav navbar-nav',
            		'container'		=> 'false'
            		);
            	wp_nav_menu( $args );
            ?>

            </div>
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
    </nav>

	<div id="content" class="site-content">
