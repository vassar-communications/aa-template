<style>
    .active {
        font-weight: bold;
    }
    ::selection {
        background: #afa; /* WebKit/Blink Browsers */
        color: #333;
    }
    ::-moz-selection {
        background: #afa; /* Gecko Browsers */
        color: #333;
    }


    .pattern-site-nav summary:focus {
        border: none;
    }
    .pattern-site-nav details pre {
        white-space: pre-wrap;
        background: #2c2c2c;
        color: #afa;
        padding: 2rem;
        margin: 0 2rem 2rem;
        border-radius: 0.4rem;
        border: 1px solid #444;
        box-shadow: inset 0 0.1rem 0.2rem #111;
    }
    .pattern-site-nav nav {
        position: relative;
        z-index: 40;
    }
    .pattern-site-nav nav b,
    .about-this-pattern {
        display: inline-block;
        padding: 1rem;
    }
    .about-this-pattern {
        position: absolute;
        top: 0;
        right: 0;
    }
    .pattern-site-nav nav ul {
        display: none;
        position: absolute;
        background: #fff;
        box-shadow: 0 1rem 1rem rgb(0 60 100 / 20%);
        padding: 0;
    }
    .pattern-site-nav nav ul li {
        list-style: none;
        display: block;
        margin-bottom: 0;
    }
    .pattern-site-nav nav ul li a {
        display: block;
        padding: 0.4rem 1rem;
        text-decoration: none;
    }
    .pattern-site-nav nav ul li a:hover {
        background: #0d6efd;
        color: #fff;
    }
    .pattern-site-nav nav:hover b {
        background: #0d6efd;
        color: #fff;
    }
    .pattern-site-nav nav:hover ul {
        display: block;
        /*  bottom: 2.6rem; */
    }
    .pattern-menu {
        width: 20rem;
    }

    .pattern-site-nav {
        display: flex;
        border-bottom: 1px solid #ddd;
    }

    .pattern-site-nav details[open] {
        background: #333;
        color: #eee;
    }

</style>

<?php


function pattern_nav() {
    global $project_paths;

    $directory = $project_paths['main_project_root'].'/examples';
    $scanned_directory = array_values(array_diff(scandir($directory), array('..', '.', '.DS_Store')));


    echo '<nav><b>Menu</b><ul class="pattern-menu">';

    foreach ($scanned_directory as &$page) {

//    echo $page . '--' . get_current_page_name() . '<br>';

        if($page == get_current_page_name()) {
            $active_class = 'active';
        }
        else $active_class = '';

        $page_contents = file_get_contents($directory.'/'.$page.'/index.php');
        $page_contents = explode(PHP_EOL, $page_contents);
        echo '<li><a class="'.$active_class.'" href="'.$project_paths['public_path'].'/examples/'.$page.'/index.php'.'">';

        $page_info = get_page_info_from_array($page_contents);
        echo $page_info['title'] . '</a></li>';
    }
    unset($item);

    echo '</ul></nav>';
}


function get_docs_link() {
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
    $page_contents = file_get_contents($rootDir . $_SERVER['PHP_SELF']);
    $page_contents = explode(PHP_EOL, $page_contents);
    $page_info = get_page_info_from_array($page_contents);
    $docs_link = clean_up_variable($page_info['docs']);
    return '<a class="about-this-pattern" href="'.$docs_link.'">About this pattern</a>';
}


?>



<div class="pattern-site-nav">
    <?php pattern_nav(); ?>

    <?php show_code(); ?>
    <?php echo get_docs_link(); ?>
</div>