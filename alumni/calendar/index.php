<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Calendar",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */

$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>


<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left">Alumni</b>
   <b class="slide-from-right">Calendar</b>',
    '727857392?h=9586cb06fa',
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






<?php echo site_footeralumni(); ?>
