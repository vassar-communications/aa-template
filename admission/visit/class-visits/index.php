
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


<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/assets/images/placeholders/main-placeholder.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-6">Want to experience the virtual Vassar classroom? Check out these pre-recorded classes on a range of topics, including music, astronomy, political science, and many more.</h1>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    'Featured Classes',
    3,
    null,
    'theme-charcoal bg-dark',
    ''
); ?>

<?php echo item_col(''); ?>

<?php echo item_cardWithText(
    'Late Communism in the Eastern Bloc: Can It Tell Us Anything Today?',
    '#',
    ['url' => '/assets/images/placeholders/main-placeholder.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>

<p>Paulina Bren, Adjunct Associate Professor of International Studies</p>

<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>

<?php echo item_cardWithText(
    'What Happens When You Don’t Recover from a Viral Infection?',
    '#',
    ['url' => '/assets/images/placeholders/main-placeholder.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>

<p>David Esteban, Associate Professor of Biology and The Pauline Newman Director of Science, Technology, and Society</p>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo end_item_col(); ?>



<?php echo item_col(''); ?>


<?php echo item_cardWithText(
    'The Impact of COVID-19 on the Lives of Women in Ethiopia’s Garment Industry',
    '#',
    ['url' => '/assets/images/placeholders/main-placeholder.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>

<p>Gisella A. Kagy, Assistant Professor of Economics</p>

<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>

<?php echo item_cardWithText(
    'Why Punish? A Conversation on Retributive Justice',
    '#',
    ['url' => '/assets/images/placeholders/main-placeholder.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>

<p>Barry Lam, Associate Professor of Philosophy</p>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>



<?php echo item_cardWithText(
    'The White Disavowal of Racism: What It Means When the Central Park Dog-Walker, Amy Cooper, Says She’s Not a Racist',
    '#',
    ['url' => '/assets/images/placeholders/main-placeholder.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>
<p>Jonathon Kahn, Professor of Religion</p>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>



<?php echo item_col(''); ?>

<?php echo item_cardWithText(
    'Beethoven, the Eroica Symphony, and Prince Lobkowitz’s Musical Workshop',
    '#',
    ['url' => '/assets/images/placeholders/main-placeholder.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>
<p>Kathryn Libin, Associate Professor of Music</p>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>





<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-group-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>