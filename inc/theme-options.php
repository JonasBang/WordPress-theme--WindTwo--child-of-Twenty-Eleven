<?php
	// Load default Twenty Eleven theme options file
	require( '/../../twentyeleven/inc/theme-options.php' );
	
	// Remove the theme options menu item
	remove_action( 'admin_menu', 'twentyeleven_theme_options_add_page' );
?>