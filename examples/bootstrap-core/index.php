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
    'Solid Cream',
    'theme-cream',
    null,
    null
); ?>
<a href="" class="cta-link">Apply</a>

<a href="" class="btn btn-sm btn-primary">Apply</a>
<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
    'Solid Burgundy',
    'theme-burgundy',
    null,
    null
); ?>
<a href="" class="cta-link">Apply</a>

<a href="" class="btn btn-sm btn-block btn-primary">Apply</a>
<?php echo end_sec_regularContent(); ?>


<a href="" class="btn btn-sm btn-block btn-primary" role="button">Apply</a>


<?php echo sec_regularContent(
    'Solid Burgundy',
    '',
    null,
    null
); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo site_footer(); ?>
