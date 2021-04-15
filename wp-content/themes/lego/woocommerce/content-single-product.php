<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

defined('ABSPATH') || exit;

global $product;
global $woocommerce;
global $post;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.

    return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('product_card_section', $product); ?>>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-5 col-12">
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action('woocommerce_before_single_product_summary');
                ?>
            </div>

            <div class="col-xl-6 col-md-7 col-12 pdp-description">
                <div class="summary entry-summary">
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
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    do_action('woocommerce_single_product_summary');
                    ?>
                </div>

            </div>
        </div>
    </div>

    <?php

    $categories = get_the_terms($post->ID, 'product_cat');
    $cat = '';

    foreach ($categories as $category) {
        $cat = $category->slug;
    }
    ?>

    <section class="current_cat">
        <h2 class="h3 front_page_title">Модели из этой серии</h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular_products_slider">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => 15,
                            'product_cat' => $cat, // 'populyarnye-tovary' for front-pade popular products
                            'operator' => 'IN'
                        );

                        $loop = new WP_Query($args);

//                        						debug( $loop );
                        if ($loop->have_posts()) :
                            while ($loop->have_posts()) : $loop->the_post();
//								wc_get_template_part( 'content', 'product' );
                                ?>
                                <?php $id = get_the_ID(); ?>
                                <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
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
                                                <p class="price_number h4"><?php echo  wc_price( $price ); ?></p>
                                                <a href="<?php echo do_shortcode('[add_to_cart_url id="' . $id . '"]'); ?>"
                                                   class="link_button_additional">в корзину</a>
                                            </div><!--price_block-->

                                        </div><!--popular_products_content-->
                                    </a>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
    </section>

    <?php
    $args_con = array(
        'post_type' => 'consultation_section',
        'per_page' => -1,
        'order' => 'ACS'
    );

    $query = new WP_Query($args_con);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>
        <section class="consultation_section">
            <div class="consultation_section_bg"
                 style="background-image: url(<?php the_field('consultation_bg') ?>);"></div>
            <div class="consultation_section_block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-12 consultation_left_side">
                            <h2 class="consultation_section_title"><?php the_field('consultation_title') ?></h2>
                            <h4 class="consultation_section_subtitle"><?php the_field('consultation_subtitle'); ?>
                            </h4>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="consultation_section_form"><?php echo the_content(); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
    endwhile;
    endif;
    wp_reset_postdata();
    ?>

