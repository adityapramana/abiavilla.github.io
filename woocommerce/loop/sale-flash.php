<?php
/**
 * Product loop sale flash
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>
<?php if ( $product->is_on_sale() ) : ?>

	<?php echo apply_filters( 'woocommerce_sale_flash', '<div class="btPriceTableSticker"><div><div>' . esc_html__( 'Sale!', 'hotelcalifornia' ) . '</div></div></div>', $post, $product ); ?>

<?php endif; ?>
