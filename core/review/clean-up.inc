<?php
function clean_up_variable($variable) {
    $variable = str_replace('$page_title = "', '', $variable);
    $variable = str_replace('$page_docs = "', '', $variable);
    $variable = str_replace(';', '', $variable);
    $variable = str_replace('"', '', $variable);
    return $variable;
}