<?php
/**
 * This code do remove list of courses in checkout page of Paid Memberships Pro plugin
 */

add_action( 'pmpro_checkout_after_pricing_fields', 'custom_remove_the_list_of_courses_in_checkout_page', -1 );
function custom_remove_the_list_of_courses_in_checkout_page() {
	if( isset(LP_Addon::$instances['LP_Addon_Paid_Memberships_Pro']) ){
		$priority = has_action( 'pmpro_checkout_after_pricing_fields', array(LP_Addon::$instances['LP_Addon_Paid_Memberships_Pro'],'learn_press_pmpro_checkout_after_pricing_fields'));
		if( $priority ){
			$res = remove_action( 'pmpro_checkout_after_pricing_fields', array(LP_Addon::$instances['LP_Addon_Paid_Memberships_Pro'],'learn_press_pmpro_checkout_after_pricing_fields'), $priority );
		}
	}
}


?>