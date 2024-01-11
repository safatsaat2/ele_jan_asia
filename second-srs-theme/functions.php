<?php 

function intiialFunction(){

    load_theme_textdomain("blackSymbol");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu("topmenu", __("Top Menu", "firstSrsTheme"));

}

add_action("after_setup_theme",  "intiialFunction");

function blackSymbol_assets()
{
    wp_enqueue_style("localStyle", get_stylesheet_uri(), null, 1);
    wp_enqueue_script("tailwind", "//cdn.tailwindcss.com");
    wp_enqueue_script("localScript", get_template_directory_uri() . "/assets/js/main.js", null, 1);
}
add_action("wp_enqueue_scripts", "blackSymbol_assets");

$width = 200;
$height = 300;

add_image_size("post_img", $width, $height, true);