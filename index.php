<?php

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
// require( dirname( __FILE__ ) . '/wp-blog-header.php' );

echo <<< HERE
<html>
  <head>
    <title>April Pooles</title>
  </head>
  <body bgcolor=white>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="kaf.png" alt="April Pooles">
  </body>
</html>
HERE;

