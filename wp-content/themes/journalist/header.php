<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title(' '); ?>
<?php if(wp_title(' ', false)) { ?>
at
<?php } ?>
<?php bloginfo('name'); ?>
</title>
<link href='https://fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<!-- <link rel="shortcut icon" type="image/x-png" href="<?php bloginfo('template_url'); ?>/favicon.ico" /> -->
<link href="//usampplsites.s3.amazonaws.com/img/favicon.ico" rel="shortcut icon" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div id="container" class="group">
<div id="navigation":>
  <ul>
    <li><a href="https://www.ipoll.com/about_us.php" id="about_us">About Us</a></li>
    <li><a href="https://www.ipoll.com/faq.php" id="faq">FAQ</a></li>
    <li><a href="/custom/ipoll/go/index.html" id="mobile">Mobile</a></li>
    <li><a href="https://www.ipoll.com/blog/">Blog</a></li>
    <li><a href="#" id="memLogin">Sign In</a></li>
  </ul>
</div>
<!--<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
<div id="bubble"><p><?php bloginfo('description'); ?></p></div--> <!-- erase this line if you want to turn the bubble off -->
<h1><a href="http://www.ipoll.com" target="_blank"></a></h1>