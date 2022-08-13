<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Alumni Resources",
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
    '<b class="slide-from-left">Alumni&nbsp;</b>
   <b class="slide-from-right">Resources</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => '/alumni/assets/img/alumni-resources/0133-21-10-kr-night-campus-vassar-0003.jpg',
        'bg-image-alt' => 'Exterior of Thompson Library lit and night',
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
    'A whole host of services and benefits are available to Vassar alumni...automatically.',
    '/alumni/assets/img/alumni-resources/Sunset_Lake_15_TT_1519.jpg',
    null,
    null,
    ['img_alt_text' => 'Spring time at Sunset Lake on Vassar campus']
);
?>

<?php echo sec_hasColumns(
        'Explore Resources',
    '3',
    '<p>Access career development opportunities; take advantage of a top-notch travel program that allows you to traverse the globe with Vassar professors knowledgeable about the various regions, their history, and culture; and get goodies like a dedicated Vassar email address and a lifetime subscription to the <em>Vassar Quarterly</em> (VQ).</p>',
    'theme-dark-burgundy quad-pattern has-bg',
    ''
);?>

<?php echo item_cardWithText(
    'Alumni Directory',
    'https://securelb.imodules.com/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=3&cid=40&returnurl=https%3a%2f%2fconnect.vassar.edu%2fs%2f1654%2f2%2f16%2finterior-ai.aspx%3fsid%3d1654%26gid%3d2%26pgid%3d6%26cid%3d41#/Search/Simple',
    ['url' => '/alumni/assets/img/alumni-resources/0640_Vassar_College_exteriors_campus_life_Oct_2019_JA.jpg', 'alt' => 'Group of people sitting on a circular bench on Vassar Campus' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Log into your account to view the full directory.</p>

<?php echo end_item_cardWithText(
    null,
); ?>

<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>

<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-career-support.php');?>

<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-grants.php');?>

<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-college-search-101.php');?>

<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-alumni-benefits.php');?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alumnae House',
    $alumni_img_path.'alumni-resources/alumnae-house/0050_17_06_BL_8695.jpg',
    '',
    '',
    ['img_alt_text' => 'Courtyard at Alumnae House']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>With a reverence for the past and a nod toward the future, Alumnae House strives to be a welcoming home for all Vassar students and alums.</p>

    <?php echo cta_link(
        '/alumni/resources/alumnae-house/',
        'Visit Alumnae House'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo site_footeralumni(); ?>
