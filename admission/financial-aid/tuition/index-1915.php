
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{"page_title":"Tuition & Fees","page_classes":"","feature_image":"/admission/assets/images/financial-aid/tuition/Vassar_Reception_20210601_KR_0173.jpg"}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'financial-aid/tuition/1930_Class_Tree_08_TT_1.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Looking up the trunk of a tree with brightly colored autumn leaves']
); ?>
<div class="animate-when-content-appears animation-slide-up">
   <p class="intro-text">Vassar provides a high-value education and is committed to meeting 100% of the demonstrated financial need of all admitted students.</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_wideContent(
    'Tuition and Fees Overview',
    '<p>The total cost to attend Vassar is $78,580</p>',
    'pb-0',
    'mw-4 '
); ?>


<div class="fancy-stats-container flex-column flex-lg-row animate-when-content-appears my-5">
    <div class="col-item  stat-item item-students">
        <div class="stat-item-fact">
            <div class="tagline">Tuition</div>
            <div class="display-2">$61,940</div>
        </div>
        <div class="stat-item-additional">
            <div class="stat-label text-primary">For the 2021–2022 school year</div>
        </div>
    </div>


    <div class="col-item symbol-item symbol-div d-none d-lg-block">
        <!-- ÷ -->
    </div>

    <div class="col-item stat-item item-faculty">
        <div class="stat-item-fact">
            <div class="tagline">Housing and Dining</div>
            <div class="display-2">$15,710</div>
        </div>
        <div class="stat-item-additional">
            <div class="stat-label text-primary">96% of Vassar students live on campus and housing</div>
        </div>
    </div>

    <div class="col-item symbol-item symbol-equals d-none d-lg-block">
        <!-- = -->
    </div>

    <div class="col-item stat-item item-ratio">
        <div class="stat-item-fact">
            <div class="tagline">Fees</div>
            <div class="display-2">$930<span class="delimiter-colon">:</span>1</div>
            <div class="stat-label text-primary">Covering Health Insurance and Activity Fees</div>
        </div>
    </div>
</div>

<?php echo end_sec_wideContent(); ?>
<?php echo sec_regularContent(
    null,
    'pt-0 text-center',
    '',
    ''
); ?>

<?php echo item_alert(
    null,
    '<p>Students should anticipate budgeting $2,250 for books, supplies, personal expenses, and transportation to and from the campus. Additional information can be found on <a href="https://offices.vassar.edu/student-financial-services/">Student Financial Services</a>.</p>',
    'info-circle',
    ' text-start alert-light alert-accent-gold'
); ?>

<a href="https://offices.vassar.edu/student-financial-services/" class="btn btn-primary arrow">Visit Student Financial Services</a>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'Room and Board',
    $admission_img_path.'financial-aid/tuition/Cushing-Dorm_Room_Series_Seven_12_HW_6.jpg',
    'image-is-first theme-charcoal',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Students living on campus are required to participate in a <a href="http://vassar.cafebonappetit.com">college board plan</a> (also known as the meal plan). For more information about housing, visit the <a  href="https://offices.vassar.edu/residential-life/">Office of Residential Life</a>.</p>

    <?php echo cta_link(
      'https://offices.vassar.edu/residential-life/',
      'Visit the Office of Residential Life'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Student Activity Fee',
    $admission_img_path.'financial-aid/tuition/0024-18-03-kr-wvkr-vassar-3474.jpg',
    'theme-burgundy has-bg quad-pattern',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Payment of this fee is required of all matriculated students. Student activity fees comprise the budget of the Vassar Student Association (student government) and provide funding for more than 100 student organizations and campus events.</p>

    <?php echo cta_link(
      '/admission/financial-aid/apply/',
      'Explore Student Orgs'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Student Health Insurance',
    $admission_img_path.'financial-aid/tuition/0105_14_11_TT_2826.jpg',
    'image-is-first theme-extralightgray',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>All students are required to have health insurance coverage.</p>

    <?php echo cta_link(
      'https://www.vassar.edu/social-media/student-orgs',
      'Visit Student Financial Services'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>






<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>