
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Outcomes";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left supertitle">Explore</b>
   <b class="slide-from-right">Outcomes</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $admission_img_path.'explore/outcomes/Commencement_grads_11_JA_2.jpg',
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
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo masthead_interiorPage(
    'Life After Vassar',
    '<span class="placeholder">Vassar is committed to ensuring our students’ growth and progress from Day 1 to beyond graduation.</span>',
    $placeholder_img_vertical);
?>




<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_regularContent(
    null,
    'theme-charcoal animate-when-content-appears mw-inner-1',
    null,
    null
); ?>

<?php echo animated_statement('Within six months of graduating, 96% of Vassar students are employed, in graduate school, or in a competitive fellowship.'); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_fullBleedImageColumn(
    'Career Development',
    $admission_img_path.'explore/outcomes/110619_160over90_Vassar_4689.jpg',
    'image-is-first theme-dark-burgundy quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Career Development Office helps students and alumni envision—then realize—a meaningful life after Vassar. The CDO assists students in choosing their major, offers resume and cover letter workshops, and provides networking opportunities. </p>
    <a href="https://offices.vassar.edu/careers/" class="px-0 btn btn-link arrow">Visit the Career Development Office</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Major Palooza',
    $admission_img_path.'explore/outcomes/0153-19-11-kr-major-palooza-vassar-5360-crop.jpg',
    ' theme-charcoal quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar hosts Major Palooza for sophomores to explore the value and versatility of a liberal arts degree, as well as to network with Vassar’s vast and dedicated alumni. Panels and receptions are available to all.</p>
    <a href="https://major-palooza.vassar.edu/" class="px-0 btn btn-link arrow">Visit Major Palooza</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Connections',
    $admission_img_path.'explore/outcomes/0002-18-01-kr-scc-estrella-vassar-0048.jpg',
    'image-is-first theme-dark-burgundy quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar’s Sophomore Career Connections introduces second-year students to the extraordinary range of career options available to them. Vassar offers an extensive network of alumni and parent mentors as one of our very best career resources.</p>
    <a href="https://www.vassar.edu/sophomore-career-connections" class="px-0 btn btn-link arrow">Visit Sophomore Career Connections</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<!-- RELATED TOPICS ===  -->

<?php echo sec_hasColumns(
    'More in This Section',
    3,
    null,
    'relatedtopics theme-burgundy',
    ''
); ?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-academics.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-campus.php');?>

<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
