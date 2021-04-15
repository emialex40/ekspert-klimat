<?php
    global $woocommerce;
    global $product;
?>

<!DOCTYPE HTML>
<html>

<head <?php language_attributes(); ?>>
    <title><?php wp_title( '' ); ?></title>
    <meta http-equiv="Content-Type" content="text/html;">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php
	wp_head();

	$favicon = get_option( 'theme_favicon' );
	$logo    = get_option( 'theme_logo' );
	?>
    <meta name='apple-itunes-app' content='app-id=​myAppStoreID​'>
    <link rel="icon" href="<?php print $favicon; ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php print $favicon; ?>" type="image/x-icon" />

</head>

<body <?php if ( is_front_page() ) {
	print ' class="front_page" ';
} ?>>
    <div id="root">
        <div class="app">
            <div class="app_main">
                <header>
                    <div class="header_block">
                        <div class="container">
                            <div class="row align-items-center height_100">
                                <div class="col-xl-2 col-md-2 col order-xl-0 order-md-0 order-1 logo">
                                    <?php if ( $logo != '' ) { ?>
                                    <?php if ( ! is_front_page() ) {
										print '<a href="' . get_home_url() . '">';
									} ?>
                                    <img src="<?php print $logo; ?>">
                                    <?php if ( ! is_front_page() ) {
										print '</a>';
									} ?>
                                    <?php } ?>
                                    <!-- Логотип пока не нужен. Тут должна выводиться Надпись Интернет-магазин климатической техники-->
                                </div>
                                <div class="col-xl-3 order-xl-1 header_title hide_1200">
                                    <h3><?php echo get_bloginfo( 'description' ); ?></h3>
                                </div>
                                <div class="col-xl-3 offset-xl-1 order-lg-2 header_phone_block hide_1200">
                                    <div class="header_phone_icon"><i class="fal fa-phone fa-flip-horizontal"></i></div>
                                    <div class="header_phone_content">
                                        <?php dynamic_sidebar( 'company_phone' ); ?>
                                        <!--                                    <span>заказать обратный звонок</span>-->
                                        <!-- Можно кастомно оставить или в виджете вставить прям штмл кодом вместе с телефоном-->
                                    </div>
                                </div>
                                <div
                                    class="col-xl-3 col-md-auto col-auto order-xl-3 order-md-2 order-2 header_icons_block">
                                    <!-- ПОИСК 1!!! "search" для взаимодействия с формой к этому классу ничего из css не прикреплено -->
                                    <a href="#" class="header_icons_search search hide_1200"><i
                                            class="fal fa-search"></i>
                                    </a>
                                    <!--                                <a href="#" class="header_icons_favorites"><i class="fal fa-heart"></i><span-->
                                    <!--                                            class="number">5</span></a>-->

                                    <?php echo do_shortcode('[ti_wishlist_products_counter]'); ?>
                                    <a href="<?php echo $woocommerce->cart->get_cart_url() ?>"
                                        class="header_icons_cart cart">
                                        <i class="fal fa-shopping-cart">
                                            <span
                                                class="number"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span></i></a>
                                    <a href="/my-account/" class="header_icons_customer customer"><i
                                            class="fal fa-user"></i></a>
                                </div>
                                <div class="col-xl-12  order-xl-4 col order-md-1 menu header_menu_section hide_768">
                                    <?php
								if ( has_nav_menu( 'header_menu' ) ) {
									wp_nav_menu( array(
										'theme_location'  => 'header_menu',
										'menu_class'      => 'header_menu_links',
										'container'       => '',
										'container_class' => '',
										'menu_id'         => 'header_menu_links',
										'walker'          => new Main_Submenu_Class()
									) );
								}
								?>
                                    <div class="search_wrapper">
                                        <?php echo do_shortcode('[wcas-search-form]'); ?>
                                    </div>
                                </div>
                                <div class="col-12 order-md-4 order-3 header_form_search">
                                    <?php echo do_shortcode('[wcas-search-form]'); ?>
<!--                                    <i class="fal fa-search"></i>-->
<!--                                    <input type="search" id="head_search" placeholder="Поиск">-->
<!--                                    <button type="submit" for="head_search"-->
<!--                                        class="link_button_additional">Найти</button>-->
                                </div>
                                <div class="col-auto order-0 mob_menu header_mob_menu_section">
                                    <button id="hamburger_header" class="hamburger hamburger--collapse"
                                        type="button"><span class="hamburger-box"><span
                                                class="hamburger-inner"></span></span></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </header>
                <main>
