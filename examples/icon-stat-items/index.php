<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<!-- %%% -->

<?php

/*  PAGE INFO ============ */

$page_title = "Icon stat items";
$page_docs = "https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.wh2ab5mcltu2";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo sec_wideContent(
  'Your college journey begins here.',
  '<p class="section-intro-text">Our Admission team is here to help you with:</p>',
  null,
  'mw-4'
); ?>

  <div class="stat-grid animation-group animate-when-content-appears animation-zoom-in">

    <?php echo item_statIcon(
      '2,435',
      'students',
      'car',
      'animation-item'
    ); ?>

    <?php echo item_statIcon(
      '340',
      'faculty',
      'car',
      'animation-item'
    ); ?>

    <?php echo item_statIcon(
      '$54K',
      'average aid award',
      'car',
      'animation-item'
    ); ?>

    <?php echo item_statIcon(
      '51',
      'majors',
      'car',
      'animation-item'
    ); ?>

    <?php echo item_statIcon(
      '8:1',
      'students to faculty',
      'car',
      'animation-item'
    ); ?>

    <?php echo item_statIcon(
      '27',
      'varsity teams',
      'car',
      'animation-item'
    ); ?>

    <?php echo item_statIcon(
      '170',
      'student orgs',
      'car',
      'animation-item'
    ); ?>

  </div>

<?php echo end_sec_wideContent(); ?>

<?php echo site_footer(); ?>
