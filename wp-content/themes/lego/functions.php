<?php

function debug($bug) {
	echo "<pre>";
	print_r($bug);
	echo "</pre>";
}

function var_debug($bug) {
	echo "<pre>";
	var_dump($bug);
	echo "</pre>";
}

add_filter('the_generator', '__return_empty_string');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );

add_filter('show_admin_bar', '__return_false');
 
 
add_filter('pll_get_post_types', 'unset_cpt_pll', 10, 2);
function unset_cpt_pll( $post_types, $is_settings ) {
$post_types['acf-field-group'] = 'acf-field-group';
    $post_types['acf'] = 'acf';
    return $post_types;
}
 
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action( 'wp_head',      'rest_output_link_wp_head'              );
remove_action( 'wp_head',      'wp_oembed_add_discovery_links'         );
add_theme_support( 'post-thumbnails' );
add_filter( 'jpeg_quality', function(){return 100;} );		
 
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
} 


 function my_acf_google_map_api( $api ){	
	$api['key'] = 'AIzaSyBqQMQZvc0kLUzOZg8-1f3TVGb3Hs1_S4c';
	return $api;	
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
 



class Main_Submenu_Class extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $classes 	 = array('sub-menu', 'list-unstyled', 'child-navigation');
        $class_names = implode( ' ', $classes );
        $output .= "\n" . '<ul class="' . $class_names . '">' . "\n";
    }

    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) )
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {
        global $wp_query;

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names_arr = array();
        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names =  join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names_arr[] = esc_attr( $class_names );
        $class_names_arr[]='menu-item-id-'.$item->ID;
		$span_act="";
        if ( $args->has_children ) {
			$class_names_arr[] = 'has-child';	 
			if (in_array('current-menu-item',$classes)) {
				$class_names_arr[]='focus';
				$span_act='active';
			}
			if (in_array('current-menu-parent',$classes)) {
				$class_names_arr[]='focus';
				$span_act='active';
			}
			if (in_array('current-menu-ancestor',$classes)) {
				$class_names_arr[]='focus';
				$span_act='active';
			}
			
			
		}
		

        $class_names = ' class="'. implode(' ', $class_names_arr) . '"';
		$menu_locations = '';
		if (isset($args->menu_id)) {
			if ($args->menu_id!='') $menu_locations = $args->menu_id.'_';
		}
		
      $output .= $indent . '<li id="menu-item-'.$menu_locations. $item->ID . '"' . $value . $class_names .'>';
		$attributes='';
		if ($item->url!='#')
		{
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . $item->url .'"' : '';
		}
		
        $item_output = $args->before; 
		$item_output .='<div class="items"><a'. $attributes .'>';
        $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $args->link_after;
        $item_output .= '</a>';
        if ( $args->has_children )  $item_output .= '<span data-from="menu-item-'.$menu_locations.$item->ID.'" class="show_sub_menu '.$span_act.'"><i></i></span>';
        $item_output .= '</div>';
        
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
define( 'INSPIRY_FRAMEWORK', get_template_directory() . '/framework/' );
require_once( INSPIRY_FRAMEWORK . 'admin/admin-functions.php' );
require_once( INSPIRY_FRAMEWORK . 'admin/admin-interface.php' );
require_once( INSPIRY_FRAMEWORK . 'admin/theme-settings.php' );


function menulang_setup(){ 
load_theme_textdomain('themename', get_template_directory() . '/languages');
register_nav_menus( array('header_menu'   => __('Меню (В шапке)','themename')) );  
register_nav_menus( array('about_company_menu'   => __('О компании (в подвале)','themename')) );  
register_nav_menus( array('services_company_menu'   => __('Сервис и поддержка (в подвале)','themename')) );
    register_nav_menus( array('contact_company_menu'   => __('Наши контакты (в подвале)','themename')) );
}
add_action('after_setup_theme', 'menulang_setup');
function inspiry_theme_sidebars() { 
register_sidebar( array('name' => __( 'Логотип в шапке', 'themename' ),'id' => 'header_logo','description' => __( 'Логотип в шапке', 'themename' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '' ));  	
register_sidebar( array('name' => __( 'Иконки соц сетей на слайдере', 'themename' ),'id' => 'social_icon_header','description' => __( 'Иконки соц сетей на слайдере', 'themename' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '' ));  	
register_sidebar( array('name' => __( 'Иконки соц сетей в подвале', 'themename' ),'id' => 'social_icon_footer','description' => __( 'Иконки соц сетей в подвале', 'themename' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '' ));
register_sidebar( array('name' => __( 'Телефон компании (в шапке и подвале)', 'themename' ),'id' => 'company_phone','description' => __( 'Телефон компании (в шапке и подвале)', 'themename' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '' ));
register_sidebar( array('name' => __( 'Левый сайдбар', 'themename' ),'id' => 'left_custom_sidebar','description' => __( 'Левый сайдбар', 'themename' ),'before_widget' => '','after_widget' => '','before_title' => '','after_title' => '' ));
}
add_action( 'widgets_init', 'inspiry_theme_sidebars' );




function load_theme_styles() {

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'null', 'all');
    wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), 'null', 'all');
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), time(), 'all');
    wp_register_style( 'style-custom', get_template_directory_uri() . '/css/style.css', array(), time(), 'all');
    wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'fontawesome' );
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'style-custom' );
	wp_enqueue_script( 'jquery' );
	$js_directory_uri = get_template_directory_uri() . '/js/';		
	
	wp_register_script('modernizr',$js_directory_uri . 'modernizr.custom.js',array(),'null');	      
	wp_register_script('classie',$js_directory_uri . 'classie.js',array(),'null');	      
	wp_register_script('jquery-ui',$js_directory_uri . 'jquery-ui.min.js',array(),'null');
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'classie' );
	wp_enqueue_script( 'jquery-ui' );
			
	wp_register_script('bootstrap-bundle',$js_directory_uri . 'bootstrap.bundle.min.js',array(),'null');	 
	wp_enqueue_script( 'bootstrap-bundle' );
	wp_register_script('bootstrap-select',$js_directory_uri . 'bootstrap-select.min.js',array(),'null');	 
	wp_enqueue_script( 'bootstrap-select' ); 
			
	wp_register_script('fancybox',$js_directory_uri . 'jquery.fancybox.min.js',array(),'null');	 
	wp_enqueue_script( 'fancybox' );
			
	wp_register_script('slick',$js_directory_uri . 'slick.js',array(),'null');	 
	wp_enqueue_script( 'slick' );
			
	wp_register_script('script',$js_directory_uri . 'script.js',array( ),time(),true);	
	wp_enqueue_script( 'script' ); 
}		
add_action( 'wp_enqueue_scripts', 'load_theme_styles' ,100);


