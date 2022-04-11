<?php 

// Köar in CSS & JS filer
function load_scripts() {

    // CSS
    wp_enqueue_style("bootstrap", get_template_directory_uri()."/css/bootstrap.css");
    wp_enqueue_style("font-awesome", get_template_directory_uri()."/css/font-awesome.css");
    wp_enqueue_style("style", get_template_directory_uri()."/css/style.css");

    // JS
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js'); 
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js'); 

}

add_action("wp_enqueue_scripts", "load_scripts");


?>