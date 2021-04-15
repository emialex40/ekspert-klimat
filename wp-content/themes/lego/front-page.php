<?php get_header(); ?>

<?php /*if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content();?>
<?php endwhile; endif; */

global $woocommerce, $product, $post;

?>

    <article class="front_page">
        <section class="main_screen_section">
            <div class="main_screen_slide_item slide_1"
                 style="background-image: url('<?php print the_field('hero_slider_bg_image_1') ?>') ">
                <div class="container">
                    <div class="main_screen_content">
                        <div class="main_screen_title h1"><?php print the_field('hero_slider_title_1') ?></div>
                        <a href="<?php print the_field('hero_slider_button_link_1') ?>"
                           class="link_button"><?php print the_field('hero_slider_button_text_1') ?></a>
                    </div>
                </div>
            </div>
            <div class="main_screen_slide_item slide_2"
                 style="background-image: url('<?php print the_field('hero_slider_bg_image_2') ?>') ">
                <div class="container">
                    <div class="main_screen_content">
                        <div class="main_screen_title h1"><?php print the_field('hero_slider_title_2') ?></div>
                    </div>
                </div>
                <div class="main_screen_advantages">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 col-6"><img
                                        src="<?php print the_field('hero_slider_features_image_1') ?>"
                                        alt="<?php print the_field('hero_slider_features_text_1') ?>">
                                <h5><?php print the_field('hero_slider_features_text_1') ?></h5>
                            </div>
                            <div class="col-sm-3 col-6"><img
                                        src="<?php print the_field('hero_slider_features_image_2') ?>"
                                        alt="<?php print the_field('hero_slider_features_text_2') ?>">
                                <h5><?php print the_field('hero_slider_features_text_2') ?></h5>
                            </div>
                            <div class="col-sm-3 col-6"><img
                                        src="<?php print the_field('hero_slider_features_image_3') ?>"
                                        alt="<?php print the_field('hero_slider_features_text_3') ?>">
                                <h5><?php print the_field('hero_slider_features_text_3') ?></h5>
                            </div>
                            <div class="col-sm-3 col-6"><img
                                        src="<?php print the_field('hero_slider_features_image_4') ?>"
                                        alt="<?php print the_field('hero_slider_features_text_4') ?>">
                                <h5><?php print the_field('hero_slider_features_text_4') ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_screen_slide_item slide_3"
                 style="background-image: url('<?php the_field('hero_slider_bg_image_3') ?>') ">
                <div class="container">
                    <div class="main_screen_content">
                        <div class="main_screen_title h2"><?php print the_field('hero_slider_title_3') ?></div>
                        <p class="h4 main_screen_subtitle"><?php print the_field('hero_slider_subtitle_3') ?></p>
                        <form action="#" method="post">
                            <i class="fal fa-envelope"></i>
                            <input type="email" placeholder="Email">
                            <input type="submit" value="подписаться">
                        </form>


                    </div>
                </div>
            </div>
            <div class="main_screen_slide_item slide_4"
                 style="background-image: url('<?php the_field('hero_slider_bg_image_4') ?>') ">
                <div class="container">
                    <div class="main_screen_content">
                        <div class="main_screen_title h1"><?php print the_field('hero_slider_title_4') ?></div>
                        <p class="h2 main_screen_subtitle"><?php print the_field('hero_slider_subtitle_4') ?></p>
                        <div class="main_screen_advantages">
                            <img src="<?php print the_field('hero_slider_left_icon_image_1') ?>"
                                 alt="<?php print the_field('hero_slider_title_4') ?>">
                            <img src="<?php print the_field('hero_slider_left_icon_image_2') ?>"
                                 alt="<?php print the_field('hero_slider_subtitle_4') ?>"></div>


                    </div>
                </div>
            </div>
        </section><!--main_screen_section-->
        <section class="our_products_section">
            <div class="container">
                <div class="col-12">
                    <h3 class="front_page_title h3"><?php print the_field('frontpage_title_2') ?></h3>
                </div>
                <div class="row">
                    <?php
                    $cat_args = array(
                        'taxonomy'    => 'product_cat',
                        'orderby'     => 'id', // здесь по какому полю сортировать
                        'hide_empty'  => false, // скрывать категории без товаров или нет
                        'exclude'      => array(18, 39),
                        'number'        => 6,
                        'parent'      => 0 // id родительской категории
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
        </section><!--our_products_section-->
        <section class="popular_products_section">
            <div class="container">
                <h3 class="front_page_title h3"><?php print the_field( 'frontpage_title_3' ) ?></h3>
                <!--front_page_title-->
                <div class="popular_products_slider">
                    <?php
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 15,
                        'product_cat'    => 'populyarnye-tovary' // 'populyarnye-tovary' for front-pade popular products
                    );

                    $loop = new WP_Query( $args );

                    //						debug( $query );
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post();
//								wc_get_template_part( 'content', 'product' );
                            ?>
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
                                            <a href="<?php echo do_shortcode( '[add_to_cart_url id="' . get_the_ID() . '"]' ); ?>"
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
                </div><!--row popular_products_slider-->
            </div><!--container-->
        </section><!--popular_products_section-->
        <section class="our_advantages_section">
            <div class="container">
                <h3 class="front_page_title">
                    <?php print the_field('frontpage_title_4') ?>
                </h3><!--front_page_title-->
                <div class="our_advantages_blocks">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="our_advantages_block">
                                <?php if (get_field('six_our_features_icon_1') != ""): ?>
                                    <img src="<?php print the_field('six_our_features_icon_1') ?>"
                                         alt="<?php if (get_field('six_our_features_title_1') != "") {
                                             print the_field('six_our_features_title_1');
                                         } elseif (get_field('six_our_features_subtitle_1') != "") {
                                             print the_field('six_our_features_subtitle_1');
                                         } else { ?>Преимущество 1<?php } ?>" class="our_advantages_icon">
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_title_1') != ""): ?>
                                    <h4 class="our_advantages_title"><?php print the_field('six_our_features_title_1') ?></h4>
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_subtitle_1') != ""): ?>
                                    <p class="our_advantages_description"><?php print the_field('six_our_features_subtitle_1') ?></p>
                                <?php endif; ?>
                            </div>    <!--our_advantages_block-->
                        </div><!--col-md-4 col-sm-6-->
                        <div class="col-md-4 col-sm-6">
                            <div class="our_advantages_block">
                                <?php if (get_field('six_our_features_icon_2') != ""): ?>
                                    <img src="<?php print the_field('six_our_features_icon_2') ?>"
                                         alt="<?php if (get_field('six_our_features_title_2') != "") {
                                             print the_field('six_our_features_title_2');
                                         } elseif (get_field('six_our_features_subtitle_2') != "") {
                                             print the_field('six_our_features_subtitle_2');
                                         } else { ?>Преимущество 2<?php } ?>" class="our_advantages_icon">
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_title_2') != ""): ?>
                                    <h4 class="our_advantages_title"><?php print the_field('six_our_features_title_2') ?></h4>
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_subtitle_2') != ""): ?>
                                    <p class="our_advantages_description"><?php print the_field('six_our_features_subtitle_2') ?></p>
                                <?php endif; ?>
                            </div>    <!--our_advantages_block-->
                        </div><!--col-md-4 col-sm-6-->
                        <div class="col-md-4 col-sm-6">
                            <div class="our_advantages_block">
                                <?php if (get_field('six_our_features_icon_3') != ""): ?>
                                    <img src="<?php print the_field('six_our_features_icon_3') ?>"
                                         alt="<?php if (get_field('six_our_features_title_3') != "") {
                                             print the_field('six_our_features_title_3');
                                         } elseif (get_field('six_our_features_subtitle_3') != "") {
                                             print the_field('six_our_features_subtitle_3');
                                         } else { ?>Преимущество 3<?php } ?>" class="our_advantages_icon">
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_title_3') != ""): ?>
                                    <h4 class="our_advantages_title"><?php print the_field('six_our_features_title_3') ?></h4>
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_subtitle_3') != ""): ?>
                                    <p class="our_advantages_description"><?php print the_field('six_our_features_subtitle_3') ?></p>
                                <?php endif; ?>
                            </div>    <!--our_advantages_block-->
                        </div><!--col-md-4 col-sm-6-->
                        <div class="col-md-4 col-sm-6">
                            <div class="our_advantages_block">
                                <?php if (get_field('six_our_features_icon_4') != ""): ?>
                                    <img src="<?php print the_field('six_our_features_icon_4') ?>"
                                         alt="<?php if (get_field('six_our_features_title_4') != "") {
                                             print the_field('six_our_features_title_4');
                                         } elseif (get_field('six_our_features_subtitle_4') != "") {
                                             print the_field('six_our_features_subtitle_4');
                                         } else { ?>Преимущество 4<?php } ?>" class="our_advantages_icon">
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_title_4') != ""): ?>
                                    <h4 class="our_advantages_title"><?php print the_field('six_our_features_title_4') ?></h4>
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_subtitle_4') != ""): ?>
                                    <p class="our_advantages_description"><?php print the_field('six_our_features_subtitle_4') ?></p>
                                <?php endif; ?>
                            </div>    <!--our_advantages_block-->
                        </div><!--col-md-4 col-sm-6-->
                        <div class="col-md-4 col-sm-6">
                            <div class="our_advantages_block">
                                <?php if (get_field('six_our_features_icon_5') != ""): ?>
                                    <img src="<?php print the_field('six_our_features_icon_5') ?>"
                                         alt="<?php if (get_field('six_our_features_title_5') != "") {
                                             print the_field('six_our_features_title_5');
                                         } elseif (get_field('six_our_features_subtitle_5') != "") {
                                             print the_field('six_our_features_subtitle_5');
                                         } else { ?>Преимущество 5<?php } ?>" class="our_advantages_icon">
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_title_5') != ""): ?>
                                    <h4 class="our_advantages_title"><?php print the_field('six_our_features_title_5') ?></h4>
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_subtitle_5') != ""): ?>
                                    <p class="our_advantages_description"><?php print the_field('six_our_features_subtitle_5') ?></p>
                                <?php endif; ?>
                            </div>    <!--our_advantages_block-->
                        </div><!--col-md-4 col-sm-6-->
                        <div class="col-md-4 col-sm-6">
                            <div class="our_advantages_block">
                                <?php if (get_field('six_our_features_icon_6') != ""): ?>
                                    <img src="<?php print the_field('six_our_features_icon_6') ?>"
                                         alt="<?php if (get_field('six_our_features_title_6') != "") {
                                             print the_field('six_our_features_title_6');
                                         } elseif (get_field('six_our_features_subtitle_6') != "") {
                                             print the_field('six_our_features_subtitle_6');
                                         } else { ?>Преимущество 6<?php } ?>" class="our_advantages_icon">
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_title_6') != ""): ?>
                                    <h4 class="our_advantages_title"><?php print the_field('six_our_features_title_6') ?></h4>
                                <?php endif; ?>
                                <?php if (get_field('six_our_features_subtitle_6') != ""): ?>
                                    <p class="our_advantages_description"><?php print the_field('six_our_features_subtitle_6') ?></p>
                                <?php endif; ?>
                            </div>    <!--our_advantages_block-->
                        </div><!--col-md-4 col-sm-6-->
                    </div><!--row-->
                </div><!--our_advantages_blocks-->
            </div><!--container-->
        </section><!--our_advantages_section-->
        <section class="our_partners_section">
            <div class="container">

                <h3 class="front_page_title">
                    <?php print the_field('frontpage_title_5') ?>
                </h3><!--front_page_title-->

                <div class="our_partners_block">
                    <?php if (have_posts()) : while (have_posts()) : the_post();

                     endwhile;
                    endif;
                    wp_reset_postdata();

                    $temp_query = $wp_query;
                    $args = array('post_type' => 'home_our_partners', 'posts_per_page' => -1, 'post_status' => 'publish', 'orderby' => 'menu_order', 'order' => 'asc');
                    $posts_partners = new WP_Query($args);

                    if ($posts_partners->have_posts()) {
                        while ($posts_partners->have_posts()) {
                            $posts_partners->the_post();

                            $img = '';
                            $post_thumbnail = get_field('_thumbnail_id', get_the_ID());
                            $urls = wp_get_attachment_image_src($post_thumbnail, 'full');
                            if (isset($urls[0])) $img = '<img src="' . $urls[0] . '" class="svg_img">';

                            ?>
                            <div class="our_partners_logo">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else {
                                    echo "<img src=" . get_template_directory_uri() . '/images/temp/Марка 2.png>';
                                }
                                ?>
                            </div>
                            <?php
                        }

                    }
                    wp_reset_postdata();
                    $wp_query = NULL;
                    $wp_query = $temp_query;
                    ?>
                </div><!--our_partners_logo-->
            </div><!--container-->
        </section><!--our_partners_section-->
        <section class="our_customer_review_section">
            <div class="container">
                <h3 class="front_page_title">
                    <?php print the_field('frontpage_title_6') ?>
                </h3>
                <div class="our_customer_review_block">
                    <?php if (have_posts()) : while (have_posts()) : the_post();

                    endwhile;
                    endif;
                    wp_reset_postdata();

                    $temp_query = $wp_query;
                    $args = array('post_type' => 'home_our_reviews', 'posts_per_page' => -1, 'post_status' => 'publish', 'orderby' => 'menu_order', 'order' => 'asc');
                    $posts_reviews = new WP_Query($args);

                    if ($posts_reviews->have_posts()) {
                        while ($posts_reviews->have_posts()) {
                            $posts_reviews->the_post();

                            $img = '';
                            $post_thumbnail = get_field('_thumbnail_id', get_the_ID());
                            $urls = wp_get_attachment_image_src($post_thumbnail, 'full');
                            if (isset($urls[0])) $img = '<img src="' . $urls[0] . '" class="svg_img">';

                            ?>
                    <div class="our_customer_review_slide">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else {
                                echo "<img src=" . get_template_directory_uri() . '/images/temp/Марка 2.png>';
                            }
                            ?>
                    </div><!--our_customer_review_slide-->
                            <?php
                        }

                    }
                    wp_reset_postdata();
                    $wp_query = NULL;
                    $wp_query = $temp_query;
                    ?>
                </div><!--our_customer_review_block-->
            </div><!--container-->
        </section><!--our_customer_review_section-->
        <section class="our_instagram_section">
            <h3 class="front_page_title">
                <?php print the_field('frontpage_title_7') ?>
            </h3>
            <div class="our_instagram_block">
                <?php echo do_shortcode('[iscwp-slider username="ekspert.klimat" limit="40" popup_gallery="true" show_likes_count="true" slidestoshow="5" arrows="true" dots="false" gallery_height="290"]'); ?>
            </div><!--our_instagram_block-->
        </section><!--our_instagram_section-->
    </article>


    <!--<section style="height: 800px; widows: 100%;"><i class="fal fa-chevron-right"></i><i class="fal fa-chevron-left"></i></section>-->
<?php get_footer(); ?>