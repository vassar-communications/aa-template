<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Icon items";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<!-- FEATURE ICONS -->

<?php echo sec_hasColumns(
  'Icon columns',
  3
); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'title',
      'trophy',
      'icon-on-left'
    );
    ?>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'title',
      'arrows-fullscreen',
      'icon-on-left'
    );
    ?>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'title',
      'sun',
      'icon-on-left'
    );
    ?>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>









<!-- FEATURE ICONS -->

<?php echo sec_hasColumns(
  'Icon columns',
  3
); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'title',
      'trophy',
      'style-feature'
    );
    ?>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'title',
      'arrows-fullscreen',
      'style-feature'
    );
    ?>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'title',
      'sun',
      'style-feature'
    );
    ?>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
