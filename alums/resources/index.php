<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Alum Resources",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */

$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>



<?php echo hamburger_navigation_alums(); ?>




<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Alum&nbsp;</b>
   <b class="slide-from-right">Resources</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => '/alums/assets/img/alums-resources/0133-21-10-kr-night-campus-vassar-0003.jpg',
        'bg-image-alt' => 'Vassar’s Thompson Memorial Library, a large, stone building with stained-glass windows and classical architecture.',
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

<!-- visit -->


<?php echo masthead_interiorPage(
    'What’s Not to Love?',
    'A whole host of services and benefits are available to Vassar alums...automatically.',
    '/alums/assets/img/alums-resources/Sunset_Lake_15_TT_1519.jpg',
    null,
    null,
    ['img_alt_text' => 'A landscape of various flowering trees of different colors on a hill behind a lake on a clear sunny spring day.']
);
?>


<?php echo sec_fullBleedImageColumn(
    'Alumnae House',
    $alums_img_path.'alums-resources/Vassar-Alumnae-T-Exteriors-a-4-resources-page.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Courtyard and flagstone patio of a Tudor-style building at dusk, with lit string lights, wrought iron patio furniture, and manicured lawn surrounded by flowers and shrubs.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Honoring tradition and embracing the future, Alumnae House is a welcoming home for the entire Vassar community and the public.</p>

    <?php echo cta_link(
        'https://alumnaehouse.com',
        'Visit Alumnae House.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
        'Explore Resources',
    '3',
    '<p>Access career development opportunities; take advantage of a top-notch travel program that allows you to traverse the globe with Vassar professors knowledgeable about the various regions, their history, and culture; and get goodies like a dedicated Vassar email address and a lifetime subscription to the <em>Vassar Quarterly</em> (VQ).</p>',
    'theme-burgundy',
    ''
);?>

<?php echo item_cardWithText(
    'Alum Directory',
    'https://connect.vassar.edu/s/1654/22/interior.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple',
    ['url' => '/alums/assets/img/alums-resources/0640_Vassar_College_exteriors_campus_life_Oct_2019_JA.jpg', 'alt' => 'A group of people sitting outside on a large circular wood bench with flowering shrubs planted behind the bench.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Log into your account to view the full directory.</p>

<?php echo end_item_cardWithText(
    null,
); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-career-support.php');?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-grants.php');?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-college-search-101.php');?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-alums-benefits.php');?>

<?php echo end_sec_hasColumns(); ?>



<?php echo site_footeralums(); ?>
