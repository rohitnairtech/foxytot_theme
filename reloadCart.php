<?php
require('../../../wp-blog-header.php');
global $woocommerce; 
echo $woocommerce->cart->get_cart_contents_count();
?>
