<?php
/**
 * Plugin Name: Stratton Support
 * Description: Shows a support form in the WordPress dashboard.
 * Author: Wayne Stratton
 * Author URL: https://waynestratton.org
 * License: GNU GPLv2+
 */
 
add_action( 'admin_menu', 'get_support_admin_menu' );
 
//Create an admin menu which will also create a blank admin page
function get_support_admin_menu() {
	add_menu_page( 'Get Support', 'Get Support', 'manage_options', 'get-support.php', 'gravityforms_admin_page', 'dashicons-thumbs-up', 6  );
}
 
//The main function which controls the output on the admin page
function gravityforms_admin_page() {
 
	echo "<div style='width: 60%'>";
	echo "<h2><span style='font-size: 20px;' class='dashicons dashicons-info'></span> Need help? Use the handy form below and let me know how I can assist you!</h2>";
 
	gravity_form_enqueue_scripts( 2, true ); //Enqueue form scripts (only for form with ID of 2)
 
	gravity_form( 2, false, true, false, null, false ); //Output a form with an ID of 2
 
	echo "</div>";
}