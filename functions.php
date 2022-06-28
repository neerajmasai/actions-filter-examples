<?php

//Add a custom widget
function add_custom_widget(){
    register_sidebar(array(
        "name" => __("Sample Widget", "af"),
        "id" => "sample_sidebar",
        "description" => __("Sample Description", "af"),
    ));
}

//hook the custom widget function
add_action("widgets_init", "add_custom_widget");

//Add a filter to make excerpt uppercase
function convert_excerpt_to_upper($value){
    return strtoupper($value);
}

//hook the convert_excerpt function
add_filter("the_excerpt", 'convert_excerpt_to_upper');

