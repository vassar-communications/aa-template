<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Quick Facts",
  "feature_image":"/admission/assets/images/quick-facts/0198-19-11-kwe-library-vassar-vb-5394.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Quick&nbsp;</b>
   <b class="slide-from-right">Facts</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Students work in a reading room of the Thompson Memorial Library',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Here’s everything you need to know.',
    'We know you have questions. Find the answers you need below about application deadlines and decision dates, what happens after you apply, financial aid, and more!',
    '/admission/assets/images/quick-facts/1065_Vassar College_exteriors_campus life_Oct 2019_JA.jpg',
    null,
    null,
    ['img_alt_text' => 'Two students share a bike on one of the campus paths']
);
?>


<?php echo sec_hasColumns(
    'Deadlines',
    '3',
    null,
    'items-equal-height theme-cream',
    'gap-3',
    ['css' => '--section-intro-width: 56rem']
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
<?php echo deadlines_item('You’ll hear back around', 'Early February'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Regular Decision'); ?>
<?php echo deadlines_item('Applications Due', 'January 1'); ?>
<?php echo deadlines_item('You’ll hear back around', 'End of March'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>






<a id="standardized-testing"></a>
<?php echo sec_regularContent(
    'SAT/ACT Scores',
    'gold-icons theme-verylightgray',
    ''
); ?>

<p class="intro-text">Vassar will not require students to submit the SAT or ACT for the 2022–2023 admission cycle as part of a new pilot policy. First-year applicants may choose whether or not to submit their SAT and/or ACT test scores as a reflection of their academic abilities.</p>

<div class="icon-items-list">
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
</div>

<?php echo end_sec_regularContent(); ?>




<?php

$satact_info_card = info_card('Important', '', 'alert') . '<p>Applicants are advised not to wait until the last test date available for your application round. In the event of test date postponements due to weather, or delays in test score releases, Vassar tries to work with students but cannot guarantee scores will arrive in time for applicants to be considered in their chosen application round.</p>' . end_info_card();

echo sec_hasColumns(
    'Deadlines',
    '3',
    '<p class="intro-text">The following indicates the latest date you can take standardized tests.</p>' . $satact_info_card,
    'items-equal-height theme-cream',
    'gap-3'
); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Early Decision Round I'); ?>
<?php echo deadlines_item('SAT', 'November Sitting'); ?>
<?php echo deadlines_item('ACT', 'October Sitting'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Early Decision Round II'); ?>
<?php echo deadlines_item('SAT', 'December Sitting'); ?>
<?php echo deadlines_item('ACT', 'December Sitting'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Regular Decision'); ?>
<?php echo deadlines_item('SAT', 'December Sitting'); ?>
<?php echo deadlines_item('ACT', 'December Sitting'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    'Entrance Requirements',
    'red-icons',
    ''
); ?>

<p class="intro-text text-center">The typical candidate has taken a very challenging curriculum at their high school, taking full advantage of all that their school has to offer.</p>

<div class="icon-items-list">
    <?php echo item_iconItem(
        null,
        'book',
        'icon-on-left'
    ); ?>
    <p>We recommend students take four years of the five main academic core subjects: English, Math, Foreign Language, Natural Science, and History/Social Science. We seriously consider the quality of the senior year program.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
        null,
        'star',
        'icon-on-left'
    ); ?>
    <p>Our typical applicants have an unweighted A- average, are within the top 10%–20% of their class, have been actively involved in extracurricular activities and have shown leadership, and other accomplishments.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
        null,
        'award',
        'icon-on-left'
    ); ?>
    <p>The middle 50% of students admitted in 2019 scored between 1400–1520 on the SAT Evidence-Based Reading and Writing (EBRW) and Math Sections. The ACT middle 50% range was between 32–34. As noted above, we are not requiring SAT/ACT scores at this time.</p>
    <?php echo end_item_iconItem(); ?>
</div>



<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
