<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>



<!-- %%% -->

<?php

/*  PAGE INFO ============ */

$page_title = "Bootstrap Components";

/*  ---------------------- */

?>
<?php include($project_paths['main_project_root'].'/core/template-parts/patternlibrary.php');?>
<?php echo site_header(); ?>
<style>
    :root {
        --animation-duration: 1s;
        --sequential-animation-item-gap: 0.1s;
    }
</style>

<?php echo sec_regularContent(
    'Animated list',
    null,
    null,
    ['title_classes' => 'animate-when-content-appears animation-zoom-in']
); ?>



<?php echo site_footer(); ?>
