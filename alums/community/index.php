<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Our Community",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/Vassar_Reunion_19_BL_4968_edited.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>


<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left">Our&nbsp;</b>
   <b class="slide-from-right">Community</b>',
    '727857456?h=6ff0b4bfe7',
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead_vid(); ?>


<?php echo interior_page_nav() ?>




<?php /*  PAGE CONTENT === */ ?>


<?php echo masthead_interiorPage(
    'Be Active. Grow.',
    'There are many ways to connect with Vassar’s global community. Explore the possibilities.',
    '/alums/assets/img/alums-community/Vassar_11.19.17_Woodmere_Phila-151-edits.jpg',
    null,
    null,
    ['img_alt_text' => 'A person in a black shirt and black pants stands next to a person in a grey sweater and black pants as they converse in front a large painting.']
);
?>




<!-- end visit -->

<?php echo sec_fullBleedImageColumn(
    'Alumnae/i Association of Vassar College',
    '/alums/assets/img/alums-community/aavc/Vassar_Reunion_19 BL_4788.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'A group of people holding a large grey banner with the letters AAVC on it are smiling at the viewer.']
); ?>
  <div class="animate-when-content-appears animation-slide-up">
      <p>A dynamic global network of 41,000+ members!</p>
      <?php echo cta_link(
          '/alums/community/aavc',
          'Learn more about AAVC.'
      ); ?>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alumnae House',
    '/alums/assets/img/alums-community/Vassar-Alumnae-T-Exteriors-a-3-community.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A three-story tudor-style building on a hill lit warmly at dusk, surrounded by tall trees and lush landscaping.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>For over one hundred years, Alumnae House has served the college and nearby community, welcoming returning alums, current and future students, families, and members of the public.</p>

    <?php echo cta_link(
        'https://alumnaehouse.com/about-us',
        'Learn more about Alumnae House.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alum News & Stories',
    '/alums/assets/img/alums-community/blum-square.jpg',
    'theme-extralightgray quad-pattern has-bg',
    '',
    ['img_alt_text' => 'Vassar alum Jason Blum, a person with short thick brown hair and a grey shirt, speaking into a microphone looking off to one side of the viewer.']
); ?>
  <div class="animate-when-content-appears animation-slide-up">
      <p>Read about the latest achievements from Vassar alums.
      </p>

      <?php echo cta_link(
          '/alums/community/alum-news',
          'Learn more about alum achievements.'
      ); ?>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alum Groups',
    '/alums/assets/img/alums-community/alum-groups/0127_12_12_YEM_2467.jpg',
    'theme-cream image-is-first',
    '',
    ['img_alt_text' => ' Three people stand in a circle speaking to each other, wearing formal attire.']
); ?>
  <div class="animate-when-content-appears animation-slide-up">
      <p>Explore Vassar&#8217;s extensive network of groups and clubs.</p>
      <?php echo cta_link(
          '/alums/community/alum-groups',
          'Learn more about alum groups.'
      ); ?>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
    'Vassar Quarterly',
    '/alums/assets/img/alums-community/vq-logo.gif',
    'theme-cream',
    '',
    ['img_alt_text' => 'A red square with white lettering that spells out VQ.']
); ?>
  <div class="animate-when-content-appears animation-slide-up">
      <?php echo cta_link(
          'https://www.vassar.edu/vq',
          'Read the <em>Vassar Quarterly</em>.'
      ); ?>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo site_footeralums(); ?>
