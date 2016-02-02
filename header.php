<!DOCTYPE html>
<html dir="ltr" lang="en-CA">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0">        		
<title><?php $tit = single_post_title("", false); if ( is_single() ) { print $tit . ' | ' . get_bloginfo('name'); } else { print get_bloginfo('name'); } ?></title>
<meta name="application-name" content="<?php bloginfo('name'); ?>" />	
<link rel="home" href="/" title="Home" />
<link rel="alternate" type="application/rss+xml" title="RSS feed" href="<?php bloginfo('rss2_url'); ?>" />
<meta name="theme-color" content="#31a4cf">		
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="the-inbetween.com"/>
<meta name="application-name" content="the-inbetween.com"/>
<meta name="msapplication-TileColor" content="#31a4cf"/>
<meta name="msapplication-TileImage" content="<?php AssetsURL(); ?>/assets/img/inbetween.png"/>
<link rel="icon" type="image/x-icon" href="<?php AssetsURL(); ?>/assets/img/favicon.ico">
<link rel="icon" sizes="192x192" href="<?php AssetsURL(); ?>/assets/img/inbetween.png">    

<link rel="stylesheet" href="<?php AssetsURL(); ?>/assets/css/styles.css">	    
<?php //wp_head(); 
    /*
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">	
    */
?>	
</head>		
<body <?php body_class(); ?> role="main">
    <header id="top-header" class="full-header <?php echo getHeaderClass(); ?>" role="banner">
        <h1><a href="/">the-inbetween</a> is a <em>weblog</em>. It has been since 2000.<?php /*--> Placeholder text. Longer placeholder text <a href="#">with link</a>. */?></h1>
    </header>
