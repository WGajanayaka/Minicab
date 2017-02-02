<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package libertyCars
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Bootstrap 101 Template</title>

<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

<!-- Bootstrap -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font-awesome/css/font-awesome.min.css">
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive-nav.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/nav-styles.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.datetimepicker.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
<script>(function(n,t,i,r){var u,f;n[i]=n[i]||{},n[i].initial={accountCode:"WELCO11119",host:"WELCO11119.pcapredict.com"},n[i].on=n[i].on||function(){(n[i].onq=n[i].onq||[]).push(arguments)},u=t.createElement("script"),u.async=!0,u.src=r,f=t.getElementsByTagName("script")[0],f.parentNode.insertBefore(u,f)})(window,document,"pca","//WELCO11119.pcapredict.com/js/sensor.js")</script>
</head>
<body <?php body_class(); ?>>

