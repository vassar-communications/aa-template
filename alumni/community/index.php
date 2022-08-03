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

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left">Our</b>
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
    'Connect with fellow community members, participate in events, sign-up for mentoring/networking opportunities, and learn about all the ways to give back to Vassar.',
    '/alumni/assets/img/alumni-community/Vassar_11.19.17_Woodmere_Phila-151-edits.jpg');
?>




<!-- end visit -->


<?php echo sec_fullBleedImageColumn(
    'Alumni Groups',
    '/alumni/assets/img/alumni-community/alumni-groups/0127_12_12_YEM_2467.jpg',
    'theme-cream image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Explore Vassar's extensive network of groups and clubs.</p>
    <?php echo cta_link(
        '/alumni/community/alumni-groups',
        'Needs-text'
    ); ?>
</div>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alumnae/i Association of Vassar',
    '/alumni/assets/img/alumni-community/aavc/Vassar_Reunion_19 BL_4788.jpg',
    'theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>A dynamic global network of 41,000+ members!</p>
    <?php echo cta_link(
        '/alumni/community/aavc',
        'Needs-text'
    ); ?>
</div>


<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Alumni News & Stories',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-cream image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Read about the latest achievements from Vassar alumni.
    </p>

    <?php echo cta_link(
        '/alumni/community/alumni-news',
        'Needs-text'
    ); ?>
</div>


<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
    null,
    '/alumni/assets/img/alumni-community/notable-alumni/0005-19-01-kr-scc-eng-gretchen-vassar-0089-crop.jpg',
    'theme-charcoal bg-dark',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5">Notable Alumni</h2>
    <p>Discover remarkable Vassar alumni throughout history who have made an impact in their communities and industries throughout the world.</p>

    <a href="/alumni/community/notable-alumni/" class="px-0 btn btn-link arrow">Discover our alumni</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo site_footer(); ?>
