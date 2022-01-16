<?php

function halim_css_js_enquee(){
    wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
}

add_script('wp_enquee', 'halim_css_js_enquee');