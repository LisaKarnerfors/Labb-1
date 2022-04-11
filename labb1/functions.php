<?php 

include('enqueue.php'); 

// Adderar features, menu & widegt-support på sidor
add_theme_support("menus");
add_theme_support("widgets");
add_theme_support( 'post-thumbnails' );

// Lägg till menyer - krokar in! = andra kan ändra i koden
    function register_menu() {
        register_nav_menu("Headermenu", "Top menu"); 
        register_nav_menu("Footermenu", "Footer menu");
    }

add_action("after_setup_theme", "register_menu",);


// Lägg till Widget och registrerar - Krav på inlämningsuppgiften
/* VG - sidbar ska kunna redigeras - använd widget */

/* register_sidebar(
    [
        "name" => "wigdet 1",
        "id" => "widget1",
        "description" => "This is the first widget"
    ]
);

register_sidebar(
    [
        "name" => "wigdet 2",
        "id" => "widget2",
        "description" => "This is the second widget"
    ]
);

register_sidebar(
    [
        "name" => "wigdet 3",
        "id" => "widget3",
        "description" => "This is the third widget"
    ]
); */


?>

