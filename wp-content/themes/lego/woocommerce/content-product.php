<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
    <div class="popular_products_block">
        <a href="<?php the_permalink(); ?>">
            <div class="popular_products_image">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div><!--popular_products_image-->
            <div class="popular_products_title_block">
                <h4 class="popular_products_title"><?php the_title(); ?></h4>
                <div class="popular_products_icons">
                    <?php echo do_shortcode('[ti_wishlists_addtowishlist]'); ?>
                    <span  class="icon_characteristics">
                                                <?php echo do_shortcode('[yith_compare_button]'); ?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.60498 6.20485V23.4706C6.60498 23.7215 6.78361 23.925 7.00392 23.925H10.1955C10.4158 23.925 10.5944 23.7215 10.5944 23.4706V6.20485C10.5944 5.95393 10.4158 5.75049 10.1955 5.75049H7.00392C6.78361 5.75049 6.60498 5.95393 6.60498 6.20485ZM7.40286 6.65921H9.79651V23.0162H7.40286V6.65921Z" fill="black"/>
                                                    <path d="M12.9883 23.925H16.1798C16.4001 23.925 16.5788 23.7221 16.5788 23.4719V0.818665C16.5788 0.568462 16.4001 0.365601 16.1798 0.365601H12.9883C12.768 0.365601 12.5894 0.568462 12.5894 0.818665V23.4719C12.5894 23.7221 12.768 23.925 12.9883 23.925ZM13.3872 1.27173H15.7809V23.0188H13.3872V1.27173Z" fill="black"/>
                                                    <path d="M19.6372 23.925H22.8288C23.0491 23.925 23.2277 23.67 23.2277 23.3554V9.68578C23.2277 9.37124 23.0491 9.11621 22.8288 9.11621H19.6372C19.4169 9.11621 19.2383 9.37124 19.2383 9.68578V23.3554C19.2383 23.67 19.4169 23.925 19.6372 23.925ZM20.0362 10.2553H22.4298V22.7858H20.0362V10.2553Z" fill="black"/>
                                                    <path d="M0.595512 23.6661H3.6643C3.87614 23.6661 4.0479 23.4654 4.0479 23.218V12.464C4.0479 12.2165 3.87614 12.0159 3.6643 12.0159H0.595512C0.383672 12.0159 0.211914 12.2165 0.211914 12.464V23.218C0.211914 23.4654 0.383672 23.6661 0.595512 23.6661ZM0.979111 12.912H3.2807V22.7699H0.979111V12.912Z" fill="black"/>
                                                </svg>
                                            </span>
                </div><!--popular_products_icons-->
            </div><!--popular_products_title-->
            <div class="popular_products_content">
                <?php $excerpt = get_the_excerpt(); ?>
                <div class="popular_products_description"><?php echo $excerpt; ?></div>
                <div class="price_block">
                    <p class="price_text">цена</p>
                    <p class="price_number h4"><?php echo $product->get_price_html(); ?></p>
                    <a href="<?php echo do_shortcode('[add_to_cart_url id="' . get_the_ID() . '"]'); ?>"
                       class="link_button_additional">в корзину</a>
                </div><!--price_block-->

            </div><!--popular_products_content-->
        </a>
    </div>
<!--	--><?php
//	/**
//	 * Hook: woocommerce_before_shop_loop_item.
//	 *
//	 * @hooked woocommerce_template_loop_product_link_open - 10
//	 */
//	do_action( 'woocommerce_before_shop_loop_item' );
//
//	/**
//	 * Hook: woocommerce_before_shop_loop_item_title.
//	 *
//	 * @hooked woocommerce_show_product_loop_sale_flash - 10
//	 * @hooked woocommerce_template_loop_product_thumbnail - 10
//	 */
//	do_action( 'woocommerce_before_shop_loop_item_title' );
//
//	/**
//	 * Hook: woocommerce_shop_loop_item_title.
//	 *
//	 * @hooked woocommerce_template_loop_product_title - 10
//	 */
//	do_action( 'woocommerce_shop_loop_item_title' );
//
//	/**
//	 * Hook: woocommerce_after_shop_loop_item_title.
//	 *
//	 * @hooked woocommerce_template_loop_rating - 5
//	 * @hooked woocommerce_template_loop_price - 10
//	 */
//	do_action( 'woocommerce_after_shop_loop_item_title' );
//
//	/**
//	 * Hook: woocommerce_after_shop_loop_item.
//	 *
//	 * @hooked woocommerce_template_loop_product_link_close - 5
//	 * @hooked woocommerce_template_loop_add_to_cart - 10
//	 */
//	do_action( 'woocommerce_after_shop_loop_item' );
//	?>
</li>
