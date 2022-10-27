<?php

function get_current_page_name() {
    $current_page_name = $_SERVER['PHP_SELF'];
    $path_parts = pathinfo($current_page_name);
    $current_page_name = $path_parts['dirname'];
    $current_page_name = explode('/', $current_page_name);
    $current_page_name = end($current_page_name);

    return $current_page_name;
}
