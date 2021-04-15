<?php
add_action('init','of_options');

if (!function_exists('of_options'))
{

    function of_options()
    {

        /*
        *	Theme Shortname
        */
        $themename = "theme";
        $shortname = "theme";

        /*
        *	Populate the options array
        */
        global $tt_options;

        $tt_options = get_option('of_options');

        $tt_pages = array();

        $tt_pages_obj = get_pages('sort_column=post_parent,menu_order');

        foreach ($tt_pages_obj as $tt_page)
        {
            $tt_pages[$tt_page->ID] = $tt_page->post_title;
        }

        $tt_pages_tmp = array_unshift($tt_pages, "Select a page:" );

        /*-----------------------------------------------------------------------------------*/
        /* Create The Custom Theme Customization Panel
        /*-----------------------------------------------------------------------------------*/
        $options = array(); // do not delete this line - sky will fall
  
        /* Option Page - Header Options */
		$options[] = array( "name" => __('UI Guide','themename'),
            "id" => $shortname."_global_styles",
            "type" => "heading");
			  $options[] = array( "name" => __('Logo','themename'), 
            "id" => $shortname."_logo",
            "std" => "",
            "type" => "upload"); 
        $options[] = array( "name" => __('Favicon','themename'), 
            "id" => $shortname."_favicon",
            "std" => "",
            "type" => "upload");  
        $options = apply_filters('framework_theme_options',$options);

        update_option('of_template',$options);
        update_option('of_themename',$themename);
        update_option('of_shortname',$shortname);

    }
}

?>