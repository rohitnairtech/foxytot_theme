<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<p><?php
	/* translators: 1: user display name 2: logout url */
	printf(
		__( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url( wc_get_page_permalink( 'myaccount' ) ) )
	);
?></p>

<p><?php
	printf(
		__( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
?></p>
<br>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */


	    // Get all customer orders
    $customer_orders = get_posts( array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => get_current_user_id(),
        'post_type'   => wc_get_order_types(),
        'post_status' => array_keys( wc_get_order_statuses() ),
    ) );
    
    // Order count for a "loyal" customer
    $oldies_count = 15;
    $super_count = 10;
    $loyal_count = 5;

    $orderNumber = count( $customer_orders );

    // Display our notice if the customer has at least 5 orders
    if ( $orderNumber >= 1) {
    	if ($orderNumber >= $loyal_count) {
    		if ($orderNumber >= $oldies_count) {
    			$notice_text = 'We noticed you\'ve placed more than '.$super_count.' orders with us – thanks for being our beloved customer!';
    		}
    		elseif ($orderNumber >= $super_count) {
    			$notice_text = 'We noticed you\'ve placed more than '.$oldies_count.' orders with us – thanks for being a super customer!';
    		}
    		else {
    			$notice_text = 'We noticed you\'ve placed more than '.$loyal_count.' orders with us – thanks for being a loyal customer!';
    		}
    	}
    	else {
    		$notice_text = 'Get the latest fashion accessories at TheFoxyTot.';
    	}
    }
    else {
    	$notice_text = 'Shop for the latest fashion accessories at TheFoxyTot!';
    }
?>

<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
		<a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php _e( 'Shop now', 'woocommerce' ) ?>
		</a>
		<?php _e($notice_text, 'woocommerce' ); ?>
	</div>

<?php
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
