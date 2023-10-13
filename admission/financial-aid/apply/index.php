
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{"page_title":"Applying for Aid","feature_image":"/admission/assets/images/financial-aid/0038-22-06-cs-reunion-vassar-040.jpg"}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Large Tree Facing in front of Main Building on Vassar Campus']); ?>


<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'Student Financial Services',
    $admission_img_path.'financial-aid/apply/0069-19-05-kr-spring-vassar-4749.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Spring time View of the Raymond entrance from Main building.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">We’re here to help you through each step as you navigate the financial aid process.</p>

    <p>If you have any questions, contact <a href="mailto:finaid@vassar.edu">finaid@vassar.edu</a> or visit Student Financial Services.</p>

    <?php echo cta_link(
        'https://offices.vassar.edu/student-financial-services/',
        'Visit Student Financial Services'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_hasColumns(
    'Apply for Financial Aid',
    '3',
    '<p class="intro-text">To be considered for financial aid, you must complete the following items by the posted deadlines:</p>',
    'items-equal-height',
    'gap-3'
); ?>

<?php echo item_col(); ?>

<div class="card plain-text-card d-flex justify-content-between">
    <h3>FAFSA</h3>
    <p>The Free Application for Federal Student Aid (FAFSA) must be completed to determine eligibility for all sources of federal financial aid.</p>

    <ul class="labeled-list">
        <?php echo labeled_list_item('Vassar code', '002895'); ?>
        <?php echo labeled_list_item('Available', 'December 2023'); ?>
        <?php echo labeled_list_item('Applies to', 'U.S. Citizens and Permanent Residents only'); ?>
    </ul>

    <p>Once completed, review the Student Aid Report (SAR) sent to you by the Department of Education for accuracy. If necessary, correct any errors and resubmit.</p>
    <a href="https://studentaid.gov/h/apply-for-aid/fafsa"  class="px-0 btn btn-link arrow text-start">Visit FAFSA.org</a>
</div>

<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<div class="card plain-text-card d-flex justify-content-between">
    <h3>CSS Profile</h3>
    <p>The College Scholarship Service Profile (CSS Profile) is required to determine eligibility for Vassar scholarship aid.</p>

    <ul class="labeled-list">
        <?php echo labeled_list_item('Vassar code', '2956'); ?>
        <?php echo labeled_list_item('Available after', 'October 1st'); ?>
        <?php echo labeled_list_item('Applies to', 'All students, domestic and international'); ?>
    </ul>

    <p>If parents are separated/divorced, both parents will each complete their own CSS Profile application.</p>

    <a href="https://cssprofile.collegeboard.org/"  class="px-0 btn btn-link arrow text-start">Visit CSS Profile</a>
</div>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>

<div class="card plain-text-card d-flex justify-content-between">
    <div>
    <h3>IDOC</h3>
    <p>Through the College Board Institutional Documentation Service (IDOC), you can submit requested documentation as part of the aid application.</p>
    <ul>
        <li>Available late October/early November; must complete CSS Profile first</li>
        <li>IDOC will email instructions once you become eligible for service</li>
        <li>Write your name and IDOC ID number on all documents</li>
        <li>Retain a copy of all documents you submit</li>
    </ul>
    </div>
    <div>
    <a href="https://pages.collegeboard.org/idoc"  class="px-0 btn btn-link arrow text-start">Visit Collegeboard IDOC</a>
    </div>
</div>

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    null,
    'theme-cream',
    '',
    ''
); ?>

<?php echo item_col(); ?>
<?php echo deadlines(
    'Financial Aid Deadlines',
    null,
    null,
    'shadow'
); ?>
<?php echo deadlines_item('Early Decision I', $deadlines['finaid-early-decision-1']); ?>
<?php echo deadlines_item('Early Decision II', $deadlines['finaid-early-decision-2']); ?>
<?php echo deadlines_item('Regular Decision', $deadlines['finaid-regular-decision']); ?>
<?php echo deadlines_item('Fall Transfer', $deadlines['finaid-fall-transfer']); ?>
<?php echo deadlines_item('Spring Transfer', $deadlines['finaid-spring-transfer']); ?>
<?php echo deadlines_item('Returning Students', $deadlines['finaid-returning']); ?>

<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>


<?php /* echo item_col(); ?>

  <a href="https://www.vassar.edu/sites/default/files/2021-06/Vassar-Viewbook-2020.pdf"><img loading="lazy" src="https://www.vassar.edu/sites/default/files/2021-06/viewbook-2020.jpg" alt="Cover of Vassar's 2020 Viewbook"></a>
  <p class="card-text"><a href="https://www.vassar.edu/sites/default/files/2021-06/Vassar-Viewbook-2020.pdf">Read our Viewbook</a></p> ?>

    <?php echo end_item_col(); */ ?>


<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Financial Aid Application Checklists',
    '',
    '',
    ''
); ?>






<p>For detailed information regarding financial aid application requirements and deadlines, please select the appropriate checklist below.</p>

<ul class="linked-list">
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2022/10/Prospective_US_2324.pdf">U.S. Citizen or Permanent Resident (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2022/10/Prospective_Canadian_2223.pdf">Canadian Citizen (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/docs/prospective-international.pdf">International Student (PDF)</a></li>
</ul>


<?php echo end_sec_regularContent(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-tuition.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
