
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Visit Campus";
$page_classes = "visithome";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Visit</b>
   <b class="slide-from-right">Vassar</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $admission_img_path.'visit/0069-19-05-kr-spring-vassar-4632.jpg',
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
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo masthead_interiorPage(
    'Visiting Campus',
    'All Vassar students are surrounded by an environment designed to spark something amazing—a place where greatness can spring to life.',
    $admission_img_path.'visit/0070-19-05-kr-spring-library-vassar-6094.jpg');
?>



<?php echo sec_fullBleedImageColumn(
    'Visit the Vassar Campus In Person',
    $admission_img_path.'visit/0042-21-06-kr-reception-vassar-0130.jpg',
    'image-is-first theme-charcoal bg-dark section-large-title',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Get to know our vibrant community first-hand and learn more about the Vassar experience.</p>

    <?php echo cta_link(
      '/admission/visit/in-person/',
      'Learn more and register for an in-person visit'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Explore Our Virtual Opportunities',
    $admission_img_path.'visit/0191-19-10-ali-library-drone-vassar-vb-2015.jpg',
    'theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up section-large-title">
    <p>Vassar offers a wide array of opportunities to virtually explore the Vassar campus and to connect with our community. </p>

    <?php echo cta_link(
      '/admission/visit/virtual-programs/',
      'Explore virtual programs'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>












<?php echo sec_hasColumns(
    'Need more information about visiting?',
    2,
    '<p>Follow the links below or email <a href="mailto:admission@vassar.edu">admission@vassar.edu</a>, or ask a current Vassar student at <a href="mailto:askastudent@vassar.edu">askastudent@vassar.edu</a>!</p>',
    'theme-burgundy animate-when-content-appears animation-slide-up',
    ''
); ?>

<?php echo item_col(); ?>

<?php echo item_cardWithText(
    'Group Visit Info',
    '/admission/visit/group-visits/',
    ['url' => $admission_img_path.'visit/0055_15_04_KR_0110.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Want to schedule a group visit? Interactive virtual visits can be scheduled.</p>

<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo end_item_col(); ?>

<?php echo item_col(); ?>

<?php echo item_cardWithText(
    'Register',
    'https://apply.vassar.edu/portal/campusvisitcalendar',
    ['url' => $admission_img_path.'visit/Vassar_Campus_20190423_KR_9440.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Register for all on-campus tours and virtual events</p>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    'Stay in Touch',
    'theme-charcoal has-bg quad-pattern ',
    'text-center',
    ''
); ?>
<p class="intro-text">Join our mailing list to stay up to date with all things Vassar and get access to special events throughout the year.</p>
<a href="https://apply.vassar.edu/register/requestinfo" class="btn btn-light btn-lg mt-4">Join the List</a>


<?php echo end_sec_regularContent(); ?>



<?php echo site_footer(); ?>
