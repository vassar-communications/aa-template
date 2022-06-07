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

<h3>Icon buttons</h3>

<p>These are inline items.</p>

<?php echo item_iconButton(
  'car',
  'sadfasfds',
  'vassar.edu');
?>

<h3>Icon card buttons</h3>

<p>These are blocks, similar to grid items. They differ from icon buttons in that they don't use the standard Bootstrap button markup
  They extend across the full width of a container.</p>

  <?php echo item_iconButton(
    'car',
    'sadfasfds',
    'vassar.edu',
    'btn-card'
  );
  ?>

<h3>Other</h3>

<p><?php icon('car'); ?> A car</p>

<p>Learn More <?php icon('arrow-right'); ?></p>


<?php echo end_sec_regularContent(); ?>


<?php echo site_footer(); ?>
