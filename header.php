<?php
if ($_SERVER["HTTP_HOST"]== "mikenowak.ca") {
  Header ("Location: root/");
  die();
  // 69.36.184.15
}
?><!DOCTYPE html>
<html dir="ltr" lang="en-CA">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">        		
    <title><?php bloginfo('name'); ?>: <?php $tit = single_post_title("", false); if ( is_single() ) { print $tit; } else { print " by Mike Nowak"; } ?></title>
    <meta name="application-name" content="<?php bloginfo('name'); ?>" />	
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">		
    <link rel="home" href="/" title="Home" />
    <link rel="alternate" type="application/rss+xml" title="the-inbetween.com feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">	    
    <meta name="theme-color" content="#31a4cf">		
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/inbetween.png">				
	<!-- wp_head -->
    <?php wp_head(); ?>    
	<!-- end wp_head -->        
<!--[if lt IE 9]>
<script type="javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/iehtml5.js"></script>
<![endif]-->	
</head>		
<body <?php body_class(); ?> role="main">
    <header id="top-header" class="full-header <?php echo getHeaderClass(); ?>" role="banner">
        <h1><a href="/">the-inbetween.com</a> is a <em>weblog</em>. It has been since 2000.<?php /*--> Placeholder text. Longer placeholder text <a href="#">with link</a>.*/?></h1>
    </header>
