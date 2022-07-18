
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Quick Facts";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Quick</b>
   <b class="slide-from-right">Facts</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $placeholder_img_banner,
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Here’s everything you need to know.',
    'Read the following for answers to the questions you might have [need copy for this]',
    $placeholder_img_square
  );
?>


<?php echo sec_hasColumns(
    'Deadlines',
    '3',
    '<p class="intro-text">[]</p>',
    'items-equal-height theme-cream',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo deadlines('Early Decision Round I'); ?>
      <?php echo deadlines_item('Applications Due', 'November 15'); ?>
      <?php echo deadlines_item('You’ll hear back around', 'Mid-December'); ?>
    <?php echo end_deadlines(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo deadlines('Early Decision Round II'); ?>
      <?php echo deadlines_item('Applications Due', 'January 1'); ?>
      <?php echo deadlines_item('You’ll hear back around', 'Late January or early February'); ?>
    <?php echo end_deadlines(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo deadlines('Regular Decision'); ?>
      <?php echo deadlines_item('Applications Due', 'January 1'); ?>
      <?php echo deadlines_item('You’ll hear back around', 'Late March'); ?>
    <?php echo end_deadlines(); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    'After You’ve Applied',
    'section-class',
    '',
    ''
); ?>

  <?php echo item_iconItem(
    null,
    'house-chimney',
    'icon-on-left'
  ); ?>
      <p>Within 5 days of receiving your application, we will send you an email with your Applicant ID and directions on how to access an online checklist for your application.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    null,
    'house-chimney',
    'icon-on-left'
  ); ?>
      <p>Adding all supporting documents to our system may take a few weeks. If there are items missing from your application, you will be notified before decision release for your specified application round.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    'Housing',
    'house-chimney',
    'icon-on-left'
  ); ?>
      <p>Students will be able to check their admission decision online on the same website you used to check the status of your application. Vassar does not release admission decisions via telephone.</p>
  <?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo site_footer(); ?>
