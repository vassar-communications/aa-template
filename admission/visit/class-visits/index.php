
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Class Visits";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo page_textmasthead('theme-verylightgray'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_regularContent(
    'The Vassar Classroom Visited',
    '',
    'text-center',
    ''
); ?>

<p>Want to experience the virtual Vassar classroom? Check out these pre-recorded classes on a range of topics, including music, astronomy, political science, and many more.</p>



<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    null,
    3,
    null,
    '',
    ''
); ?>

<?php echo item_col(''); ?>
<?php echo item_cardWithText(
    'Paulina Bren, Adjunct Associate Professor of International Studies',
    '#',
    ['url' => 'https://www.vassar.edu/sites/default/files/oembed_thumbnails/OntDGT0q2u18Ct2LHfiR1iKHGQqp38M76_XlqS_Qf78.', 'alt' => 'Classroom Visits' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Late Communism in the Eastern Bloc: Can It Tell Us Anything Today?</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>
<?php echo item_cardWithText(
    'David Esteban, Associate Professor of Biology and The Pauline Newman Director of Science, Technology, and Society',
    '#',
    ['url' => 'https://www.vassar.edu/sites/default/files/oembed_thumbnails/OntDGT0q2u18Ct2LHfiR1iKHGQqp38M76_XlqS_Qf78.', 'alt' => 'Classroom Visits' ],
    '',
    ['hlevel' => 4]
); ?>
<p>What Happens When You Don’t Recover from a Viral Infection?</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>



<?php echo item_col(''); ?>
<?php echo item_cardWithText(
    'Gisella A. Kagy, Assistant Professor of Economics',
    '#',
    ['url' => 'https://www.vassar.edu/sites/default/files/oembed_thumbnails/OntDGT0q2u18Ct2LHfiR1iKHGQqp38M76_XlqS_Qf78.', 'alt' => 'Classroom Visits' ],
    '',
    ['hlevel' => 4]
); ?>
<p>The Impact of COVID-19 on the Lives of Women in Ethiopia’s Garment Industry</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>
<?php echo item_cardWithText(
    'Barry Lam, Associate Professor of Philosophy',
    '#',
    ['url' => 'https://www.vassar.edu/sites/default/files/oembed_thumbnails/OntDGT0q2u18Ct2LHfiR1iKHGQqp38M76_XlqS_Qf78.', 'alt' => 'Classroom Visits' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Why Punish? A Conversation on Retributive Justice</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>
<?php echo item_cardWithText(
    'Jonathon Kahn, Professor of Religion',
    '#',
    ['url' => 'https://www.vassar.edu/sites/default/files/oembed_thumbnails/OntDGT0q2u18Ct2LHfiR1iKHGQqp38M76_XlqS_Qf78.', 'alt' => 'Classroom Visits' ],
    '',
    ['hlevel' => 4]
); ?>
<p>The White Disavowal of Racism: What It Means When the Central Park Dog-Walker, Amy Cooper, Says She’s Not a Racist</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>



<?php echo item_col(''); ?>
<?php echo item_cardWithText(
    'Kathryn Libin, Associate Professor of Music',
    '#',
    ['url' => 'https://www.vassar.edu/sites/default/files/oembed_thumbnails/OntDGT0q2u18Ct2LHfiR1iKHGQqp38M76_XlqS_Qf78.', 'alt' => 'Classroom Visits' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Beethoven, the Eroica Symphony, and Prince Lobkowitz’s Musical Workshop</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>





<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
