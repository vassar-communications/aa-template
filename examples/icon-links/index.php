<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Icon links";

/*  ---------------------- */

?>
<!-- %%% -->
<?php echo site_header(); ?>

<?php echo sec_regularContent(
  'Section with icon links',
  null,
  null
); ?>

<p><?php icon('car'); ?> A car</p>

<p>Learn More <?php icon('arrow-right'); ?></p>


<?php echo end_sec_regularContent(); ?>


<?php echo site_footer(); ?>
