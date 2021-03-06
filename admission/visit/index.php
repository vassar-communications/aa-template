
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
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/visit/0069-19-05-kr-spring-vassar-4632.jpg',
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
    'This text must change',
    'This is only placeholder text. We need to get an intro sentence for this section.',
    'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg');
?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/visit/0042-21-06-kr-reception-vassar-0130.jpg',
    'image-is-first theme-charcoal bg-dark',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Visit the Vassar Campus In Person </h2>
    <p>Get to know our vibrant community first-hand and learn more about the Vassar experience.</p>

    <a href="/admission/visit/in-person/" class="px-0 btn btn-link arrow">Learn more and register for an in-person visit</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/visit/0191-19-10-ali-library-drone-vassar-vb-2015.jpg',
    'theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Explore Our Virtual Opportunities</h2>
    <p>Vassar offers a wide array of opportunities to virtually explore the Vassar campus and to connect with our community. </p>

    <a href="/admission/visit/virtual-programs/" class="px-0 btn btn-link arrow">Explore virtual programs</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>












<?php echo sec_hasColumns(
    'Need more information about visiting?',
    2,
    'Follow the links below or email admission@vassar.edu, or ask a current Vassar student at askastudent@vassar.edu!',
    'theme-burgundy animate-when-content-appears animation-slide-up',
    ''
); ?>

<?php echo item_col(); ?>

<?php echo item_cardWithText(
    'Group Visit Info',
    '/admission/visit/group-visits/',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/0055_15_04_KR_0110.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
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
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/Vassar_Campus_20190423_KR_9440.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
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
<p>Join our mailing list to stay up to date with all things Vassar and get access to special events throughout the year.</p>
<a href="https://apply.vassar.edu/register/requestinfo" class="btn btn-light btn-lg">Join the List</a>


<?php echo end_sec_regularContent(); ?>



<?php echo site_footer(); ?>
