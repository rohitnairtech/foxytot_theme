<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 4);

function custom_nav_menu_link_attributes($atts, $item, $args, $depth){
    if ($args->theme_location == 'primary'){
        $atts['class'] = "nav-link"; 
    }

    return $atts;
}




add_filter('woocommerce_form_field_country', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_state', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_textarea', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_checkbox', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_password', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_text', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_email', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_tel', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_number', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_select', 'clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_radio', 'clean_checkout_fields_class_attribute_values', 20, 4);
function clean_checkout_fields_class_attribute_values( $field, $key, $args, $value ){
    if( is_checkout() ){
        $field = str_replace( array('<p class="form-row ', '<p class="form-row'), array('<p class="', '<p class="'), $field);
    }

    return $field;
}





add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );
add_filter( 'woocommerce_billing_fields' , 'addBootstrapToCustomFields' );
add_filter( 'woocommerce_shipping_fields' , 'addBootstrapToCustomFields' );
function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            $field['class'][] = 'form-group';
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}
function addBootstrapToCustomFields($fields) {
    foreach ($fields as &$field) {
    	$field['class'][] = 'form-group';
    	$field['input_class'][] = 'form-control';
    }
    return $fields;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');

function wc_refresh_mini_cart_count($fragments){
    ob_start();
    ?>
    <span class="fa-layers-counter" id="bag-total"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <?php
        $fragments['span#bag-total'] = ob_get_clean();
    return $fragments;
}
