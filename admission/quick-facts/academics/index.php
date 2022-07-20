
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */


$page_supertitle = "Quick Facts";
$page_title = "Academics";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($placeholder_img_banner); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>





<?php echo sec_hasColumns(
    'Academics at Vassar',
    '2',
    null,
    'items-equal-height mw-inner-1 theme-cream',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average class size',
      '17',
      'Many of our upper-level classes have fewer than 10 students.'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
  <?php echo item_stat(
    'Student:Faculty ratio',
    '8:1',
    'All classes are taught by professors, not teaching assistants or graduate student instructors.'
  ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    'There’s a major for that',
    'animate-when-content-appears red-icons mw-inner-4',
    '',
    ['title_level' => '3']
); ?>
<p class="tagline text-center mb-2">Most popular majors</p>

  <?php echo animated_statement('English · Political Science · Psychological Science · Economics · Biology', 'text-center'); ?>

  <div class="icon-items-list">
    <?php echo item_iconItem(
      null,
      'list-check',
      'icon-on-left'
    ); ?>
        <p>Vassar does not have a core curriculum, so students are able to complete a double major within four years.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
      null,
      'list-check',
      'icon-on-left'
    ); ?>
        <p>  Some students create their own majors, combining disciplines of particular personal interest. A large number of our students complete a major and a correlate sequence (minor), sometimes in academically disparate fields.</p>
    <?php echo end_item_iconItem(); ?>
  </div>

  <?php echo cta_link(
    '/admission/explore/academics/',
    'See all our majors and minors'
  ); ?>

<?php echo end_sec_regularContent(); ?>





<?php echo sec_hasColumns(
    'Credit',
    '3',
    'Vassar awards credit for scores of 4 or 5 on the AP exams and for scores of 5, 6  or 7 on IB Higher Level exams. A maximum of 2 units of pre-matriculation examination-based credits will be awarded.',
    'items-equal-height mw-inner-2 theme-cream',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'AP score',
      '4, 5'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'IB Higher Level score',
      '5–7'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Max credits awarded',
      '2',
      'units'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>













<?php echo sec_regularContent(
    'Credit',
    'animate-when-content-appears red-icons mw-inner-4',
    '',
    ['title_level' => '3']
); ?>

<?php echo end_sec_regularContent(); ?>





<?php echo sec_hasColumns(
    'Learning in the Community',
    '2',
    null,
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Internships',
        '[NEED LINK]',
        ['url' => $placeholder_img_square, 'alt' => 'replacealttext' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link hey-im-broken'
    ); ?>
        <p>Internship opportunities—what we call Community-Engaged Learning—are available in Poughkeepsie, Albany, and New York City. Nearly 70% of Vassar students participate in community-engaged learning for credit at some point during their Vassar careers.</p>
    <?php echo end_item_cardWithText('Learn more'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Study Abroad',
        '[NEED LINK]',
        ['url' => $placeholder_img_square, 'alt' => 'replacealttext' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link hey-im-broken'
    ); ?>
        <p>Vassar students (usually juniors) may study abroad for one semester or for a full academic year. About 45% of our students participate in our study-away programs prior to graduation.</p>
    <?php echo end_item_cardWithText('Learn more about studying away '); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>





<?php echo relatedTopics(); ?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
