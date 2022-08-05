
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Alumni Benefits",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-resources/alumni-benefits/Vassar_Reunion_19_BL_4706.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>


<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Alumni Benefits',
    '/alumni/assets/img/alumni-resources/alumni-benefits/reunion-1906-kr-vassar-3139.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<p class="intro-text">Vassar offers a wide array of benefits to the more than 41,000 alumni across the globe.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    'Alumni Benefits',
    '2',
    '<p>In addition to VassarConnects—an online community in which alumni can connect with each other and with the College through its <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple">Alumni Directory</a> and <a href="http://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=61">other services</a>, the following benefits are also available:</p>',
    'theme-dark-burgundy quad-pattern has-bg',
    ''

); ?>
<?php echo item_cardWithText(
    'Library',
    'https://library.vassar.edu/',
    ['url' => $alumni_img_path.'alumni-resources/alumni-benefits/0069-19-05-kr-spring-vassar-4173.jpg', 'alt' => 'replacealttext' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>

<p>Once you obtain your Vassar alumni ID card, you will have to register for library privileges and get your card validated at the library circulation desk. Check library hours and/or download an application for guest borrowing privileges.</p>


<?php echo end_item_cardWithText(
    '',
); ?>

<?php echo item_cardWithText(
    'Fitness Center',
    'https://www.vassarathletics.com/facilities/athletics-and-fitness-center/5',
    ['url' => $alumni_img_path.'alumni-resources/alumni-benefits/AFCtrack6.jpg', 'alt' => 'replacealttext' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>

<p>Use of the facilities is subject to various rules with which you should familiarize yourself prior to your visit, including advanced registration of any guest you intend to bring to the fitness center. Please consult the athletics website for the latest information, as rules and policies are subject to change.</p>



<?php echo end_item_cardWithText(
    '',
); ?>


<?php echo item_cardWithText(
    'Vassar Alumni ID Card',
    'https://offices.vassar.edu/card/alumni-id-card-request/',
    ['url' => $alumni_img_path.'alumni-resources/alumni-benefits/0138-15-11-kr-vcdf-vassar-0090.jpg', 'alt' => 'replacealttext' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>

<p>Vassar alumni ID cards provide alumni with access to the College's library and fitness center.</p>



<?php echo end_item_cardWithText(
    '',
); ?>



<?php echo item_cardWithText(
    'Vassar Email Address',
    'https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=429',
    ['url' => $alumni_img_path.'alumni-resources/alumni-benefits/adlov-taylor-vq-vassar-0911-lrr-8293.jpg', 'alt' => 'replacealttext' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>Alumni can obtain a Vassar-branded @alum.vassar.edu email address/account.</p>


<?php echo end_item_cardWithText(
    '',
); ?>


<?php echo item_cardWithText(
    'VassarNet',
    'https://vassarnet.vassar.edu/',
    ['url' => $alumni_img_path.'alumni-resources/alumni-benefits/0039-22-06-cs-reunion-vassar-347.jpg', 'alt' => 'replacealttext' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>Alumni, students, parents, faculty, and friends of Vassar can join to build their network and find Vassar-connected career networking opportunities.</p>

<?php echo end_item_cardWithText(
    '',
); ?>



<?php echo item_cardWithText(
    'Grants & Fellowships',
    '/alumni/resources/grants-fellowships',
    ['url' =>  $alumni_img_path.'alumni-resources/alumni-benefits/Jonathan_Kaiman.jpg', 'alt' => 'replacealttext' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>Alumni are eligible to apply for a variety of grants and fellowships.</p>
<?php echo end_item_cardWithText(
    '',
); ?>




<?php echo end_sec_hasColumns(); ?>




<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footeralumni(); ?>
