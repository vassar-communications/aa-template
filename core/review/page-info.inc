<?php

function get_page_info_from_array($page_contents) {
    // problem with array_search() is that it doesn't do partial string matches
    $page_title = implode('', (preg_grep('/^\$page_title\s.*/', $page_contents)));
    $page_title = clean_up_variable($page_title);

    $page_docs = implode('', (preg_grep('/^\$page_docs\s.*/', $page_contents)));
    $page_docs = clean_up_variable($page_docs);

    $page_info['title'] = $page_title;
    $page_info['docs'] = $page_docs;

    return $page_info;
}