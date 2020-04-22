<?php 
// Load WordPress.
require( 'wp-load.php' );

// Clear HTML files
if ( function_exists( 'rocket_clean_domain' ) ) {
	rocket_clean_domain();
 }

 // Clear combined/minified CSS/JavaScript files
if ( function_exists( 'rocket_clean_minify' ) ) {
	rocket_clean_minify();
 }

 // Clear Combined/minified CSS/JavaScript files
if ( function_exists( 'rocket_clean_cache_busting' ) ) {
	rocket_clean_cache_busting();
 }

 // When everything is cleared - trigger Preload cache.
 // this code can be removed if preload is not needed
if ( function_exists( 'run_rocket_sitemap_preload' ) ) {
	run_rocket_sitemap_preload();
}
