
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
    'red-icons',
    ''
); ?>

  <?php echo item_iconItem(
    null,
    'list-check',
    'icon-on-left'
  ); ?>
      <p>Within 5 days of receiving your application, we will send you an email with your Applicant ID and directions on how to access an online checklist for your application.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    null,
    'clock',
    'icon-on-left'
  ); ?>
      <p>Adding all supporting documents to our system may take a few weeks. If there are items missing from your application, you will be notified before decision release for your specified application round.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    null,
    'check',
    'icon-on-left'
  ); ?>
      <p>Students will be able to check their admission decision online on the same website you used to check the status of your application. Vassar does not release admission decisions via telephone.</p>
  <?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
    'What’s in Your Application',
    '',
    ''
); ?>

  <p class="intro-text">Your application can contain a number of items, some of which are optional.</p>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_hasColumns(
    'Required',
    '2',
    '',
    'theme-extralightgray',
    '',
    ['title_level' => '3']
); ?>

  <?php echo item_col(); ?>

<ul class="style-checklist">
  <li><strong class="h3">Early Decision Agreement</strong><br>
    (Early Decision Applicants only)
  </li>
  <li><strong class="h3">School Report and High School Transcript</strong><br>
    To be completed and sent by your guidance counselor.
  </li>
  <li><strong class="h3">Mid-Year Grade Report</strong><br>
    Vassar requests each applicant’s most recent grade report to be sent by their school counselor.

    <ul>
      <li><strong>Early Decision I or II applicants:</strong> Vassar requires a first quarter/trimester grade report, which should be sent as soon as it becomes available, and first semester grades as soon as they become available.</li>
      <li><strong>Regular Decision applicants:</strong> A mid-year report with first semester grades is required when available, typically by February 1.</li>
    </ul>
  </li>
  <li><strong class="h3">Teacher Evaluations/Recommendation Letters </strong><br>
    Vassar requires two recommendations: one from your guidance counselor or school advisor, and one from a teacher in a core academic subject. If you wish, you may submit a third letter, either from another teacher or from someone else in your life who can share pertinent information.
  </li>
</ul>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo info_card(
      'Fee Waiver',
      '',
      'info'
    ); ?>

      <p>If the application fee poses a financial hardship, a fee waiver can be requested on the Common Application or the Coalition Application. Fee waivers are automatically offered to students who participated in the Vassar View program, QuestBridge Finalists, Veterans, and International applicants who are unable to use a credit card to pay the application fee.</p>

      <ul>
        <li>If you apply via the Common Application, under the Vassar College Member-Specific section you will be asked “Do you intend to use one of these school-specific fee waivers?” Please select “Yes, I will be using a Vassar fee waiver.”</li>
        <li>If you apply via the Coalition Application, use the fee waiver code: Vassar Fee Waiver.</li>
      </ul>

    <?php echo end_info_card(); ?>

  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    'SAT/ACT Scores',
    'gold-icons',
    ''
); ?>

  <p class="intro-text">Vassar will not require students to submit the SAT or ACT for the 2020–2021, 2021–2022, and 2022–2023 admission cycles, as part of a new pilot policy. First-year applicants may choose whether or not to submit their SAT and/or ACT test scores as a reflection of their academic abilities.</p>


  <?php echo item_iconItem(
    null,
    'icons',
    'icon-on-left'
  ); ?>
      <p>While scores are considered, they are secondary to the applicant’s high school transcript. Remember, we look at your application as a whole, and not just one particular element.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    null,
    'bolt-lightning',
    'icon-on-left'
  ); ?>
      <p>Should you choose to submit your scores, we will take your highest combined test scores. So, if you have taken the SAT or the ACT multiple times, we will combine your strongest scores on each section. Likewise, if you have taken both the SAT and the ACT, we will take whichever scores are higher.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    null,
    'landmark-dome',
    'icon-on-left'
  ); ?>
      <p>To submit your required standardized test scores to Vassar, you may request official scores from the College Board and/or ACT. In addition, Vassar will accept complete test scores reported on an official high school transcript, or copies of official SAT/ACT score reports validated by a school counselor.</p>
  <?php echo end_item_iconItem(); ?>



  <ul>

<?php echo end_sec_regularContent(); ?>







<?php echo site_footer(); ?>
