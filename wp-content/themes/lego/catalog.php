<?php
/**
 * Template Name: Каталог
 */
get_header(); ?>

    <section class="section catalog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="front_page_title h3"><?php the_title(); ?></h3>
            </div>
        </div>

    <div class="row catalog_wrapper">
        <?php
        $cat_args = array(
            'taxonomy' => 'product_cat',
            'orderby' => 'id', // здесь по какому полю сортировать
            'hide_empty' => false, // скрывать категории без товаров или нет
            'exclude' => array(18, 39),
            'parent' => 0 // id родительской категории
        );

        $cats = get_categories($cat_args);

        foreach ($cats as $cat) {
            $woo_cat_id = $cat->term_id;
            $woo_cat_name = $cat->name;
            $woo_cat_slug = $cat->slug;
            $category_thumbnail_id = get_woocommerce_term_meta($woo_cat_id, 'thumbnail_id', true);
            $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
            ?>
            <a href="<?php echo get_term_link( $woo_cat_id, 'product_cat' ); ?>" class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="our_product_block"
                     style="background-image: url('<?php echo $thumbnail_image_url; ?>') ">
                    <div class="our_product_content">
                        <div class="vertical_line"></div>
                        <div class="horisontal_line"></div>
                        <h2 class="our_product_title"><?php echo $woo_cat_name; ?></h2>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
    </div>
    </section>

    <?php get_footer(); ?>