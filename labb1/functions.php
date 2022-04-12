<?php 

include('enqueue.php'); 

// Adderar features, menu & widegt-support på sidor
add_theme_support("menus");
add_theme_support('widgets');
add_theme_support("post-thumbnails");

// Lägg till menyer - header, footer & sidemenu. 
    function register_menu() {
        register_nav_menu("headermenu", "Top menu");
        register_nav_menu("footermenu", "Footer menu");
        register_nav_menu("sidemenu", "Side menu");
    }


// Låter oss kroka in - gör action
add_action("after_setup_theme", "register_menu");

/* Storlek på bilder - bloggsidan */
add_image_size("blogImage_size", 635, 423, true );


// Widget för sidebar
function widget_sidebar() {

    register_sidebar(
        [
            "name" => "sidebar menu",
            "id" => "sidebar-menu",
            "description" => "Sidebar menu"
        ]
    );
}

add_action("after_setup_theme", "widget_sidebar",);


// Widget för Copyright
function widget_copyright() {

    register_sidebar(
        [
            "name" => "copyright footer",
            "id" => "copyright",
            "description" => "Copyright footer"
        ]
    );
}

add_action("after_setup_theme", "widget_copyright",);


// Footer widgets
function widget_footer() {

register_sidebar(
    [
        "name" => "wigdet footer1",
        "id" => "widgetfooter1",
        "description" => "About us"
    ]
);

register_sidebar(
    [
        "name" => "widget footer2",
        "id" => "widgetfooter2",
        "description" => "Contact us"
    ]
);

register_sidebar(
    [
        "name" => "widget footer3",
        "id" => "widgetfooter3",
        "description" => "Social media icons"
    ]
);

}

add_action("after_setup_theme", "widget_footer");

?>