function create_post_type() {
    // Наши партнеры post type
    $post_type_labels = array(
        'name' => __('Home Партнеры', 'themename'),
        'singular_name' => __('Home Партнеры', 'themename'),
        'add_new' => __('Добавить', 'themename'),
        'add_new_item' => __('Добавить', 'themename'),
        'edit_item' => __('Редактировать', 'themename'),
        'new_item' => __('Добавить', 'themename'),
        'view_item' => __('Просмотреть', 'themename'),
        'search_items' => __('Найти', 'themename'),
        'not_found' => __('Не найдено', 'themename'),
        'parent_item_colon' => '',
    );
    $description = get_option('theme_custom_description');
    $post_type_args = array(
        'labels' => apply_filters('inspiry_property_post_type_labels', $post_type_labels),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 15,
        'description' => $description,
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array(
            'slug' => apply_filters('inspiry_property_slug', 'home_our_partner'),
        ),
    );
    register_post_type('home_our_partners', $post_type_args);

    // Наши Отзывы post type
    $post_type_labels = array(
        'name' => __('Home Отзывы', 'themename'),
        'singular_name' => __('Home Отзывы', 'themename'),
        'add_new' => __('Добавить', 'themename'),
        'add_new_item' => __('Добавить', 'themename'),
        'edit_item' => __('Редактировать', 'themename'),
        'new_item' => __('Добавить', 'themename'),
        'view_item' => __('Просмотреть', 'themename'),
        'search_items' => __('Найти', 'themename'),
        'not_found' => __('Не найдено', 'themename'),
        'parent_item_colon' => '',
    );
    $description = get_option('theme_custom_description');
    $post_type_args = array(
        'labels' => apply_filters('inspiry_property_post_type_labels', $post_type_labels),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_icon' => 'dashicons-format-status',
        'menu_position' => 15,
        'description' => $description,
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array(
            'slug' => apply_filters('inspiry_property_slug', 'home_our_review'),
        ),
    );
    register_post_type('home_our_reviews', $post_type_args);

    // Секция "Консультация"
    $post_type_labels = array(
        'name' => __('Секция "Консультация"', 'themename'),
        'singular_name' => __('Секция "Консультация', 'themename'),
        'add_new' => __(' ', 'themename'),
        'add_new_item' => __(' ', 'themename'),
        'edit_item' => __('Редактировать', 'themename'),
        'new_item' => __(' ', 'themename'),
        'view_item' => __(' ', 'themename'),
        'parent_item_colon' => '',
    );
    $description = get_option('theme_custom_description');
    $post_type_args = array(
        'labels' => apply_filters('inspiry_property_post_type_labels', $post_type_labels),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_icon' => 'dashicons-phone',
        'menu_position' => 15,
        'description' => $description,
        'supports' => array('title', 'thumbnail', 'editor'),
        'rewrite' => array(
            'slug' => apply_filters('inspiry_property_slug', 'consultation_section'),
        ),
    );
    register_post_type('consultation_section', $post_type_args);
    // FAQ Частые вопросы
    register_taxonomy('faqcat', array('faq'), array(
        'label'                 => 'Раздел вопроса', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Разделы вопросов',
            'singular_name'     => 'Раздел вопроса',
            'search_items'      => 'Искать Раздел вопроса',
            'all_items'         => 'Все Разделы вопросов',
            'parent_item'       => 'Родит. раздел вопроса',
            'parent_item_colon' => 'Родит. раздел вопроса:',
            'edit_item'         => 'Ред. Раздел вопроса',
            'update_item'       => 'Обновить Раздел вопроса',
            'add_new_item'      => 'Добавить Раздел вопроса',
            'new_item_name'     => 'Новый Раздел вопроса',
            'menu_name'         => 'Раздел вопроса',
        ),
        'description'           => 'Рубрики для раздела вопросов', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => false, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'faq', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ) );

    // тип записи - вопросы - faq
    register_post_type('faq', array(
        'label'               => 'Вопросы',
        'labels'              => array(
            'name'          => 'Вопросы',
            'singular_name' => 'Вопрос',
            'menu_name'     => 'FAQ Частые вопросы',
            'all_items'     => 'Все вопросы',
            'add_new'       => 'Добавить вопрос',
            'add_new_item'  => 'Добавить новый вопрос',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать вопрос',
            'new_item'      => 'Новый вопрос',
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_rest'        => false,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'             => array( 'slug'=>'faq/%faqcat%', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false ),
        'has_archive'         => 'faq',
        'query_var'           => true,
        'menu_icon'           => 'dashicons-editor-help',
        'supports'            => array( 'title', 'editor' ),
        'taxonomies'          => array( 'faqcat' ),
    ) );
}
add_action('init', 'create_post_type');
add_theme_support( 'post-thumbnails' );

function productAttr() {
	global $product;

		$product->list_attributes();
}

add_action('woocommerce_single_product_summary', 'productAttr', 20);

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 15);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 30);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 40 );

add_filter( 'add_to_cart_text', 'woo_custom_single_add_to_cart_text' );                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +

function woo_custom_single_add_to_cart_text() {

	return __( 'Купить', 'woocommerce' );

}

add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
	<span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
	<?php
	$fragments['.basket-btn__counter'] = ob_get_clean();
	return $fragments;
}


remove_action('woocommerce_template_single_add_to_cart', 'woocommerce_before_add_to_cart_quantity');


/* Удалить инпут на странице чекаут */
add_filter( 'woocommerce_checkout_fields' , 'customize_checkout_fields' );
function customize_checkout_fields( $fields ) {
    unset($fields['billing']['billing_state']);
    return $fields;}


 /*   Редирект на страницу категории*/
add_action( 'template_redirect', function() {
    if ( preg_match( '#^/product-card/?$#i', $_SERVER['REQUEST_URI'] ) ) {
        wp_redirect( 'https://ekspert-klimat.ru/catalog/', 301 );
        exit;
    }
} );



