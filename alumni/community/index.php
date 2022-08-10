<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Our Community",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/Vassar_Reunion_19_BL_4968_edited.jpg"
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
    '/alumni/assets/img/alumni-community/Vassar_11.19.17_Woodmere_Phila-151-edits.jpg',
    null,
    null,
    ['img_alt_text' => 'Two Alumni community members talking']
);
?>




<!-- end visit -->

<?php echo sec_fullBleedImageColumn(
    'Alumnae/i Association of Vassar College',
    '/alumni/assets/img/alumni-community/aavc/Vassar_Reunion_19 BL_4788.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'AAVC members holding an AAVC banner']
); ?>
  <div class="animate-when-content-appears animation-slide-up">
      <p>A dynamic global network of 41,000+ members!</p>
      <?php echo cta_link(
          '/alumni/community/aavc',
          'Learn more about AAVC'
      ); ?>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alumni News & Stories',
    '/alumni/assets/img/alumni-community/blum-square.jpg',
    'theme-extralightgray quad-pattern has-bg image-is-first',
    '',
    ['img_alt_text' => 'Vassar Alumni Jason Blum speaking into a microphone']
); ?>
  <div class="animate-when-content-appears animation-slide-up">
      <p>Read about the latest achievements from Vassar alumni.
      </p>

      <?php echo cta_link(
          '/alumni/community/alumni-news',
          'Learn more'
      ); ?>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alumni Groups',
    '/alumni/assets/img/alumni-community/alumni-groups/0127_12_12_YEM_2467.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'Three Alumni community members talking']
); ?>
  <div class="animate-when-content-appears animation-slide-up">
      <p>Explore Vassar&#8217;s extensive network of groups and clubs.</p>
      <?php echo cta_link(
          '/alumni/community/alumni-groups',
          'Learn more about alumni groups'
      ); ?>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo site_footeralumni(); ?>
