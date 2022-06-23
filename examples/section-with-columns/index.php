<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Section with columns";

/*  ---------------------- */

?>
<?php include($project_paths['main_project_root'].'/core/template-parts/patternlibrary.php');?>
<?php echo site_header(); ?>

  <?php echo sec_hasColumns(
    'Columns example',
    3,
    '<p class="intro-text">An intro paragraph goes here, is simply dummy text of the printing and typesetting industry.</p>'
  ); ?>

    <?php echo item_col(); ?>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_col(); ?>

    <?php echo item_col(); ?>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_col(); ?>

    <?php echo item_col(); ?>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_col(); ?>

  <?php echo end_sec_hasColumns(); ?>

<?php echo site_footer(); ?>
