<?php echo deadlines(
  'Application Deadlines',
  null,
  null,
  'shadow'
); ?>

  <?php include($project_paths['main_project_root'].'/admission/inc/modules/deadlines-early-decision.php'); ?>

  <?php echo deadlines_item('Regular Decision', 'January 4'); ?>
  <?php echo deadlines_item('Spring Transfer', 'November 1'); ?>
  <?php echo deadlines_item('Fall Transfer', 'March 15'); ?>

<?php echo end_deadlines(); ?>
