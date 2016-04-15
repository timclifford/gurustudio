<?php 
/*
 * functions
 * semplice.child.theme
 */

function custom_scripts() {
    // main.js
    wp_register_script('main.js', get_stylesheet_directory_uri() . '/js/main.js', '', '', true);
    wp_enqueue_script('main.js');
}
 
add_action('wp_enqueue_scripts', 'custom_scripts');


add_action('wp_footer', 'add_google_analytics');

function add_google_analytics() {
	echo "<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-76468128-1', 'auto');
	  ga('send', 'pageview');

	</script>";
}