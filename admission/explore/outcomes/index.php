
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Explore Outcomes",
  "page_navTitle":"Outcomes",
  "feature_image":"/admission/assets/images/explore/outcomes/Commencement_grads_11_JA_2.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

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
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Group of graduates in gowns and mortarboards seen from the back',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>


<?php echo interior_page_nav() ?>

<?php echo masthead_interiorPage(
    'Life After Vassar',
    'Yes, we know you have to think beyond graduation, beyond Vassar. And we are here to support you every step of the way.',
    '/admission/assets/images/explore/outcomes/2022-cap-toss.jpg',
    null,
    null,
    ['img_alt_text' => 'Cap toss at Vassar College’s 2022 Commenncement ceremony']
  );
?>




<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_regularContent(
    null,
    'theme-charcoal animate-when-content-appears mw-inner-4',
    null,
    null
); ?>

<?php echo animated_statement('Within six months of graduating, 96% of Vassar students are employed, in graduate school, or in a competitive fellowship.'); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_fullBleedImageColumn(
    'Career Development',
    $admission_img_path.'explore/outcomes/110619_160over90_Vassar_4689.jpg',
    'image-is-first theme-burgundy quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Career Development Office helps students and alumni envision—then realize—a meaningful life after Vassar. The CDO assists students in choosing their major, offers resume and cover letter workshops, and provides networking opportunities. </p>
    <?php echo cta_link(
        'https://offices.vassar.edu/careers/',
        'Visit the Career Development Office'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Major Palooza',
    $admission_img_path.'explore/outcomes/0153-19-11-kr-major-palooza-vassar-5360-crop.jpg',
    ' theme-charcoal',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar hosts Major Palooza for sophomores to explore the value and versatility of a liberal arts degree, as well as to network with Vassar’s vast and dedicated alumni. Panels and receptions are available to all.</p>
    <?php echo cta_link(
        'https://major-palooza.vassar.edu/',
        'Visit Major Palooza'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Connections',
    $admission_img_path.'explore/outcomes/0002-18-01-kr-scc-estrella-vassar-0048.jpg',
    'image-is-first theme-extralightgray quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar’s Sophomore Career Connections introduces second-year students to the extraordinary range of career options available to them. Vassar offers an extensive network of alumni and parent mentors as one of our very best career resources.</p>
    <?php echo cta_link(
        'https://www.vassar.edu/sophomore-career-connections',
        'Visit Sophomore Career Connections'
    ); ?>
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
