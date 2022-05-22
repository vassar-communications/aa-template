<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Dropdowns";

/*  ---------------------- */

?>

<?php echo site_header(); ?>


<?php echo sec_regularContent(
  'Section with background image',
  null,
  null,
    ['bg-image-url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80',
    'bg-image-alt' => 'alt text']
); ?>


<?php

echo item_stat('witches', 40, null, ['hlevel' => 4]);

?>


<?php echo end_sec_regularContent(); ?>


<?php echo site_footer(); ?>
